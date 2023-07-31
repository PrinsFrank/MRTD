<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Definition;

use PrinsFrank\MRTD\CheckDigit\CheckDigitCharacterRange;
use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\DataElement\DataElementType;
use PrinsFrank\MRTD\DataElement\DataElement;

class MRZ3Definition implements MRZDefinition
{
    /** @return int<1, max> */
    public static function nrOfLines(): int
    {
        return 2;
    }

    /** @return int<1, max> */
    public static function nrOfCharactersPerLine(): int
    {
        return 44;
    }

    /** @return array<DataElement> */
    public static function getDataElements(): array
    {
        return [
            new DataElement(DataElementType::DOCUMENT_CODE, 1, 1, 2),
            new DataElement(DataElementType::ISSUING_STATE_OR_ORGANIZATION, 1, 3, 5),
            new DataElement(DataElementType::NAME, 1, 6, 44),
            new DataElement(DataElementType::PASSPORT_NUMBER, 2, 1, 9),
            new DataElement(DataElementType::NATIONALITY, 2, 11, 13),
            new DataElement(DataElementType::DATE_OF_BIRTH, 2, 14, 19),
            new DataElement(DataElementType::SEX, 2, 21, 21),
            new DataElement(DataElementType::DATE_OF_EXPIRY, 2, 22, 27),
            new DataElement(DataElementType::PERSONAL_NUMBER_OR_OTHER_OPTIONAL_DATA_ELEMENTS, 2, 29, 42),
        ];
    }

    /** @return array<CheckDigit> */
    public static function getCheckDigits(): array
    {
        return [
            new CheckDigit(2, 10, new CheckDigitCharacterRange(2, 1, 9)),
            new CheckDigit(2, 20, new CheckDigitCharacterRange(2, 14, 19)),
            new CheckDigit(2, 28, new CheckDigitCharacterRange(2, 22, 27)),
            new CheckDigit(2, 43, new CheckDigitCharacterRange(2, 29, 42)),
            new CheckDigit(2, 44, new CheckDigitCharacterRange(2, 1, 10), new CheckDigitCharacterRange(2, 14, 20), new CheckDigitCharacterRange(2, 22, 43)),
        ];
    }
}
