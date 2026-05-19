<?php

declare(strict_types=1);

class WP_REST_Request
{
    /**
     * @return mixed
     */
    public function get_param(string $key)
    {
    }

    /**
     * @return mixed
     */
    public function get_header(string $key)
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function get_json_params(): array
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function get_body_params(): array
    {
    }

    /**
     * @return string
     */
    public function get_body(): string
    {
    }
}

class WP_REST_Response
{
    /**
     * @param mixed $data
     */
    public function __construct($data = null)
    {
    }
}