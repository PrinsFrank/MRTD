<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Validation;

class ValidationCollection
{
    /** @param array<Validation> $validationItems */
    public function __construct(
        public readonly array $validationItems,
    ) {
    }
}
