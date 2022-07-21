<?php

use Andali\Bnr\Bnr;

it('has valid response for today exchange rate', function ($currency) {
    $result = BNR::exchange($currency)->today();
    expect($result)->toBeFloat();
})->with([
    'EUR',
    'GBP',
    'USD',
]);

it('has valid response for specified date', function ($currency) {
    $result = BNR::exchange($currency)->in('2022-07-20');
    expect($result)->toBe(4.9399);
})->with([
    'EUR',
]);
