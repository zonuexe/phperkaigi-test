<?php

function test_plus ()
{
    $values = [
        ['expected' => 2, 'a' => 1, 'b' => 1],
        ['expected' => 3.0, 'a' => 1.5, 'b' => 1.5],
        ['expected' => 3, 'a' => 1.5, 'b' => 1.5],
    ];

    foreach ($values as ['expected' => $expected, 'a' => $a, 'b' => $b]) {
        assertThat($actual = $a + $b, equalTo($expected));
    }
}
