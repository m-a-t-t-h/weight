<?php

namespace Matt\Weight\Tests;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_test() {
        $pounds = \Matt\Weight\WeightClass::kilograms(100)->toPounds();
        $this->assertEquals($pounds, 220.46);
    }
}
