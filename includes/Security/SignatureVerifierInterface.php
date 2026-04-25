<?php


declare(strict_types=1);

namespace Panda\Apify\Security;

use WP_Error;

interface SignatureVerifierInterface
{
    /**
     * @param array<string, mixed> $headers
     * @return true|WP_Error
     */
    public function verify(array $headers, string $body): bool|WP_Error;
}

