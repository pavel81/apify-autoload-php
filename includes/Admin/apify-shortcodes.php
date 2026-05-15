<?php
if (!defined('ABSPATH')) exit;

add_action('admin_menu', function(){
    add_submenu_page(
        'apify',
        'Shortcodes',
        'Shortcodes',
        'manage_options',
        'apify-shortcodes',
        'apify_render_shortcodes_admin'
    );
});

function apify_render_shortcodes_admin(){
    if (!current_user_can('manage_options')) return;
    if (!function_exists('apify_collect_shortcodes')) {
        require_once plugin_dir_path(__FILE__) . '../includes/apify-shortcodes.php';
    }
    $items = apify_collect_shortcodes();
    ?>
    <div class="wrap">
      <h1>Apify – Shortcodes</h1>
      <p>Automaticky detekované shortcody z pluginu Apify (tagy začínající na <code>apify</code>, nebo jejich callback leží ve složce pluginu).</p>
      <p>JSON: <code>/wp-json/apify/v1/shortcodes</code> (jen pro administrátory)</p>

      <table class="widefat striped">
        <thead><tr>
          <th>Shortcode</th>
          <th>Popis</th>
          <th>Atributy</th>
          <th>Příklady</th>
          <th>Callback</th>
          <th>Soubor</th>
        </tr></thead>
        <tbody>
        <?php foreach($items as $it): ?>
          <tr>
            <td><code>[<?php echo esc_html($it['tag']); ?>]</code></td>
            <td><?php echo esc_html($it['meta']['description'] ?? ''); ?></td>
            <td>
                <?php
                if (!empty($it['meta']['attributes'])) {
                    echo '<ul style="margin:0;padding-left:1em;">';
                    foreach ($it['meta']['attributes'] as $k=>$v) {
                        echo '<li><code>'.esc_html($k).'</code>: '.esc_html($v).'</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<em>—</em>';
                }
                ?>
            </td>
            <td>
                <?php
                if (!empty($it['meta']['examples'])) {
                    echo '<ul style="margin:0;padding-left:1em;">';
                    foreach ($it['meta']['examples'] as $ex) {
                        echo '<li><code>'.esc_html($ex).'</code></li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<em>—</em>';
                }
                ?>
            </td>
            <td><code><?php echo esc_html($it['callback']); ?></code></td>
            <td style="word-break:break-all;"><?php echo esc_html($it['file'] ?: '—'); ?></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php
}