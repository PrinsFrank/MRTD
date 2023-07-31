<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ\Provider;

use PrinsFrank\MRTD\MRZ\MRZ1;
use PrinsFrank\MRTD\MRZ\MRZ2;
use PrinsFrank\MRTD\MRZ\MRZ3;
use PrinsFrank\MRTD\MRZ\MRZInterface;

class MRZObjectProvider implements MRZObjectProviderInterface
{
    /** @return list<class-string<MRZInterface>> */
    public function getMRZTypes(): array
    {
        return [
            MRZ1::class,
            MRZ2::class,
            MRZ3::class,
        ];
    }
}
