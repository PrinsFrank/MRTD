<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\Validation\ValidationCollection;
use PrinsFrank\MRTD\Data\MRZ1Data;
use PrinsFrank\MRTD\Data\MRZData;
use PrinsFrank\MRTD\Definition\MRZ1Definition;
use PrinsFrank\MRTD\Definition\MRZDefinition;
use PrinsFrank\MRTD\String\MRZ1String;
use PrinsFrank\MRTD\String\MRZString;

class MRZ1 implements MRZInterface
{
    public function __construct(
        public readonly MRZ1String $MRZ1String,
        public readonly MRZ1Data $MRZ1Data,
        public readonly ValidationCollection $validationCollection,
    ) {
    }

    /** @return class-string<MRZ1Definition> */
    public static function getDefinitionFQN(): string
    {
        return MRZ1Definition::class;
    }

    /** @return class-string<MRZ1String> */
    public static function getStringObjectFQN(): string
    {
        return MRZ1String::class;
    }

    /** @return class-string<MRZ1Data> */
    public static function getDataObjectFQN(): string
    {
        return MRZ1Data::class;
    }
}
