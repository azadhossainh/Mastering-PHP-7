<?php
echo ord('A');
echo PHP_EOL;
echo ord('a');
echo PHP_EOL;
echo chr(66);
echo PHP_EOL;
echo chr(98);
echo PHP_EOL;
$n = 65;
$nsmall = 97;
for ($i = $n, $j = $nsmall; $i <= 90; $i++, $j++) {
    echo $i." = ".chr($i)." & " .$j." = ".chr($j) . "\n";
}
