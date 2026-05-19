<?php
// tests/shortcodes/limits/ShortcodeNestedTest.php

declare(strict_types=1);
namespace Panda\Apify\Tests\Unit\Shortcodes\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeNestedTest extends TestCase
{
    public function testNestedShortcodes(): void
    {
        $sc = new ShortcodeManager();

        $input = '[test][test][test][/test][/test][/test]';

        $output = $sc->parse($input);

        $this->assertIsString($output);
    }
}
