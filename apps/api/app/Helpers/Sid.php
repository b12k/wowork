<?php

namespace App\Helpers;

use Hashids\Hashids;

class Sid
{
    public static function generate(): string
    {
        $time = intdiv(hrtime(true), 100);
        $rand = str_pad(rand(0, 99), 2, 0, STR_PAD_LEFT);

        return (new Hashids())->encode($time.$rand);
    }
}
