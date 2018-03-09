<?php

function test_fizzbuzz()
{
    assertThat(to_fizzbuzz(1), equalTo("1"));
    assertThat(to_fizzbuzz(3), equalTo("Fizz"));
    assertThat(to_fizzbuzz(5), equalTo("Buzz"));
    assertThat(to_fizzbuzz(10), equalTo("Buzz"));
    assertThat(to_fizzbuzz(15), equalTo("FizzBuzz"));
}
