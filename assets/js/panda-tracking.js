// JavaScript Document
document.addEventListener('click', function (e) {
    const el = e.target.closest('[data-panda-click]');
    if (!el) return;

    navigator.sendBeacon('/wp-admin/admin-ajax.php', new URLSearchParams({
        action: 'panda_click',
        from: el.dataset.from || '',
        to: el.dataset.to || '',
        vendor_id: el.dataset.vendor || ''
    }));
});
