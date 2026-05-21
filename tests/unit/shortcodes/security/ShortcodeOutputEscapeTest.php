<?php
// tests/shortcodes/security/ShortcodeOutputEscapeTest.php

declare(strict_types=1);
namespace Tests\Unit\Shortcodes\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeOutputEscapeTest extends TestCase
{
    public function testHtmlEscape(): void
    {
        $sc = new ShortcodeManager();

        $output = $sc->render('test', [
            'content' => '<b>bold</b>',
        ]);

        $this->assertStringNotContainsString('<b>', $output);
    }
}
