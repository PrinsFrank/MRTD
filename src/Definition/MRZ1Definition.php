<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Definition;

use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\DataElement\DataElement;

class MRZ1Definition implements MRZDefinition
{
    public static function nrOfLines(): int
    {
        return 3;
    }

    public static function nrOfCharactersPerLine(): int
    {
        return 30;
    }

    /** @return array<DataElement> */
    public static function getDataElements(): array
    {
        return [];
    }

    /** @return array<CheckDigit> */
    public static function getCheckDigits(): array
    {
        return [];
    }
}
