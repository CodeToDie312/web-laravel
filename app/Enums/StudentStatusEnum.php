<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StudentStatusEnum extends Enum
{
     public const TRUNG_BINH = 1;
     public const KHA = 2;
     public const GIOI = 3;
     public static function getArrayView(): array
     {
         return [
             'Average' => self::TRUNG_BINH,
             'Pretty' => self::KHA,
             'Good' => self::GIOI,
         ];
     }
    public static function getKeyByValue($value): string
    {
        return array_search($value, self::getArrayView(), true);
    }
}
