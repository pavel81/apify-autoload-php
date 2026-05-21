<?php
// tests/shortcodes/security/ShortcodeAttributeInjectionTest.php

declare(strict_types=1);
namespace Tests\Unit\Shortcodes\Security;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeAttributeInjectionTest extends TestCase
{
    public function testAttributeSanitization(): void
    {
        $sc = new ShortcodeManager();

        $output = $sc->render('test', [
            'onclick' => 'alert(1)',
        ]);

        $this->assertStringNotContainsString('onclick', $output);
    }
}
