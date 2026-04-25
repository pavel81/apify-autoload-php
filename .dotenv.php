require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

error_log($_ENV['TEST_VAR'] ?? 'neni');