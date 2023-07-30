<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\DataElement\DataElement;

interface MRZDefinition
{
    public function nrOfLines(): int;

    public function nrOfCharactersPerLine(): int;

    /** @return array<DataElement> */
    public function getDataElements(): array;

    /** @return array<CheckDigit> */
    public function getCheckDigits(): array;
}
