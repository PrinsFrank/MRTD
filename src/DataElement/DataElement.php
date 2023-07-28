<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\DataElement;

use PrinsFrank\MRTD\CheckDigit\DataElementType;

class DataElement
{
    public function __construct(
        public readonly DataElementType $dataElementType,
        public readonly int $lineNumber,
        public readonly int $charPosStart,
        public readonly int $charPosEnd,
    ) {
    }
}
