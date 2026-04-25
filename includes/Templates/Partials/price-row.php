<?php
/** @var array{
 * shop:string,
 * price:float,
 * currency:string,
 * url?:string
 * } $offer 
 */
?>

<div class="apify-offer" style="
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:8px 0;
    border-bottom:1px solid #eee;
">
    <div>
        <strong>
            <?= esc_html((string)($offer['shop'] ?? '')) ?>
        </strong>
    </div>

    <div style="font-weight:bold;">
        <?= esc_html(number_format((float)($offer['price'] ?? 0), 2)) ?>
        <?= esc_html((string)($offer['currency'] ?? 'CZK')) ?>
    </div>

    <?php if (!empty($offer['url'])): ?>
        <a
            href="<?= esc_url($offer['url']) ?>"
            target="_blank"
            rel="nofollow noopener"
            style="
                margin-left:10px;
                font-size:12px;
                color:#2271b1;
                text-decoration:none;
            "
        >
            Detail
        </a>
    <?php endif; ?>
</div>
