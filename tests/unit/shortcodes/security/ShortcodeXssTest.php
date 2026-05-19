<?php
// tests/shortcodes/security/ShortcodeXssTest.php

declare(strict_types=1);
namespace Panda\Apify\Tests\Unit\Shortcodes\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeXssTest extends TestCase
{
    public function testEscapesOutput(): void
    {
        $sc = new ShortcodeManager();

        $input = '<script>alert(1)</script>';
        $output = $sc->render('test', ['content' => $input]);

        $this->assertStringNotContainsString('<script>', $output);
    }
}
