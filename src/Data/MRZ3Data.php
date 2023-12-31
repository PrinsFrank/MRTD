<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data;

use PrinsFrank\MRTD\Data\Factory\MRZ3DataFactory;

class MRZ3Data implements MRZData
{
    public function __construct(
        public readonly string $documentCode,
        public readonly string $documentIssuingCountryOrOrganization,
        public readonly string $name,
        public readonly string $passportNumber,
        public readonly string $nationality,
        public readonly string $dateOfBirth,
        public readonly string $sex,
        public readonly string $dateOfExpiry,
        public readonly string $personalNumberOrOtherOptionalDataElements,
    ) {
    }

    /** @return class-string<MRZ3DataFactory> */
    public static function getFactoryFQN(): string
    {
        return MRZ3DataFactory::class;
    }
}
