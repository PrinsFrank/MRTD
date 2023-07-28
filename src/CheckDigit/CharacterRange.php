<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\CheckDigit;

class CharacterRange
{
    public function __construct(
        public readonly int $line,
        public readonly int $startChar,
        public readonly int $endChar,
    ) {
    }
}
