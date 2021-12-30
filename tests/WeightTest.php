<?php

it('can convert kilograms to pounds', function () {
    $pounds = \Matt\Weight\WeightClass::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});
