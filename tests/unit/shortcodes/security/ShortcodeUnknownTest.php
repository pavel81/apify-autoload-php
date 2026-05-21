<?php
// tests/shortcodes/security/ShortcodeUnknownTest.php

declare(strict_types=1);
namespace Tests\Unit\Shortcodes\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeUnknownTest extends TestCase
{
    public function testUnknownShortcode(): void
    {
        $sc = new ShortcodeManager();

        $output = $sc->render('unknown');

        $this->assertEmpty($output);
    }
}
