<?php
declare(strict_types=1);

namespace Panda\Apify\Event;

final class EventDTO
{
    public function __construct(
        public readonly string $type,
        public readonly ?string $query,
        public readonly ?string $from,
        public readonly ?string $to,
        public readonly ?string $category,
        public readonly ?string $vendorId
    ) {}
}