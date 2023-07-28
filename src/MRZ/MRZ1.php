<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\CheckDigit\CharacterRange;
use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\CheckDigit\DataElementType;
use PrinsFrank\MRTD\DataElement\DataElement;

class MRZ1 implements MRZ
{
    public function nrOfLines(): int
    {
        return 3;
    }

    public function nrOfCharactersPerLine(): int
    {
        return 30;
    }

    /** @return array<DataElement> */
    public function getDataElements(): array
    {
        return [];
    }

    /** @return array<CheckDigit> */
    public function getCheckDigits(): array
    {
        return [];
    }
}
