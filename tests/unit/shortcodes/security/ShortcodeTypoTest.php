<?php

declare(strict_types=1);

namespace Panda\Apify\Tests\Unit\Shortcodes\Security;

use Panda\Apify\Shortcodes\ShortcodeManager;
use PHPUnit\Framework\TestCase;

final class ShortcodeTypoTest extends TestCase
{
    public function testUnknownTypoIsRejected(): void
    {
        $manager = new ShortcodeManager();

        self::assertNull($manager->suggest('prduct'));
        self::assertSame('', $manager->render('prduct'));
        self::assertSame('product', $manager->suggest('prd'));
        self::assertSame('product', $manager->suggest('[prd]'));
        self::assertSame('product', $manager->suggest('[product]'));
    }
}
