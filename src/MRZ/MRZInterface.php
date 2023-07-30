<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\Data\MRZData;
use PrinsFrank\MRTD\Definition\MRZDefinition;
use PrinsFrank\MRTD\String\MRZString;

interface MRZInterface
{
    /** @return class-string<MRZDefinition> */
    public static function getDefinitionFQN(): string;

    /** @return class-string<MRZString> */
    public static function getStringObjectFQN(): string;

    /** @return class-string<MRZData> */
    public static function getDataObjectFQN(): string;
}
