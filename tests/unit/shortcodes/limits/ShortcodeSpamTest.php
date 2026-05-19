<?php
// tests/shortcodes/limits/ShortcodeSpamTest.php

declare(strict_types=1);
namespace Panda\Apify\Tests\Unit\Shortcodes\Limits;
use PHPUnit\Framework\TestCase;
use Panda\Apify\Shortcodes\ShortcodeManager;

final class ShortcodeSpamTest extends TestCase
{
    public function testManyShortcodes(): void
    {
        $sc = new ShortcodeManager();

        $input = str_repeat('[test]', 500);

        $output = $sc->parse($input);

        $this->assertIsString($output);
    }
}
