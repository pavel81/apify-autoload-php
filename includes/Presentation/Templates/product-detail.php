<?php
/** @var array<string, mixed> $productData
* @var array <int, array{
 * shop:string,
 * price:float,
 * currency:string
 * }>$offersData 
 */
 $productData = $productData ?? [];
 $offersData  = $offersData  ?? [];
?>

<h1><?= esc_html($productData['title'] ?? '') ?></h1>

<?php if ($offersData): ?>
    <ul>
        <?php foreach ($offersData as $offer): ?>
            <li>
                <?= esc_html($offer['shop']) ?>:
                <?= esc_html((string)$offer['price']) ?>
                <?= esc_html($offer['currency']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
