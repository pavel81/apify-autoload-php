<?php
if (!defined('ABSPATH')) exit;

add_action('admin_menu', function(){
    add_menu_page('Apify', 'Apify', 'manage_options', 'apify', 'apify_admin_dashboard', 'dashicons-database-view', 56);
    add_submenu_page('apify', 'Nastavení', 'Nastavení', 'manage_options', 'apify-settings', 'apify_admin_settings');
});

function apify_admin_dashboard(){
    echo '<div class="wrap"><h1>Apify – Přehled</h1>';
    echo '<p>Poslední cron: <code>'.esc_html(get_option('apify_last_cron','—')).'</code></p>';
    echo '</div>';
}

function apify_admin_settings(){
    if (!current_user_can('manage_options')) return;

    if (isset($_POST['apify_save']) && check_admin_referer('apify_settings')){
        update_option('apify_data_cost_per_mb', sanitize_text_field($_POST['data_cost'] ?? '0.05'));
        update_option('apify_action_badge_mode', in_array($_POST['badge_mode'] ?? 'text', ['text','image'], true) ? $_POST['badge_mode'] : 'text');
        update_option('apify_action_badge_image_id', intval($_POST['badge_image_id'] ?? 0));
        update_option('apify_cron_mode', in_array($_POST['cron_mode'] ?? 'wp', ['wp','system'], true) ? $_POST['cron_mode'] : 'wp');
        echo '<div class="updated"><p>Uloženo.</p></div>';
    }

    $dc = esc_attr(get_option('apify_data_cost_per_mb','0.05'));
    $bm = esc_attr(get_option('apify_action_badge_mode','text'));
    $bi = intval(get_option('apify_action_badge_image_id',0));
    $cm = esc_attr(get_option('apify_cron_mode','wp'));

    echo '<div class="wrap"><h1>Nastavení Apify</h1><form method="post">';
    wp_nonce_field('apify_settings');
    echo '<table class="form-table"><tbody>';

    echo '<tr><th>Data cost per MB</th><td><input type="number" step="0.001" name="data_cost" value="'.$dc.'" /></td></tr>';
    echo '<tr><th>Akční štítek</th><td>';
    echo '<label><input type="radio" name="badge_mode" value="text" '.checked($bm,'text',false).'> Text "AKCE"</label><br>';
    echo '<label><input type="radio" name="badge_mode" value="image" '.checked($bm,'image',false).'> Obrázek</label>';
    echo '<p><input type="number" name="badge_image_id" value="'.$bi.'" placeholder="Attachment ID" /></p>';
    echo '</td></tr>';

    echo '<tr><th>Cron režim</th><td>';
    echo '<label><input type="radio" name="cron_mode" value="wp" '.checked($cm,'wp',false).'> WP-Cron</label><br>';
    echo '<label><input type="radio" name="cron_mode" value="system" '.checked($cm,'system',false).'> Systémový cron (externí)</label>';
    echo '</td></tr>';

    echo '</tbody></table>';
    echo '<p><button class="button button-primary" name="apify_save" value="1">Uložit</button></p>';
    echo '</form></div>';
}