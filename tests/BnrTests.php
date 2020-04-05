<?php

namespace Andali\Bnr\Tests;

use Andali\Bnr\Facades\Bnr;

class BnrTests extends TestCase
{
    /** @test */
    public function api_response_is_correct_for_eur()
    {
        $getExchangeRate = BNR::exchange('EUR', '2020-03-03');
        $this->assertEquals(4.8074, $getExchangeRate);
    }

    /** @test */
    public function api_response_is_correct_for_eur_without_date()
    {
        $getExchangeRate = BNR::exchange('EUR');
        $this->assertIsString($getExchangeRate);
    }

    /** @test */
    public function api_response_is_correct_for_usd()
    {
        $getExchangeRate = BNR::exchange('USD', '2020-03-03');
        $this->assertEquals(4.3263, $getExchangeRate);
    }
}
