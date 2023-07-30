<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data;

use PrinsFrank\MRTD\Data\Factory\MRZ1DataFactory;
use PrinsFrank\MRTD\Data\Factory\MRZDataFactory;

class MRZ1Data implements MRZData
{
    public function __construct(

    ) {
    }

    /** @return class-string<MRZDataFactory> */
    public static function getFactoryFQN(): string
    {
        return MRZ1DataFactory::class;
    }
}
