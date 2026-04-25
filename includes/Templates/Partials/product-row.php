<?php
/** @var array{
 * title:string,
 * image?:string,
 * canonical_hash?:string,
 * slug?:string
 *} $product
 * 
/** @var array{
 * shop:string,
 * price:float,
 * currency:string
 * }|null $bestOffer */
 
?>

<div class="apify-product-row" style="
    display:flex;
    gap:12px;
    padding:12px 0;
    border-bottom:1px solid #eee;
">

    <!-- 🖼 image -->
    <div style="width:80px;flex-shrink:0;">
        <?php if (!empty($product['image'])): ?>
            <img
                src="<?= esc_url($product['image']) ?>"
                alt="<?= esc_attr($product['title'] ?? '') ?>"
                loading="lazy"
                style="width:80px;height:auto;border-radius:4px;"
            >
        <?php else: ?>
            <div style="width:80px;height:80px;background:#f3f3f3;"></div>
        <?php endif; ?>
    </div>

    <!-- 📦 content -->
    <div style="flex:1;">

        <!-- 🏷 title -->
        <div style="font-weight:bold;margin-bottom:5px;">
            <?= esc_html((string)($product['title'] ?? '')) ?>
        </div>

        <!-- 💰 best price -->
        <?php if (!empty($bestOffer)): ?>
            <div style="font-size:14px;color:#2271b1;">
                od <?= esc_html(number_format((float)$bestOffer['price'], 2)) ?>
                <?= esc_html((string)$bestOffer['currency']) ?>
            </div>
        <?php endif; ?>

    </div>

    <!-- 👉 CTA -->
    <div style="align-self:center;">
        <?php if (!empty($product['slug'])): ?>
            <a
                href="<?= esc_url(home_url('/produkt/' . $product['slug'])) ?>"
                style="
                    padding:6px 10px;
                    background:#2271b1;
                    color:#fff;
                    border-radius:4px;
                    text-decoration:none;
                    font-size:12px;
                "
            >
                Detail
            </a>
        <?php endif; ?>
    </div>

</div>
