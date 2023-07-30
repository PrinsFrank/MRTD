<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\CheckDigit;

class CheckDigitCharacterRange
{
    public function __construct(
        public readonly int $line,
        public readonly int $startChar,
        public readonly int $endChar,
    ) {
    }
}
