<?php
/** @var array $product */
/** @var array $topOffers */
/** @var array|null $offers */
/** @var array|null $bestOffer */
/** @var float $priceMin */
/** @var float $priceMax */
/** @var float|null $ratingValue */
/** @var int|null $reviewCount */
?>
<?Php 
$offers = $offers ?? $topOffers;
?>
<h1><?= esc_html($product['title'] ?? '') ?></h1>

<?php if (!empty($product['image'])): ?>
    <img
        src="<?= esc_url($product['image']) ?>"
        alt="<?= esc_attr($product['title'] ?? '') ?>"
        loading="lazy"
        style="max-width:300px;margin-bottom:15px;"
    >
<?php endif; ?>

<?php if (!empty($product['description'])): ?>
    <p><?= esc_html($product['description']) ?></p>
<?php else: ?>
    <p>
        Porovnání cen produktu <?= esc_html($product['title'] ?? '') ?>.
        Nejlepší nabídky od ověřených obchodů na jednom místě.
    </p>
<?php endif; ?>

<?php if (!empty($bestOffer)): ?>
    <div class="apify-best-offer" style="margin-bottom:15px;">
        <strong>Nejlepší cena:</strong>
        <?= esc_html(number_format((float)($bestOffer['price'] ?? 0), 2)) ?>
        <?= esc_html($bestOffer['currency'] ?? 'CZK') ?>
        <span style="color:#666;">
            (<?= esc_html($bestOffer['shop'] ?? '') ?>)
        </span>
    </div>
<?php endif; ?>

<div id="offers">
    <?php foreach ($topOffers as $offer): ?>
        <?php include __DIR__ . '/../Partials/price-row.php'; ?>
    <?php endforeach; ?>
</div>

<?php if (!empty($offers)): ?>
    <button
        id="load-more-offers"
        data-hash="<?= esc_attr($product['canonical_hash'] ?? '') ?>"
    >
        Další nabídky
    </button>
<?php endif; ?>

<!-- 🔥 SEO fallback (Google vidí všechny nabídky) -->
<?php if (!empty($offers)): ?>
<div style="display:none;">
    <?php foreach ($offers as $offer): ?>
        <div>
            <?= esc_html($offer['shop']) ?> -
            <?= esc_html((string)$offer['price']) ?>
            <?= esc_html($offer['currency']) ?>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<!-- 🔥 schema.org (UPGRADE) -->
<script type="application/ld+json">
<?= wp_json_encode([
    '@context' => 'https://schema.org/',
    '@type'    => 'Product',

    'name'        => (string)($product['title'] ?? ''),
    'description' => (string)($product['description'] ?? ''),
    'image'       => (string)($product['image'] ?? ''),

    'aggregateRating' => $ratingValue ? [
        '@type'       => 'AggregateRating',
        'ratingValue' => $ratingValue,
        'reviewCount' => $reviewCount,
    ] : null,

    'offers' => array_values(array_map(static function ($o) {
        return [
            '@type'         => 'Offer',
            'price'         => (float)($o['price'] ?? 0),
            'priceCurrency' => (string)($o['currency'] ?? 'CZK'),
            'seller'        => [
                '@type' => 'Organization',
                'name'  => (string)($o['shop'] ?? ''),
            ],
        ];
    }, $offers)),

], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>
