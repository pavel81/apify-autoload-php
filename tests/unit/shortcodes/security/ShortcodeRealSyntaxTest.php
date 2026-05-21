<?php

declare(strict_types=1);

namespace Tests\Unit\Shortcodes\Security;

use Panda\Apify\Shortcodes\ShortcodeManager;
use PHPUnit\Framework\TestCase;

final class ShortcodeRealSyntaxTest extends TestCase
{
    public function testValidShortcodeSyntaxIsAccepted(): void
    {
        $manager = new ShortcodeManager();

        self::assertSame(
            'product',
            $manager->suggest('[product]')
        );
    }

    public function testInvalidShortcodeSyntaxIsRejected(): void
    {
        $manager = new ShortcodeManager();

        self::assertSame(
            '',
            $manager->render('[prduct]')
        );
    }
}
