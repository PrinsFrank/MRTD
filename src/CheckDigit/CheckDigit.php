<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\CheckDigit;

class CheckDigit
{
    /** @var CharacterRange[] */
    private array $characterRanges;

    public function __construct(
        public readonly int $charPos,
        CharacterRange $characterRange,
        CharacterRange... $characterRanges
    ) {
        $this->characterRanges = [$characterRange, ...$characterRanges];
    }
}
