<?php

// assert("1"    === $actual = to_fizzbuzz(1));
// assert("Fizz" === $actual = to_fizzbuzz(3));
// assert("Buzz" === $actual = to_fizzbuzz(5));
// assert("Buzz" === $actual = to_fizzbuzz(10));
// assert("FizzBuzz" === $actual = to_fizzbuzz(5));
// assert("FizzBuzz" === $actual = to_fizzbuzz(15));
// assert("FizzBuzz" === $actual = to_fizzbuzz(45));

assert("1"    === $actual = to_fizzbuzz(1), eval(collect_vars));
assert("Fizz" === $actual = to_fizzbuzz(3), eval(collect_vars));
assert("Buzz" === $actual = to_fizzbuzz(5), eval(collect_vars));
assert("Buzz" === $actual = to_fizzbuzz(10), eval(collect_vars));
assert("FizzBuzz" === $actual = to_fizzbuzz(5), eval(collect_vars));
