<?php
/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

// Comments are like in JavaScript

// for single-lined comments

/* for multi-lined comments */

echo "hello world";

echo "<h1>hello space</h1>"; // mostly used to print something out

print "<h2>hello earth</h2>"; // rarely used

//functions to print (can be for array)

print_r(["Mercury", "Venus", "Earth"]);

echo "<br>";

var_dump(["Mercury", "Venus", "Earth"]);

echo "<br>";

var_dump("Hello Uranus!");

/* 
  using echo|print escape is needed unless declaring string in the heredoc/nowdoc way. will be elaborated in 02_variable.
*/

echo "<br>";

echo 'I\'m Kami.';

//closing tag is omittable if the file contains only php script.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01_Output</title>
</head>
<body>
  <!--
    The following way to omit (php echo) when the script contains only a line of echo
  -->
  <?= "Blackhole, you stay away from me!"; ?>
</body>
</html>

