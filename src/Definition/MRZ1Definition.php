<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Definition;

use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\CheckDigit\CheckDigitCharacterRange;
use PrinsFrank\MRTD\DataElement\DataElement;
use PrinsFrank\MRTD\DataElement\DataElementType;

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
        return [
            new DataElement(DataElementType::DOCUMENT_CODE, 1, 1, 2),
            new DataElement(DataElementType::ISSUING_STATE_OR_ORGANIZATION, 1, 3, 5),
            new DataElement(DataElementType::DOCUMENT_NUMBER, 1, 6, 14),
            new DataElement(DataElementType::OPTIONAL_DATA_ELEMENTS, 1, 16, 30),
            new DataElement(DataElementType::DATE_OF_BIRTH, 2, 1,6),
            new DataElement(DataElementType::SEX, 2, 8, 8),
            new DataElement(DataElementType::DATE_OF_EXPIRY, 2, 9, 14),
            new DataElement(DataElementType::NATIONALITY, 2, 16, 18),
            new DataElement(DataElementType::OPTIONAL_DATA_ELEMENTS, 2, 19, 29),
            new DataElement(DataElementType::NAME, 3, 1, 30),
        ];
    }

    /** @return array<CheckDigit> */
    public static function getCheckDigits(): array
    {
        return [
//            new CheckDigit(1, 15, new CheckDigitCharacterRange(1, 6, 14)),
            new CheckDigit(2, 7, new CheckDigitCharacterRange(2, 1, 6)),
            new CheckDigit(2, 15, new CheckDigitCharacterRange(2, 9, 14)),
            new CheckDigit(2, 30, new CheckDigitCharacterRange(1, 6, 30), new CheckDigitCharacterRange(2, 1, 7), new CheckDigitCharacterRange(2, 9, 15), new CheckDigitCharacterRange(2, 19, 29)),
        ];
    }
}
