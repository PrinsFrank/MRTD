<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data\Factory;

use PrinsFrank\MRTD\Data\MRZ1Data;
use PrinsFrank\MRTD\DataElement\DataElementType;
use PrinsFrank\MRTD\Definition\MRZ1Definition;
use PrinsFrank\MRTD\Support\StringParser;

class MRZ1DataFactory implements MRZDataFactory
{
    public static function fromString(string $string): MRZ1Data
    {
        $itemData = [];
        foreach (MRZ1Definition::getDataElements() as $dataElement) {
            $itemData[$dataElement->dataElementType->name] = StringParser::getChars($string, $dataElement->lineNumber, MRZ1Definition::nrOfCharactersPerLine(), $dataElement->charPosStart, $dataElement->charPosEnd);
        }

        return new MRZ1Data(
            $itemData[DataElementType::DOCUMENT_CODE->name],
            $itemData[DataElementType::ISSUING_STATE_OR_ORGANIZATION->name],
            $itemData[DataElementType::DOCUMENT_NUMBER->name],
            $itemData[DataElementType::OPTIONAL_DATA_ELEMENTS->name],
            $itemData[DataElementType::DATE_OF_BIRTH->name],
            $itemData[DataElementType::SEX->name],
            $itemData[DataElementType::DATE_OF_EXPIRY->name],
            $itemData[DataElementType::NATIONALITY->name],
            $itemData[DataElementType::OPTIONAL_DATA_ELEMENTS_SECONDARY->name],
            $itemData[DataElementType::NAME->name],
        );
    }
}
