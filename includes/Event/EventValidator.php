<?php
declare(strict_types=1);

namespace Panda\Apify\Event;

final class EventValidator
{
    public static function validate(array $data): ?EventDTO
    {
        if (empty($data['type']) || !is_string($data['type'])) {
            return null;
        }

        return new EventDTO(
            $data['type'],
            isset($data['query']) ? (string)$data['query'] : null,
            isset($data['from']) ? (string)$data['from'] : null,
            isset($data['to']) ? (string)$data['to'] : null,
            isset($data['category']) ? (string)$data['category'] : null,
            isset($data['vendor_id']) ? (string)$data['vendor_id'] : null
        );
    }
}