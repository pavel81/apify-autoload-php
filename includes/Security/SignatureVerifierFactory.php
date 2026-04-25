<?php

declare(strict_types=1);

namespace Panda\Apify\Security;

final class SignatureVerifierFactory
{
    /**
     * @param array<string, mixed> $params
     */
    public static function create(string $algorithm, array $params): object
    {
        return match ($algorithm) {
            'ed25519' => new Ed25519Verifier(
                (string) $params['public_key']
            ),

            'hmac' => new RequestVerifier(
                /** @var array<string> $params['secrets'] */
                $params['secrets'],
                (int) ($params['ttl'] ?? 300)
            ),

            default => throw new \InvalidArgumentException("Unknown algorithm: {$algorithm}"),
        };
    }
}
