<?php
// tests/shortcodes/limits/ShortcodeLargeInputTest.php

declare(strict_types=1);
namespace Tests\Unit\Shortcodes\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeLargeInputTest extends TestCase
{
    public function testLargeContent(): void
    {
        $sc = new ShortcodeManager();

        $content = str_repeat('A', 100000);

        $output = $sc->render('test', ['content' => $content]);

        $this->assertIsString($output);
    }
}
