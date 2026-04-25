<?php

declare(strict_types=1);

namespace Plugin\Infrastructure\Client;

use Plugin\Infrastructure\Auth\UserContext;
use Plugin\Infrastructure\Auth\MembershipResolver;

final class ClientContext
{
    /**
     * @return array{
     *   user_id:int,
     *   plan:string
     * }
     */
    public static function resolve(): array
    {
        $userId = UserContext::getUserId();

        return [
            'user_id' => $userId,
            'plan' => MembershipResolver::resolve($userId),
        ];
    }
}