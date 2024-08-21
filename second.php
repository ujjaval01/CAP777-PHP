<?php

$string1 = "Hello";
$string2 = " WORLD";
$string3 = "   Hello World   ";
$string4 = "Hello,World,Universe";
$result = $string1 . $string2;
echo "Concatenation: $result <br>";

$length = strlen($string1);
echo "Length: $length <br>";

$uppercase = strtoupper($string1);
echo "Uppercase: $uppercase <br>";

$lowercase = strtolower($string2);
echo "Lowercase: $lowercase <br>";

$trimmed = trim($string3);
echo "Trim: $trimmed <br>";

$substring = substr($string3, 0, 5);
echo "Substring: $substring <br>";

$replaced = str_replace("World", "Universe", $string3);
echo "Replace: $replaced <br>";

$split = explode(",", $string4);
print_r("Split: $split <br>");

$string = "Hello World Universe";
$wordCount = str_word_count($string);
echo "Word count: $wordCount <br>";

$string = "Hello World";
$reversed = strrev($string);
echo "Reverse: $reversed <br>";

$string = "Hello World";
$shuffled = str_shuffle($string);
echo "Shuffle: $shuffled <br>";

$string1 = "Hello World";
$string2 = "Hello Universe";
$similarity = similar_text($string1, $string2, $percent);
echo "Similarity: $percent% <br>";

$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);

?>