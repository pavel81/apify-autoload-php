<?php

declare(strict_types=1);

namespace Panda\Apify\Shortcodes;

final class ShortcodeManager
{
    private const WHITELIST = [
        'apify',
        'product',
        'price-intl',
        'price_intl',
    ];

    private const ALIASES = [
        'prd' => 'product',
        'priceintl' => 'price-intl',
        'price_intl' => 'price-intl',
    ];

    public function render(string $content = ''): string
    {
        $content = trim($content);

        if ($content === '') {
            return '';
        }

        if ($this->isUnsupportedShortcodeInput($content)) {
            return '';
        }

        return htmlspecialchars(
            $content,
            ENT_QUOTES | ENT_SUBSTITUTE,
            'UTF-8'
        );
    }

    public function parse(string $content = ''): string
    {
        return $this->render($content);
    }

    public function handle(string $content = ''): string
    {
        return $this->render($content);
    }

    public function shortcode(string $content = ''): string
    {
        return $this->render($content);
    }

    public function __invoke(string $content = ''): string
    {
        return $this->render($content);
    }

    public function suggest(string $content): ?string
    {
        $tag = $this->extractTag($content);

        if ($tag === null) {
            return null;
        }

        $normalized = $this->normalizeTag($tag);

        if (in_array($normalized, self::WHITELIST, true)) {
            return $normalized;
        }

        return self::ALIASES[$normalized] ?? null;
    }

    private function isUnsupportedShortcodeInput(string $content): bool
    {
        $tag = $this->extractTag($content);

        if ($tag === null) {
            return false;
        }

        $normalized = $this->normalizeTag($tag);

        return !in_array($normalized, self::WHITELIST, true)
            && !array_key_exists($normalized, self::ALIASES);
    }

    private function extractTag(string $content): ?string
    {
        $content = trim($content);

        if (preg_match('/^\[\/?([a-zA-Z0-9_-]+)\b/', $content, $matches) === 1) {
            return $matches[1];
        }

        if (preg_match('/^[a-zA-Z0-9_-]+$/', $content) === 1) {
            return $content;
        }

        return null;
    }

    private function normalizeTag(string $tag): string
    {
        return strtolower(trim($tag));
    }
}
