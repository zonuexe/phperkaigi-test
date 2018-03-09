#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';
// set_error_handler(function($severity, $message, $file, $line) {
//     if (error_reporting() & $severity) {
//         throw new \ErrorException($message, 0, $severity, $file, $line);
//     }
// });

assert(2 === 1 + 1);
assert(3 === 1.5 + 1.5);
assert("2112-09-03" === date('Y-m-d', 4503168000));

$a = [1, 2, 3];
assert(1 == array_shift($a));

echo 'ok.', PHP_EOL;
