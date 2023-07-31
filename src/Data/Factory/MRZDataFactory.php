<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data\Factory;

use PrinsFrank\MRTD\Data\MRZData;

/**
 * @template TData of MRZData
 */
interface MRZDataFactory
{
    /** @return TData */
    public static function fromString(string $string);
}
