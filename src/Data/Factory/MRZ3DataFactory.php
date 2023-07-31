<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data\Factory;

use PrinsFrank\MRTD\Data\MRZ3Data;
use PrinsFrank\MRTD\DataElement\DataElementType;
use PrinsFrank\MRTD\Definition\MRZ3Definition;
use PrinsFrank\MRTD\Support\StringParser;

/**
 * @implements MRZDataFactory<MRZ3Data>
 */
class MRZ3DataFactory implements MRZDataFactory
{
    public static function fromString(string $string): MRZ3Data
    {
        $itemData = [];
        foreach (MRZ3Definition::getDataElements() as $dataElement) {
            $itemData[$dataElement->dataElementType->name] = StringParser::getChars($string, $dataElement->lineNumber, MRZ3Definition::nrOfCharactersPerLine(), $dataElement->charPosStart, $dataElement->charPosEnd);
        }

        return new MRZ3Data(
            $itemData[DataElementType::DOCUMENT_CODE->name],
            $itemData[DataElementType::ISSUING_STATE_OR_ORGANIZATION->name],
            $itemData[DataElementType::NAME->name],
            $itemData[DataElementType::PASSPORT_NUMBER->name],
            $itemData[DataElementType::NATIONALITY->name],
            $itemData[DataElementType::DATE_OF_BIRTH->name],
            $itemData[DataElementType::SEX->name],
            $itemData[DataElementType::DATE_OF_EXPIRY->name],
            $itemData[DataElementType::PERSONAL_NUMBER_OR_OTHER_OPTIONAL_DATA_ELEMENTS->name]
        );
    }
}
