<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\CheckDigit\CharacterRange;
use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\CheckDigit\DataElementType;
use PrinsFrank\MRTD\DataElement\DataElement;

class MRZ2 implements MRZ
{
    public function nrOfLines(): int
    {
        return 2;
    }

    public function nrOfCharactersPerLine(): int
    {
        return 36;
    }

    /** @return array<DataElement> */
    public function getDataElements(): array
    {
        return [
            new DataElement(DataElementType::DOCUMENT_CODE, 1, 1, 2),
            new DataElement(DataElementType::ISSUING_STATE_OR_ORGANIZATION, 1, 3, 5),
            new DataElement(DataElementType::NAME, 1, 6, 36),
            new DataElement(DataElementType::DOCUMENT_NUMBER, 2, 1, 9),
            new DataElement(DataElementType::NATIONALITY, 2, 11, 13),
            new DataElement(DataElementType::DATE_OF_BIRTH, 2, 14, 19),
            new DataElement(DataElementType::SEX, 2, 21, 21),
            new DataElement(DataElementType::DATE_OF_EXPIRY, 2, 22, 27),
            new DataElement(DataElementType::OPTIONAL_DATA_ELEMENTS, 2, 29, 35),
        ];
    }

    /** @return array<CheckDigit> */
    public function getCheckDigits(): array
    {
        return [
            new CheckDigit(10, new CharacterRange(2, 1, 9)),
            new CheckDigit(20, new CharacterRange(2, 14, 19)),
            new CheckDigit(28, new CharacterRange(2, 22, 27)),
            new CheckDigit(36, new CharacterRange(2, 1, 10), new CharacterRange(2, 14, 20), new CharacterRange(2, 22, 35)),
        ];
    }
}
