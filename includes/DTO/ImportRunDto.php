<?php

declare(strict_types=1);

namespace Panda\Apify\Dto;

final class ImportRunDto
{
    public function __construct(
        public readonly int $id,
        public readonly ?int $scopeId,
        public readonly string $status,
        public readonly int $batchSize,
    ) {
    }
}
