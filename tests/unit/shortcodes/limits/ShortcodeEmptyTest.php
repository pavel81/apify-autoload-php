<?php
// tests/shortcodes/limits/ShortcodeEmptyTest.php

declare(strict_types=1);
namespace Panda\Apify\Tests\Unit\Shortcodes\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeEmptyTest extends TestCase
{
    public function testEmptyInput(): void
    {
        $sc = new ShortcodeManager();

        $output = $sc->parse('');

        $this->assertSame('', $output);
    }
}
