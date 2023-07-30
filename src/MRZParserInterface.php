<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD;

use PrinsFrank\MRTD\MRZ\MRZInterface;

interface MRZParserInterface
{
    public function fromString(string $string): MRZInterface;
}
