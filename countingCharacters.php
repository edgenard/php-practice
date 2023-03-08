<?php

print "What is the input string?\n";
$string = chop(fgets(fopen('php://stdin', 'r')));
$stringLength = strlen($string);
print "$string has $stringLength characters\n";