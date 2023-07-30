<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Data\Factory;

interface MRZDataFactory
{
    public static function fromString(string $string);
}
