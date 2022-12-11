<?php

namespace App\Helpers;



use Carbon\Carbon;
use GuzzleHttp\Psr7\Header;

class Helpers

{

    public function formatDate($date,$format)

    {

        return Carbon::parse($date)->format($format);

    }

    public function replaceYear($search,$replace,$string)

    {

        return str_replace($search,$replace,$string);

    }

    public function formatPrice($price)

    {

        return number_format($price,0,",",".");

    }

    public function formatRound($round)

    {

        return round($round,2);

    }

    public function replacePrice($price = '')

    {

        if(is_null($price) || $price != '')

        {

           $price = str_replace(',','',$price);

           return $price;

        }

        return 0;

    }

    public function generateRandomString($length = 10) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $charactersLength = strlen($characters);

        $randomString = '';

        for ($i = 0; $i < $length; $i++) {

            $randomString .= $characters[rand(0, $charactersLength - 1)];

        }

        return $randomString;

    }

}
?>
