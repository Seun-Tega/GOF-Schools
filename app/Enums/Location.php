<?php

namespace App\Enums;

enum Location: string
{
    case OSOGBO_NIGERIA = 'Osogbo_Nigeria';
    case ABIDJAN_COTE_D_IVOIRE= "Abidjan_Cote_d_Ivoire";
    case EJIGBO_NIGERIA =  "Ejigbo_Nigeria";


   
   public static function values()
   {
    return array_column(self::cases(), 'value');
   }
}
