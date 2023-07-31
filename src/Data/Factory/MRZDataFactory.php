<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data\Factory;

/**
 * @template TMRZData of \PrinsFrank\MRTD\Data\MRZData
 */
interface MRZDataFactory
{
    /**
     * @return TMRZData
     */
    public static function fromString(string $string);
}
