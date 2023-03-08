<?php
// Constraints 
// A single output statement
// Don't use string interpolation, use concatenation
// Challenge: use an array to hold the quote and author
// and then iterate through the array to 

print("What is the quote?\n");
$quote = chop(fgets(fopen('php://stdin', 'r')));
print("Who said it?\n");
$author = chop(fgets(fopen('php://stdin', 'r')));

$quoteList= array( $quote => $author, );


foreach ($quoteList as $quote => $author) { 
    print($author . " says, " . "\"" . $quote . "\"\n");
};



