<?php

require_once __DIR__ . '/define.php';

ini_set('zend.assertions', 1);
ini_set('assert.exception', 0);

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_BAIL, 0);
assert_options(ASSERT_QUIET_EVAL, 0);
assert_options(ASSERT_WARNING, 0);

$testing = new Testing([
    'stop_on_failure' => in_array('--stop_on_failure', $_SERVER['argv']),
]);

assert_options(ASSERT_CALLBACK, [$testing, 'handler']);

return $testing;
