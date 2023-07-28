<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\CheckDigit;

enum DataElementType
{
    case DOCUMENT_CODE;
    case ISSUING_STATE_OR_ORGANIZATION;
    case NAME;
    case PASSPORT_NUMBER;
    case DOCUMENT_NUMBER;
    case NATIONALITY;
    case DATE_OF_BIRTH;
    case SEX;
    case DATE_OF_EXPIRY;
    case PERSONAL_NUMBER_OR_OTHER_OPTIONAL_DATA_ELEMENTS;
    case OPTIONAL_DATA_ELEMENTS;
}
