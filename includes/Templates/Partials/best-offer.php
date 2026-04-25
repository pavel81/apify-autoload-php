<?php
/** @var array{
 * shop:string,
 * price:float,
 * currency:string
 * }|null $bestOffer 
 */
 
?>

<?php if (!empty($bestOffer)): ?>
    <div class="apify-best-offer" style="margin-bottom:15px;padding:10px;background:#f0f8ff;border-radius:6px;">
        <strong>Nejlepší cena:</strong><br>

        <?= esc_html((string)($bestOffer['shop'] ?? '')) ?> –
        <?= esc_html(number_format((float)($bestOffer['price'] ?? 0), 2)) ?>
        <?= esc_html((string)($bestOffer['currency'] ?? 'CZK')) ?>
    </div>
<?php endif; ?>
