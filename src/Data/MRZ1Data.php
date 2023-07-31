<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data;

use PrinsFrank\MRTD\Data\Factory\MRZ1DataFactory;

class MRZ1Data implements MRZData
{
    public function __construct(
        public readonly string $documentCode,
        public readonly string $issuingStateOrOrganization,
        public readonly string $documentNumber,
        public readonly string $optionalDataElements,
        public readonly string $dateOfBirth,
        public readonly string $sex,
        public readonly string $dateOfExpiry,
        public readonly string $nationality,
        public readonly string $optionalDataElements2,
        public readonly string $name,
    ) {
    }

    /** @return class-string<MRZ1DataFactory> */
    public static function getFactoryFQN(): string
    {
        return MRZ1DataFactory::class;
    }
}
