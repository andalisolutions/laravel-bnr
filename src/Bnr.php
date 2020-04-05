<?php

namespace Andali\Bnr;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Bnr
{
    const API_BNR = 'https://www.bnr.ro/files/xml/curs_{{date}}.xml';

    public function exchange(string $currency = 'EUR', $date = null)
    {
        $api = Str::of(static::API_BNR)->replace('{{date}}', Carbon::parse($date)->format('Y_n_j'));
        $xmlString = Http::get($api)->body();

        return  Str::of($xmlString)->match('/<Rate currency=\"'.$currency.'\">([0-9.]*)<\/Rate>/')->__toString();
    }
}
