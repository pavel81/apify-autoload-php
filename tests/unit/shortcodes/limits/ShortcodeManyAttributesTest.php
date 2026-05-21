<?php
// tests/shortcodes/limits/ShortcodeManyAttributesTest.php

declare(strict_types=1);
namespace Tests\Unit\Shortcodes\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeManyAttributesTest extends TestCase
{
    public function testManyAttributes(): void
    {
        $sc = new ShortcodeManager();

        $attrs = [];
        for ($i = 0; $i < 200; $i++) {
            $attrs["k$i"] = "v$i";
        }

        $output = $sc->render('test', $attrs);

        $this->assertIsString($output);
    }
}
