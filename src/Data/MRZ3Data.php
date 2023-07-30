<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data;

use PrinsFrank\MRTD\Data\Factory\MRZ3DataFactory;
use PrinsFrank\MRTD\Data\Factory\MRZDataFactory;

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
        public readonly array $checkDigits,
    ) {
    }

    /** @return class-string<MRZDataFactory> */
    public static function getFactoryFQN(): string
    {
        return MRZ3DataFactory::class;
    }
}
