<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD;

use PrinsFrank\MRTD\Data\MRZData;
use PrinsFrank\MRTD\Definition\MRZDefinition;
use PrinsFrank\MRTD\Exceptions\InvalidMRZStringException;
use PrinsFrank\MRTD\MRZ\MRZInterface;
use PrinsFrank\MRTD\MRZ\Provider\MRZObjectProviderInterface;

class MRZParser implements MRZParserInterface
{
    public function __construct(
        private readonly MRZObjectProviderInterface $MRZObjectProvider,
    ) {
    }

    /**
     * @throws InvalidMRZStringException
     */
    public function fromString(string $string): MRZInterface
    {
        $string = str_replace(["\n", "\r", ''], '', $string);
        $strlen = strlen($string);
        foreach ($this->MRZObjectProvider->getMRZTypes() as $type) {
            /** @var MRZDefinition $definitionForType */
            $definitionForType = $type::getDefinitionFQN();
            /** @var class-string<MRZData> $dataObjectFQN */
            $dataObjectFQN = $type::getDataObjectFQN();
            if ($definitionForType::nrOfCharactersPerLine() * $definitionForType::nrOfLines() === $strlen) {
                return new $type(
                    new ($type::getStringObjectFQN())(...str_split($string, $definitionForType::nrOfCharactersPerLine())),
                    ($dataObjectFQN::getFactoryFQN())::fromString($string),
                );
            }
        }

        throw new InvalidMRZStringException();
    }
}
