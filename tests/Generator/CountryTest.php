<?php

namespace Currency\Tests\Generator;


use CurrencyGenerator\Country;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
    public function testCreateCountry()
    {
        $this->assertInstanceOf(
            Country::class,
            new Country(
                'UNITED STATES OF AMERICA (THE)',
                'US Dollar',
                'USD',
                840,
                2
            )
        );
    }
}
