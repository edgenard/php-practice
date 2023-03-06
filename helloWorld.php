<?php
// print "What is your name? \n";
// $question = fopen('php://stdin', 'r');
// $name = chop(fgets($question));
// print "Hello {$name}, nice to meet you";

//Constraint use a version of the program without using any variables

print "What is your name? \n";
$name = chop(fgets(fopen('php://stdin', 'r')));

print "Hello, $name have a a good day\n";


// I don't think there is a way to do string interpolation in PHP without variables
// I don't think the code interpolated gets evaluated like it does in JS or Ruby