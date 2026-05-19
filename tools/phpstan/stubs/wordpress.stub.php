<?php

declare(strict_types=1);

/**
 * @return mixed
 */
function get_transient(string $key)
{
}

/**
 * @param mixed $value
 */
function set_transient(string $key, $value, int $expiration): bool
{
}

/**
 * @param array<string, mixed> $args
 * @return array<string, mixed>|\WP_Error|false
 */
function wp_remote_get(string $url, array $args = [])
{
}
/**
 * @param array<string, mixed>|object $response
 */
function wp_remote_retrieve_response_code($response): int
{
}

/**
 * @param array<string, mixed>|\WP_Error|false $response
 */
function wp_remote_retrieve_body($response): string
{
}

/**
 * @param mixed $thing
 */
function is_wp_error($thing): bool
{
}

function current_time(string $type): string
{
}

function get_current_user_id(): int
{
}

/**
 * @return int|\WP_User|null
 */
function wp_set_current_user(int $user_id)
{
}

/**
 * @param array<string, mixed> $args
 * @return bool
 */
function register_rest_route(string $namespace, string $route, array $args = [])
{
}

/**
 * @return mixed
 */
function get_user_meta(int $user_id, string $key, bool $single = false)
{
}

/**
 * @param mixed $value
 */
function update_user_meta(int $user_id, string $key, $value): bool
{
}
class WP_Error
{
    public function get_error_message(): string {}
}

class WP_User
{
    public int $ID;
}