jQuery(function ($) {
    let offset = 0;
    const limit = 50;
    const $body = $('#apify-logs-body');

    function badge(type) {
        let color = '#777';

        if (type.includes('error')) color = '#d63638';
        else if (type.includes('success')) color = '#46b450';
        else if (type.includes('batch')) color = '#2271b1';
        else if (type.includes('rate')) color = '#dba617';

        return `<span style="color:#fff;background:${color};padding:2px 6px;border-radius:3px">${type}</span>`;
    }

    function escapeHtml(text) {
        return $('<div>').text(text).html();
    }

    function render(rows) {
        rows.forEach(row => {
            $body.append(`
                <tr>
                    <td>${row.created_at}</td>
                    <td>${badge(row.type)}</td>
                    <td>${escapeHtml(row.message)}</td>
                    <td><pre style="white-space:pre-wrap;">${escapeHtml(row.context || '')}</pre></td>
                </tr>
            `);
        });
    }

    function load(reset = false) {
        if (reset) {
            offset = 0;
            $body.empty();
        }

        $('#apify-load-more').prop('disabled', true).text('Loading...');

        $.post(ApifyLogs.ajaxUrl, {
            action: 'apify_logs_load',
            nonce: ApifyLogs.nonce,
            offset: offset,
            type: $('#apify-log-type').val(),
            date: $('#apify-log-date').val()
        }, function (res) {
            if (res.success) {
                render(res.data);

                if (res.data.length < limit) {
                    $('#apify-load-more').hide();
                } else {
                    offset += limit;
                    $('#apify-load-more').show().prop('disabled', false).text('Load more');
                }
            }
        });
    }

    $('#apify-load-more').on('click', () => load());

    $('#apify-filter').on('click', () => load(true));

    $('#apify-clear-logs').on('click', function () {
        if (!confirm('Clear all logs?')) return;

        $.post(ApifyLogs.ajaxUrl, {
            action: 'apify_logs_clear',
            nonce: ApifyLogs.nonce
        }, function () {
            load(true);
        });
    });

    $('#apify-export').on('click', function () {
        const params = $.param({
            type: $('#apify-log-type').val(),
            date: $('#apify-log-date').val()
        });

        window.location = ApifyLogs.ajaxUrl + '?action=apify_logs_export&nonce=' + ApifyLogs.nonce + '&' + params;
    });

    // initial load
    load();
});