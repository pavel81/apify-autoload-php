<?php
declare(strict_types=1);

namespace Panda\Apify\Admin\Settings;

final class SettingsDTO
{
    public bool $indexationEnabled;
    public bool $forceNoindex;
    public bool $noindexBelowThreshold;
    public string $robotsMeta;

    // 🔥 NEW
    public bool $urlLangEnabled;
    public string $urlDefaultLang;

    public bool $canonicalCluster;
    public bool $hreflangEnabled;

    public bool $slugTransliterate;
    public string $slugSeparator;
}