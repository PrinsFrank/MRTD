<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Validation;

use PrinsFrank\MRTD\Character\Character;
use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\Support\StringParser;

class Validator
{
    private const WEIGHT_REPEATING = [7, 3, 1];

    /** @param array<CheckDigit> $checkDigits */
    public static function validateStringWithCheckDigits(string $string, int $nrOfCharsPerLine, array $checkDigits): ValidationCollection
    {
        $validations = [];
        foreach ($checkDigits as $checkDigit) {
            $checkDigitValue = (int) StringParser::getChars($string, $checkDigit->lineNumber, $nrOfCharsPerLine, $checkDigit->charPos, $checkDigit->charPos);
            $charsInRange    = '';
            foreach ($checkDigit->characterRanges as $characterRange) {
                $charsInRange .= StringParser::getChars($string, $characterRange->line, $nrOfCharsPerLine, $characterRange->startChar, $characterRange->endChar);
            }

            $sum = 0;
            foreach (str_split($charsInRange) as $key => $char) {
                $sum += Character::from($char)->getValue() * self::WEIGHT_REPEATING[$key % 3];
            }

            $validations[] = new Validation(
                $checkDigit,
                ($sum % 10) === $checkDigitValue,
            );
        }

        return new ValidationCollection($validations);
    }
}
