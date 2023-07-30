<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\CheckDigit;

class CheckDigit
{
    /** @var CheckDigitCharacterRange[] */
    private array $characterRanges;

    public function __construct(
        public readonly int      $charPos,
        CheckDigitCharacterRange $characterRange,
        CheckDigitCharacterRange... $characterRanges
    ) {
        $this->characterRanges = [$characterRange, ...$characterRanges];
    }
}
