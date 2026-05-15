<?php
declare(strict_types=1);

namespace Panda\Apify\Controllers;

use WP_REST_Request;
use WP_REST_Response;
use Panda\Apify\Security\JsonCanonicalizer;

if (!defined('ABSPATH')) {
    exit;
}

final class DebugCanonicalController
{
    public static function test(WP_REST_Request $request): WP_REST_Response
    {
        $payloadA = '{"a":1,"b":2}';
        $payloadB = '{ "b":2, "a":1 }';

        $ca = JsonCanonicalizer::canonicalize($payloadA);
        $cb = JsonCanonicalizer::canonicalize($payloadB);

        return new WP_REST_Response([
            'canonical_a' => $ca,
            'canonical_b' => $cb,
            'hash_a'      => hash('sha256', $ca),
            'hash_b'      => hash('sha256', $cb),
            'match'       => $ca === $cb,
            'hash_match'  => hash('sha256', $ca) === hash('sha256', $cb),
        ]);
    }
}

