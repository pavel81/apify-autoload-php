<?php
if (!defined('ABSPATH')) exit;

class Panda_Apify_Settings {
    public static function init() {
        add_action('admin_init', [__CLASS__, 'register']);
    }

    public static function register() {
        register_setting('reading', Panda_Apify_Importer::OPTION_SOURCE_URL, [
            'type' => 'string',
            'sanitize_callback' => 'esc_url_raw',
            'default' => '',
        ]);

        add_settings_section(
            'panda_apify_section',
            'Panda Apify – Zdroj dat',
            function() { echo '<p>Nastav URL JSON/Datasetu (Apify, GH Pages, Cloudflare Worker...).</p>'; },
            'reading'
        );

        add_settings_field(
            'panda_apify_source_url',
            'URL zdroje (JSON)',
            function() {
                $val = esc_attr(Panda_Apify_Importer::get_source_url());
                echo '<input type="url" class="regular-text code" name="'.esc_attr(Panda_Apify_Importer::OPTION_SOURCE_URL).'" value="'.$val.'" placeholder="https://api.apify.com/v2/datasets/xxx/items?clean=true" />';
                echo '<p class="description">Bude stahováno CRONem (1×/hod) nebo přes webhook <code>/wp-json/panda-apify/v1/webhook</code>.</p>';
            },
            'reading',
            'panda_apify_section'
        );
    }
}