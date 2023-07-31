<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Support;

class StringParser
{
    public static function getChars(string $string, int $lineNumber, int $nrOfCharsPerLine, int $startChar, int $endChar): string
    {
        $startAt = (($lineNumber - 1) * $nrOfCharsPerLine) + $startChar - 1;
        $endAt   = (($lineNumber - 1) * $nrOfCharsPerLine) + $endChar;

        return substr(
            $string,
            $startAt,
            $endAt - $startAt,
        );
    }
}
