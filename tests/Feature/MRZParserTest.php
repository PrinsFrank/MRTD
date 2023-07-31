<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Tests\Feature;

use PHPUnit\Framework\TestCase;
use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\CheckDigit\CheckDigitCharacterRange;
use PrinsFrank\MRTD\Data\MRZ1Data;
use PrinsFrank\MRTD\Data\MRZ2Data;
use PrinsFrank\MRTD\Data\MRZ3Data;
use PrinsFrank\MRTD\MRZ\MRZ1;
use PrinsFrank\MRTD\MRZ\MRZ2;
use PrinsFrank\MRTD\MRZ\MRZ3;
use PrinsFrank\MRTD\MRZ\Provider\MRZObjectProvider;
use PrinsFrank\MRTD\MRZParser;
use PrinsFrank\MRTD\String\MRZ1String;
use PrinsFrank\MRTD\String\MRZ2String;
use PrinsFrank\MRTD\String\MRZ3String;
use PrinsFrank\MRTD\Validation\Validation;
use PrinsFrank\MRTD\Validation\ValidationCollection;

class MRZParserTest extends TestCase
{
    /**
     * @see https://www.icao.int/publications/Documents/9303_p5_cons_en.pdf Appendix B for this example
     */
    public function testMRZ1Data(): void
    {
        static::assertEquals(
            new MRZ1(
                new MRZ1String(
                    'I<UTOD231458907<<<<<<<<<<<<<<<',
                    '7408122F1204159UTO<<<<<<<<<<<6',
                    'ERIKSSON<<ANNA<MARIA<<<<<<<<<<',
                ),
                new MRZ1Data(
                    'I<',
                    'UTO',
                    'D23145890',
                    '<<<<<<<<<<<<<<<',
                    '740812',
                    'F',
                    '120415',
                    'UTO',
                    '<<<<<<<<<<<',
                    'ERIKSSON<<ANNA<MARIA<<<<<<<<<<',
                ),
                new ValidationCollection(
                    [
                        new Validation(new CheckDigit(2, 7, new CheckDigitCharacterRange(2, 1, 6)), true),
                        new Validation(new CheckDigit(2, 15, new CheckDigitCharacterRange(2, 9, 14)), true),
                        new Validation(new CheckDigit(2, 30, new CheckDigitCharacterRange(1, 6, 30), new CheckDigitCharacterRange(2, 1, 7), new CheckDigitCharacterRange(2, 9, 15), new CheckDigitCharacterRange(2, 19, 29)), true),
                    ]
                )
            ),
            (new MRZParser(new MRZObjectProvider()))
                ->fromString('I<UTOD231458907<<<<<<<<<<<<<<<7408122F1204159UTO<<<<<<<<<<<6ERIKSSON<<ANNA<MARIA<<<<<<<<<<')
        );
    }

    /**
     * @see https://www.icao.int/publications/Documents/9303_p6_cons_en.pdf Appendix B for this example
     */
    public function testMRZ2Data(): void
    {
        static::assertEquals(
            new MRZ2(
                new MRZ2String(
                    'I<UTOERIKSSON<<ANNA<MARIA<<<<<<<<<<<',
                    'D231458907UTO7408122F1204159<<<<<<<6',
                ),
                new MRZ2Data(
                    'I<',
                    'UTO',
                    'ERIKSSON<<ANNA<MARIA<<<<<<<<<<<',
                    'D23145890',
                    'UTO',
                    '740812',
                    'F',
                    '120415',
                    '<<<<<<<',
                ),
                new ValidationCollection(
                    [
                        new Validation(new CheckDigit(2, 10, new CheckDigitCharacterRange(2, 1, 9)), true),
                        new Validation(new CheckDigit(2, 20, new CheckDigitCharacterRange(2, 14, 19)), true),
                        new Validation(new CheckDigit(2, 28, new CheckDigitCharacterRange(2, 22, 27)), true),
                        new Validation(new CheckDigit(2, 36, new CheckDigitCharacterRange(2, 1, 10), new CheckDigitCharacterRange(2, 14, 20), new CheckDigitCharacterRange(2, 22, 35)), true),
                    ]
                )
            ),
            (new MRZParser(new MRZObjectProvider()))
                ->fromString('I<UTOERIKSSON<<ANNA<MARIA<<<<<<<<<<<D231458907UTO7408122F1204159<<<<<<<6')
        );
    }

    /**
     * @see https://www.icao.int/publications/Documents/9303_p4_cons_en.pdf Appendix B for this example
     */
    public function testMRZ3Data(): void
    {
        static::assertEquals(
            new MRZ3(
                new MRZ3String(
                    'P<UTOERIKSSON<<ANNA<MARIA<<<<<<<<<<<<<<<<<<<',
                    'L898902C36UTO7408122F1204159ZE184226B<<<<<10',
                ),
                new MRZ3Data(
                    'P<',
                    'UTO',
                    'ERIKSSON<<ANNA<MARIA<<<<<<<<<<<<<<<<<<<',
                    'L898902C3',
                    'UTO',
                    '740812',
                    'F',
                    '120415',
                    'ZE184226B<<<<<',
                ),
                new ValidationCollection(
                    [
                        new Validation(new CheckDigit(2, 10, new CheckDigitCharacterRange(2, 1, 9)), true),
                        new Validation(new CheckDigit(2, 20, new CheckDigitCharacterRange(2, 14, 19)), true),
                        new Validation(new CheckDigit(2, 28, new CheckDigitCharacterRange(2, 22, 27)), true),
                        new Validation(new CheckDigit(2, 43, new CheckDigitCharacterRange(2, 29, 42)), true),
                        new Validation(new CheckDigit(2, 44, new CheckDigitCharacterRange(2, 1, 10), new CheckDigitCharacterRange(2, 14, 20), new CheckDigitCharacterRange(2, 22, 43)), true),
                    ]
                )
            ),
            (new MRZParser(new MRZObjectProvider()))
                ->fromString('P<UTOERIKSSON<<ANNA<MARIA<<<<<<<<<<<<<<<<<<<L898902C36UTO7408122F1204159ZE184226B<<<<<10')
        );
    }
}
