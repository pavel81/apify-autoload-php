<?php
declare(strict_types=1);

namespace Panda\Apify\Admin;

final class ContentAdmin
{
    private const OPTION_KEY = 'panda_lp_content';

    public static function init(): void
    {
        add_submenu_page(
            'panda-apify',
            'Landing Content',
            'Content',
            'manage_options',
            'panda-apify-content',
            [self::class, 'render']
        );

        add_action('admin_post_panda_content_save', [self::class, 'save']);
    }

    public static function save(): void
    {
        if (!current_user_can('manage_options')) {
            wp_die('Forbidden');
        }

        check_admin_referer('panda_content');

        $slug = isset($_POST['slug']) ? sanitize_text_field(wp_unslash($_POST['slug'])) : '';
        $title = isset($_POST['title']) ? sanitize_text_field(wp_unslash($_POST['title'])) : '';
        $content = isset($_POST['content']) ? wp_kses_post(wp_unslash($_POST['content'])) : '';

        if ($slug === '') {
            wp_redirect(admin_url('admin.php?page=panda-apify-content'));
            exit;
        }

        $data = get_option(self::OPTION_KEY, []);
        if (!is_array($data)) {
            $data = [];
        }

        $data[$slug] = [
            'title' => $title,
            'content' => $content,
        ];

        update_option(self::OPTION_KEY, $data, false);

        wp_redirect(admin_url('admin.php?page=panda-apify-content&saved=1'));
        exit;
    }

    public static function render(): void
    {
        ?>
        <div class="wrap">
            <h1>Landing Content</h1>

            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <?php wp_nonce_field('panda_content'); ?>
                <input type="hidden" name="action" value="panda_content_save">

                <p>Slug:<br><input type="text" name="slug" required></p>
                <p>Title:<br><input type="text" name="title"></p>
                <p>Content:<br><textarea name="content" rows="6" style="width:100%;"></textarea></p>

                <?php submit_button('Uložit'); ?>
            </form>
        </div>
        <?php
    }
}