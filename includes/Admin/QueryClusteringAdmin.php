<?php
declare(strict_types=1);

namespace Panda\Apify\Admin;

use Panda\Apify\Admin\Settings\SettingsService;

final class QueryClusteringAdmin
{
    private const OPTION_KEY = 'panda_query_clusters';

    public static function init(): void
    {
        add_action('admin_menu', [self::class, 'menu']);
        add_action('admin_post_panda_cluster_save', [self::class, 'handleSave']);
        add_action('admin_post_panda_cluster_delete', [self::class, 'handleDelete']);
        add_action('admin_post_panda_cluster_bulk_save', [self::class, 'handleBulkSave']);
    }

    public static function menu(): void
    {
        add_submenu_page(
            'panda-apify',
            'Query Clustering',
            'Clustering',
            'manage_options',
            'panda-apify-clustering',
            [self::class, 'render']
        );
    }

    public static function handleSave(): void
    {
        if (!current_user_can('manage_options')) {
            wp_die('Forbidden');
        }

        check_admin_referer('panda_cluster_save');

        $query = isset($_POST['query']) ? sanitize_text_field(wp_unslash($_POST['query'])) : '';
        $canonical = isset($_POST['canonical']) ? sanitize_text_field(wp_unslash($_POST['canonical'])) : '';

        if ($query === '' || $canonical === '') {
            wp_redirect(admin_url('admin.php?page=panda-apify-clustering&error=1'));
            exit;
        }

        $map = get_option(self::OPTION_KEY, []);
        if (!is_array($map)) {
            $map = [];
        }

        $map[mb_strtolower($query)] = mb_strtolower($canonical);

        update_option(self::OPTION_KEY, $map, false);
        SettingsService::clearCache();

        wp_redirect(admin_url('admin.php?page=panda-apify-clustering&saved=1'));
        exit;
    }

    public static function handleDelete(): void
    {
        if (!current_user_can('manage_options')) {
            wp_die('Forbidden');
        }

        check_admin_referer('panda_cluster_delete');

        $query = isset($_POST['query']) ? sanitize_text_field(wp_unslash($_POST['query'])) : '';

        $map = get_option(self::OPTION_KEY, []);
        if (is_array($map) && isset($map[$query])) {
            unset($map[$query]);
            update_option(self::OPTION_KEY, $map, false);
        }

        SettingsService::clearCache();

        wp_redirect(admin_url('admin.php?page=panda-apify-clustering&deleted=1'));
        exit;
    }

    public static function handleBulkSave(): void
    {
        if (!current_user_can('manage_options')) {
            wp_die('Forbidden');
        }

        check_admin_referer('panda_cluster_bulk');

        $raw = isset($_POST['bulk']) ? (string) wp_unslash($_POST['bulk']) : '';
        $lines = preg_split('/\r\n|\r|\n/', $raw) ?: [];

        $map = [];

        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || strpos($line, '|') === false) {
                continue;
            }

            [$q, $c] = array_map('trim', explode('|', $line, 2));

            if ($q === '' || $c === '') {
                continue;
            }

            $map[mb_strtolower($q)] = mb_strtolower($c);
        }

        update_option(self::OPTION_KEY, $map, false);
        SettingsService::clearCache();

        wp_redirect(admin_url('admin.php?page=panda-apify-clustering&bulk=1'));
        exit;
    }

    public static function render(): void
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        $map = get_option(self::OPTION_KEY, []);
        if (!is_array($map)) {
            $map = [];
        }

        $export = '';
        foreach ($map as $q => $c) {
            $export .= $q . '|' . $c . "\n";
        }
        ?>
        <div class="wrap">
            <h1>Query Clustering</h1>

            <h2>Přidat / upravit</h2>
            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <?php wp_nonce_field('panda_cluster_save'); ?>
                <input type="hidden" name="action" value="panda_cluster_save">

                <p>Query:<br><input type="text" name="query" required></p>
                <p>Canonical:<br><input type="text" name="canonical" required></p>

                <?php submit_button('Uložit'); ?>
            </form>

            <hr>

            <h2>Bulk editor</h2>
            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <?php wp_nonce_field('panda_cluster_bulk'); ?>
                <input type="hidden" name="action" value="panda_cluster_bulk_save">

                <textarea name="bulk" rows="10" style="width:100%;"><?php echo esc_textarea($export); ?></textarea>

                <?php submit_button('Uložit bulk'); ?>
            </form>

            <hr>

            <h2>Seznam</h2>
            <table class="widefat striped">
                <thead>
                    <tr>
                        <th>Query</th>
                        <th>Canonical</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($map as $q => $c): ?>
                        <tr>
                            <td><?php echo esc_html((string)$q); ?></td>
                            <td><?php echo esc_html((string)$c); ?></td>
                            <td>
                                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                                    <?php wp_nonce_field('panda_cluster_delete'); ?>
                                    <input type="hidden" name="action" value="panda_cluster_delete">
                                    <input type="hidden" name="query" value="<?php echo esc_attr((string)$q); ?>">
                                    <button class="button">Smazat</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php
    }
}