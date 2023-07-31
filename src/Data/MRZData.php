<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data;

use PrinsFrank\MRTD\Data\Factory\MRZDataFactory;

interface MRZData
{
    /** @return class-string<MRZDataFactory<MRZData>> */
    public static function getFactoryFQN(): string;
}
