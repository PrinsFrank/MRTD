<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\Validation\ValidationCollection;
use PrinsFrank\MRTD\Data\MRZ3Data;
use PrinsFrank\MRTD\Data\MRZData;
use PrinsFrank\MRTD\Definition\MRZ3Definition;
use PrinsFrank\MRTD\Definition\MRZDefinition;
use PrinsFrank\MRTD\String\MRZ3String;
use PrinsFrank\MRTD\String\MRZString;

class MRZ3 implements MRZInterface
{
    public function __construct(
        public readonly MRZ3String $MRZ3String,
        public readonly MRZ3Data $MRZ3Data,
        public readonly ValidationCollection $validationCollection,
    ) {
    }

    /** @return class-string<MRZDefinition> */
    public static function getDefinitionFQN(): string
    {
        return MRZ3Definition::class;
    }

    /** @return class-string<MRZString> */
    public static function getStringObjectFQN(): string
    {
        return MRZ3String::class;
    }

    /** @return class-string<MRZData> */
    public static function getDataObjectFQN(): string
    {
        return MRZ3Data::class;
    }
}
