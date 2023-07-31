<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Validation;

use PrinsFrank\MRTD\CheckDigit\CheckDigit;

class Validation
{
    public function __construct(
        public readonly CheckDigit $checkDigit,
        public readonly bool       $valid,
    ) {
    }
}
