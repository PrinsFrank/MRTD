<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\String;

class MRZ1String implements MRZString
{
    public function __construct(
        public readonly string $line1,
        public readonly string $line2,
        public readonly string $line3,
    ) {
    }
}
