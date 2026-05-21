<?php

declare(strict_types=1);

namespace Tests\Unit\Shortcodes\Security;

use Panda\Apify\Shortcodes\ShortcodeManager;
use PHPUnit\Framework\TestCase;

final class ShortcodeAliasTest extends TestCase
{
    public function testAliasIsSuggested(): void
    {
        $manager = new ShortcodeManager();

        self::assertSame('product', $manager->suggest('prd'));
        self::assertSame('price-intl', $manager->suggest('priceintl'));
    }
}
