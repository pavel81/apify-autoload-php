<?php
declare(strict_types=1);

namespace Panda\Apify\Admin;

use RuntimeException;
use SodiumException;

if (!defined('ABSPATH')) {
    exit;
}

final class ApifySecurityPage
{
    public static function register(): void
    {
        add_action('admin_menu', [self::class, 'addMenu']);
    }

    public static function addMenu(): void
    {
        add_menu_page(
            'Apify Security',
            'Apify Security',
            'manage_options',
            'apify-security',
            [self::class, 'render'],
            'dashicons-shield-alt',
            80
        );
    }

    /**
     * @return array{public: string, private: string}
     * @throws SodiumException
     */
    private static function generateEd25519Keypair(): array
    {
        if (!function_exists('sodium_crypto_sign_keypair')) {
            throw new RuntimeException('Sodium extension is not available');
        }

        $keypair = sodium_crypto_sign_keypair();

        $public  = sodium_crypto_sign_publickey($keypair);
        $private = sodium_crypto_sign_secretkey($keypair);

        return [
            'public'  => bin2hex($public),
            'private' => bin2hex($private),
        ];
    }

    private static function handleKeyGeneration(): ?string
    {
        if (!isset($_POST['apify_generate_keys'])) {
            return null;
        }

        check_admin_referer('apify_generate_keys_action');

        try {
            $keys = self::generateEd25519Keypair();
        } catch (\Throwable $e) {
            add_settings_error(
                'apify-security',
                'apify_generate_error',
                'Key generation failed: ' . $e->getMessage(),
                'error'
            );

            return null;
        }

        update_option('apify_public_key', $keys['public']);

        return $keys['private'];
    }

    public static function render(): void
    {
        if (!current_user_can('manage_options')) {
            return;
        }

        $privateKey = self::handleKeyGeneration();
        $publicKey  = (string) get_option('apify_public_key', '');

        settings_errors('apify-security');
        ?>
        <div class="wrap">
            <h1>Apify Security</h1>

            <h2>Ed25519 Keys</h2>

            <p><strong>Public key:</strong></p>
            <textarea readonly style="width: 100%; height: 60px;"><?php echo esc_html($publicKey); ?></textarea>

            <?php if ($privateKey !== null): ?>
                <h3 style="color: #d63638;">Private key (copy now, will not be shown again):</h3>
                <textarea readonly style="width: 100%; height: 80px; background: #fff3cd;"><?php echo esc_html($privateKey); ?></textarea>
                <p><strong>Upozornění:</strong> Private key se neukládá do databáze. Ulož si ho bezpečně.</p>
            <?php endif; ?>

            <form method="post">
                <?php wp_nonce_field('apify_generate_keys_action'); ?>
                <p>
                    <input type="submit"
                           name="apify_generate_keys"
                           class="button button-primary"
                           value="Generate new Ed25519 keypair"
                           onclick="return confirm('Opravdu vygenerovat nové klíče? Staré přestanou fungovat.');">
                </p>
            </form>
        </div>
        <?php
    }
}

