document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('load-more-offers');
    const container = document.getElementById('offers');

    if (!btn || !container) return;

    let loading = false;

    btn.addEventListener('click', function () {
        if (loading) return;

        const hash = btn.dataset.hash;
        if (!hash) return;

        loading = true;
        btn.disabled = true;
        btn.innerText = 'Načítám...';

        fetch('/wp-json/apify/v1/product/' + hash)
            .then(r => r.json())
            .then(data => {
                if (!data || !data.ok || !Array.isArray(data.offers)) {
                    throw new Error('Invalid response');
                }

                data.offers.forEach(row => {
                    const el = document.createElement('div');
                    el.innerHTML = `
                        <strong>${row.shop}</strong>:
                        ${row.price} ${row.currency}
                    `;
                    container.appendChild(el);
                });

                // schovej button po načtení
                btn.remove();
            })
            .catch(() => {
                btn.disabled = false;
                btn.innerText = 'Zkusit znovu';
            })
            .finally(() => {
                loading = false;
            });
    });
});