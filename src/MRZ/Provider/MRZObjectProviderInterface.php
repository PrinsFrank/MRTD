<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ\Provider;

use PrinsFrank\MRTD\MRZ\MRZInterface;

interface MRZObjectProviderInterface
{
    /** @return array<MRZInterface> */
    public function getMRZTypes(): array;
}
