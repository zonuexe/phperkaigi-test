<?php

/**
 * @dataProvider fizzbuzz_number_provider
 */
function test_fizzbuzz2($expected, $input)
{
    assertThat(to_fizzbuzz($input), equalTo($expected));
}

function fizzbuzz_number_provider()
{
    return [
        ["1",         1],
        ["Fizz",      3],
        ["Buzz",      5],
        ["Buzz",     10],
        ["FizzBuzz", 15],
    ];
}
