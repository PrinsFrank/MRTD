<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Character;

enum Character: string
{
    case FILLER = '<';
    case _0     = '0';
    case _1     = '1';
    case _2     = '2';
    case _3     = '3';
    case _4     = '4';
    case _5     = '5';
    case _6     = '6';
    case _7     = '7';
    case _8     = '8';
    case _9     = '9';
    case A      = 'A';
    case B      = 'B';
    case C      = 'C';
    case D      = 'D';
    case E      = 'E';
    case F      = 'F';
    case G      = 'G';
    case H      = 'H';
    case I      = 'I';
    case J      = 'J';
    case K      = 'K';
    case L      = 'L';
    case M      = 'M';
    case N      = 'N';
    case O      = 'O';
    case P      = 'P';
    case Q      = 'Q';
    case R      = 'R';
    case S      = 'S';
    case T      = 'T';
    case U      = 'U';
    case V      = 'V';
    case W      = 'W';
    case X      = 'X';
    case Y      = 'Y';
    case Z      = 'Z';

    public function getValue(): int
    {
        return match ($this) {
            self::_0,
            self::FILLER => 0,
            self::_1     => 1,
            self::_2     => 2,
            self::_3     => 3,
            self::_4     => 4,
            self::_5     => 5,
            self::_6     => 6,
            self::_7     => 7,
            self::_8     => 8,
            self::_9     => 9,
            self::A      => 10,
            self::B      => 11,
            self::C      => 12,
            self::D      => 13,
            self::E      => 14,
            self::F      => 15,
            self::G      => 16,
            self::H      => 17,
            self::I      => 18,
            self::J      => 19,
            self::K      => 20,
            self::L      => 21,
            self::M      => 22,
            self::N      => 23,
            self::O      => 24,
            self::P      => 25,
            self::Q      => 26,
            self::R      => 27,
            self::S      => 28,
            self::T      => 29,
            self::U      => 30,
            self::V      => 31,
            self::W      => 32,
            self::X      => 33,
            self::Y      => 34,
            self::Z      => 35
        };
    }
}
