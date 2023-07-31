<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\Validation\ValidationCollection;
use PrinsFrank\MRTD\Data\MRZ2Data;
use PrinsFrank\MRTD\Data\MRZData;
use PrinsFrank\MRTD\Definition\MRZ2Definition;
use PrinsFrank\MRTD\Definition\MRZDefinition;
use PrinsFrank\MRTD\String\MRZ2String;
use PrinsFrank\MRTD\String\MRZString;

class MRZ2 implements MRZInterface
{
    public function __construct(
        public readonly MRZ2String $MRZ1String,
        public readonly MRZ2Data $MRZ1Data,
        public readonly ValidationCollection $validationCollection,
    ) {
    }

    /** @return class-string<MRZ2Definition> */
    public static function getDefinitionFQN(): string
    {
        return MRZ2Definition::class;
    }

    /** @return class-string<MRZ2String> */
    public static function getStringObjectFQN(): string
    {
        return MRZ2String::class;
    }

    /** @return class-string<MRZ2Data> */
    public static function getDataObjectFQN(): string
    {
        return MRZ2Data::class;
    }
}
