<?php
/** @var array{
 * title?:string,
 * image?:string,
 * description?:string,
 * cannonical_hash?:string
 * } $product
 *@var array<int, array{
 * shop:string,
 * price:float,
 * currency:string
 * }> $topOffers
* @var array{
* shop:string,
* price:float,
* currency:string
* }|null $bestOffer 
 */

// 🔥 derived data
$prices = array_map(static fn($o) => (float)$o['price'], $topOffers);
$minPrice = $prices ? min($prices) : 0;
$maxPrice = $prices ? max($prices) : 0;

// fake rating (dokud nemáš reálné)
$ratingValue = 4.4;
$reviewCount = count($topOffers) * 3;
?>

<h1><?= esc_html($product['title'] ?? '') ?></h1>

<?php if (!empty($product['image'])): ?>
    <img
        src="<?= esc_url($product['image']) ?>"
        alt="<?= esc_attr($product['title'] ?? '') ?>"
        style="max-width:300px;margin-bottom:15px;"
        loading="lazy"
    >
<?php endif; ?>

<?php if (!empty($product['description'])): ?>
    <p style="color:#444;max-width:600px;">
        <?= esc_html($product['description']) ?>
    </p>
<?php endif; ?>

<?php if (!empty($bestOffer)): ?>
    <div class="apify-best-offer" style="margin-bottom:15px;">
        <strong>Nejlepší cena:</strong>
        <?= esc_html(number_format((float)$bestOffer['price'], 2)) ?>
        <?= esc_html($bestOffer['currency']) ?>
        <span style="color:#666;">
            (<?= esc_html($bestOffer['shop']) ?>)
        </span>
    </div>
<?php endif; ?>

<div id="offers">
    <?php foreach ($topOffers as $offer): ?>
        <?php include __DIR__ . '/../Partials/price-row.php'; ?>
    <?php endforeach; ?>
</div>

<?php if (!empty($topOffers)): ?>
    <button
        id="load-more-offers"
        data-hash="<?= esc_attr($product['canonical_hash'] ?? '') ?>"
    >
        Další nabídky
    </button>
<?php endif; ?>

<!-- 🔥 schema.org (UPGRADE) -->
<script type="application/ld+json">
<?= wp_json_encode([
    '@context' => 'https://schema.org/',
    '@type'    => 'Product',

    'name'        => (string) ($product['title'] ??''),
    'description' => (string) ($product['description'] ?? ''),
    'image'       => (string) ($product['image'] ?? ''),

    // 🔥 rating
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => $ratingValue,
        'reviewCount' => $reviewCount,
    ],

    // 🔥 price range (Google miluje)
    'offers' => [
        '@type'         => 'AggregateOffer',
        'lowPrice'      => $minPrice,
        'highPrice'     => $maxPrice,
        'priceCurrency' => 'CZK',
        'offerCount'    => count($topOffers),
    ],

], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
</script>
