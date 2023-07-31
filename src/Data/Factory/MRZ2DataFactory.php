<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data\Factory;

use PrinsFrank\MRTD\Data\MRZ2Data;
use PrinsFrank\MRTD\DataElement\DataElementType;
use PrinsFrank\MRTD\Definition\MRZ2Definition;
use PrinsFrank\MRTD\Support\StringParser;

class MRZ2DataFactory implements MRZDataFactory
{
    public static function fromString(string $string): MRZ2Data
    {
        $itemData = [];
        foreach (MRZ2Definition::getDataElements() as $dataElement) {
            $itemData[$dataElement->dataElementType->name] = StringParser::getChars($string, $dataElement->lineNumber, MRZ2Definition::nrOfCharactersPerLine(), $dataElement->charPosStart, $dataElement->charPosEnd);
        }

        return new MRZ2Data(
            $itemData[DataElementType::DOCUMENT_CODE->name],
            $itemData[DataElementType::ISSUING_STATE_OR_ORGANIZATION->name],
            $itemData[DataElementType::NAME->name],
            $itemData[DataElementType::DOCUMENT_NUMBER->name],
            $itemData[DataElementType::NATIONALITY->name],
            $itemData[DataElementType::DATE_OF_BIRTH->name],
            $itemData[DataElementType::SEX->name],
            $itemData[DataElementType::DATE_OF_EXPIRY->name],
            $itemData[DataElementType::OPTIONAL_DATA_ELEMENTS->name],
        );
    }
}
