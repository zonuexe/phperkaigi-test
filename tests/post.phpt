--TEST--
GET $_ENV test
--ENV--
return <<<END
a=AAA
b=BBB
END;
--FILE--
<?php
echo getenv('a'), "\n";
echo getenv('b'), "\n";
?>
--EXPECT--
AAA
BBB
