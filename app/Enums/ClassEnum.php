<?php

namespace App\Enums;

enum ClassEnum: string
{
    case CRECHE = 'Creche';
    case  PRE_NURSERY = 'Pre-Nursery';
    case NURSERY = 'Nursery';
    case LOWER_KG = "Lower-KG";
    case UPPER_KG = "Upper-KG";
    case YEAR_1 = "Year 1";
    case YEAR_2 = "Year 2";
    case YEAR_3 = "Year 3";
    case YEAR_4 = "Year 4";
    case YEAR_5 = "Year 5";
    case YEAR_6 = "Year 6";
    case YEAR_7 = "Year 7";
    case YEAR_8 = "Year 8";
    case YEAR_9 = "Year 9";
    case YEAR_10 = "Year 10";
    case YEAR_11 = "Year 11";
    case YEAR_12 = "Year 12";




    public static function values()
    {
        return array_column(self::cases(), 'value');
    }







    
}

