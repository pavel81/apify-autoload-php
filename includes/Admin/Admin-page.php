<?php
add_action('admin_init', function () {
    register_setting('wp_apify_settings', 'wp_apify_token');
    register_setting('wp_apify_settings', 'wp_apify_routes');
    register_setting('wp_apify_settings', 'wp_apify_rate_limit');
    register_setting('wp_apify_settings', 'wp_apify_log_blocked_ips');
});

add_action('admin_menu', function () {
    add_options_page('WP Apify', 'WP Apify', 'manage_options', 'wp-apify', 'wp_apify_settings_page');
});

function wp_apify_settings_page() {
    global $wpdb;
    $routes = get_option('wp_apify_routes', array());
    $logs = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}apify_log ORDER BY timestamp DESC LIMIT 10");
    $rate_limit = get_option('wp_apify_rate_limit', 60);
    ?>
    <div class="wrap">
        <h1>WP Apify – Nastavení</h1>
        <form method="post" action="options.php">
            <?php settings_fields('wp_apify_settings'); do_settings_sections('wp_apify_settings'); ?>
            <table class="form-table">
                <tr>
                    <th scope="row">Apify API Token</th>
                    <td><input type="text" name="wp_apify_token" value="<?php echo esc_attr(get_option('wp_apify_token')); ?>" class="regular-text"></td>
                </tr>
                <tr>
                    <th scope="row">Limit API dotazů za hodinu</th>
                    <td><input type="number" name="wp_apify_rate_limit" value="<?php echo esc_attr($rate_limit); ?>" min="1"> požadavků</td>
                </tr>
                <tr>
                    <th scope="row">Aktory pro vyhledávání</th>
                    <td>
                        <table id="apify-endpoints-table" class="widefat">
                            <thead><tr><th>Klíč</th><th>Actor ID</th></tr></thead>
                            <tbody>
                                <?php if (!empty($routes)): foreach ($routes as $idx => $info): ?>
                                <tr>
                                    <td><input type="text" name="wp_apify_routes[<?php echo $idx; ?>][key]" value="<?php echo esc_attr($info['key']); ?>" /></td>
                                    <td><input type="text" name="wp_apify_routes[<?php echo $idx; ?>][actor]" value="<?php echo esc_attr($info['actor']); ?>" /></td>
                                </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <button type="button" class="button" onclick="addApifyEndpointRow()">Přidat endpoint</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Zaznamenávat blokované IP do logu</th>
                    <td><label><input type="checkbox" name="wp_apify_log_blocked_ips" value="1" <?php checked(get_option('wp_apify_log_blocked_ips'), '1'); ?>> Ano, zapisovat do logu</label></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>

        <h2>📋 Log posledních blokací</h2>
        <table class="widefat">
            <thead>
                <tr><th>Čas</th><th>Zdroj</th><th>Akce</th><th>Status</th><th>Zpráva</th></tr>
            </thead>
            <tbody>
                <?php if ($logs): foreach ($logs as $log): ?>
                <tr>
                    <td><?php echo $log->timestamp; ?></td>
                    <td><?php echo esc_html($log->source); ?></td>
                    <td><?php echo esc_html($log->actor_id); ?></td>
                    <td><?php echo esc_html($log->status); ?></td>
                    <td><?php echo esc_html($log->message); ?></td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="5">Žádné záznamy</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
    function addApifyEndpointRow() {
        const table = document.getElementById('apify-endpoints-table').getElementsByTagName('tbody')[0];
        const rowCount = table.rows.length;
        const row = table.insertRow(-1);
        const cell1 = row.insertCell(0);
        const cell2 = row.insertCell(1);
        cell1.innerHTML = '<input type="text" name="wp_apify_routes[new_' + rowCount + '][key]" placeholder="např. albert">';
        cell2.innerHTML = '<input type="text" name="wp_apify_routes[new_' + rowCount + '][actor]" placeholder="např. actor-albert">';
  
    </script>
<?php }