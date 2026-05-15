<?php
declare(strict_types=1);

namespace Panda\Apify\Admin;

final class ArticleAdmin
{
    private const OPTION_KEY = 'panda_articles';

    public static function init(): void
    {
        add_submenu_page(
            'panda-apify',
            'Articles',
            'Articles',
            'manage_options',
            'panda-apify-articles',
            [self::class, 'render']
        );

        add_action('admin_post_panda_article_save', [self::class, 'save']);
    }

    public static function save(): void
    {
        if (!current_user_can('manage_options')) {
            wp_die('Forbidden');
        }

        check_admin_referer('panda_article');

        $slug = isset($_POST['slug']) ? sanitize_text_field(wp_unslash($_POST['slug'])) : '';
        $title = isset($_POST['title']) ? sanitize_text_field(wp_unslash($_POST['title'])) : '';
        $content = isset($_POST['content']) ? wp_kses_post(wp_unslash($_POST['content'])) : '';

        $landing = isset($_POST['landing']) ? 1 : 0;
        $status = isset($_POST['status']) ? sanitize_text_field(wp_unslash($_POST['status'])) : 'draft';
        $priority = isset($_POST['priority']) && is_numeric($_POST['priority']) ? (int)$_POST['priority'] : 0;
        $noindex = isset($_POST['noindex']) ? 1 : 0;

        if ($slug === '') {
            wp_redirect(admin_url('admin.php?page=panda-apify-articles'));
            exit;
        }

        $data = get_option(self::OPTION_KEY, []);
        if (!is_array($data)) {
            $data = [];
        }

        $data[$slug] = [
            'title' => $title,
            'content' => $content,
            'landing' => $landing,
            'status' => $status === 'published' ? 'published' : 'draft',
            'priority' => $priority,
            'noindex' => $noindex,
            'updated_at' => time(),
        ];

        update_option(self::OPTION_KEY, $data, false);

        wp_redirect(admin_url('admin.php?page=panda-apify-articles&saved=1'));
        exit;
    }

    public static function render(): void
    {
        ?>
        <div class="wrap">
            <h1>Articles</h1>

            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <?php wp_nonce_field('panda_article'); ?>
                <input type="hidden" name="action" value="panda_article_save">

                <p>Slug:<br><input type="text" name="slug" required></p>

                <p>Title:<br><input type="text" name="title"></p>

                <p>Content:<br>
                    <textarea name="content" rows="8" style="width:100%;"></textarea>
                </p>

                <p>
                    <label>
                        <input type="checkbox" name="landing" value="1">
                        Použít jako landing
                    </label>
                </p>

                <p>
                    Status:<br>
                    <select name="status">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </p>

                <p>
                    Priority (0–100):<br>
                    <input type="number" name="priority" value="0">
                </p>

                <p>
                    <label>
                        <input type="checkbox" name="noindex" value="1">
                        Noindex (SEO override)
                    </label>
                </p>

                <?php submit_button('Uložit článek'); ?>
            </form>
        </div>
        <?php
    }
}