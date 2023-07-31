<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data;

use PrinsFrank\MRTD\Data\Factory\MRZ2DataFactory;

class MRZ2Data implements MRZData
{
    public function __construct(
        public readonly string $documentCode,
        public readonly string $documentIssuingStateOrOrganization,
        public readonly string $name,
        public readonly string $documentNumber,
        public readonly string $nationality,
        public readonly string $dateOfBirth,
        public readonly string $sex,
        public readonly string $dateOfExpiry,
        public readonly string $optionalDataElements,
    ) {
    }

    /** @return class-string<MRZ2DataFactory> */
    public static function getFactoryFQN(): string
    {
        return MRZ2DataFactory::class;
    }
}
