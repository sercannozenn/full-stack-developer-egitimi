<?php


namespace App\Service;


use Carbon\Carbon;

class DateService
{
    public static function parseBlogDate($date)
    {
        $month = ['Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül',
            'Ekim', 'Kasım', 'Aralık'];

        $date = Carbon::parse($date);
        $day = $date->day;
        $year = $date->year;
        dd(\Carbon\Carbon::parse($date)->translatedFormat('j F Y'));


    }
}
