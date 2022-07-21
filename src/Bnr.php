<?php

namespace Andali\Bnr;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Bnr
{
    public const API_BNR = 'https://www.bnr.ro/files/xml/curs_{{date}}.xml';

    public function __construct(
        public string $currency,
    ) {
    }

    public static function exchange(string $currency)
    {
        return new self(currency: $currency);
    }

    public function today(): float
    {
        $api = Str::of(static::API_BNR)->replace('{{date}}', Carbon::now()->format('Y_n_j'));

        $xmlString = Http::get($api)->body();

        return  (float) Str::of($xmlString)->match('/<Rate currency=\"'.$this->currency.'\">([0-9.]*)<\/Rate>/')->__toString();
    }

    public function in(string $date): float
    {
        $api = Str::of(static::API_BNR)->replace('{{date}}', Carbon::parse($date)->format('Y_n_j'));

        $xmlString = Http::get($api)->body();

        return  (float) Str::of($xmlString)->match('/<Rate currency=\"'.$this->currency.'\">([0-9.]*)<\/Rate>/')->__toString();
    }
}
