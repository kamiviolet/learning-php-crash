<?php
/* ----------- Arrrays ----------- */
$array = ["Tom", "Mary", "Sue", "Uranus"];
$array_01 = array("Sun", "Mercury", "Jupiter");

var_dump($array);
var_dump($array_01);

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

//Associative Arrays - like Dictionary / Map.. or even object in JS
//can be declared by [] or array();
//key can be any type not just only string/symbol like objects in JS
$asso_array = array(
  "star" => "Sun",
  "terrestrial_planets" => ["Mercury", "Venus", "Earth", "Mars"],
  "gas_planets" => ["Jupiter", "Saturn"],
  "ice_giants" => ["Uranus", "Neptune"],
);

var_dump($asso_array);
echo "<br>";
echo PHP_EOL;
print_r($asso_array);
echo "<br>";
echo PHP_EOL;
var_dump($asso_array["star"]);
echo "<br>";
echo PHP_EOL;
var_dump($asso_array["ice_giants"][0]);

//same key in associative array will be overwritten, see below:
//https://www.php.net/manual/en/language.types.array.php
$array = array(
  1    => 'a',
  '1'  => 'b', // the value "a" will be overwritten by "b"
  1.5  => 'c', // the value "b" will be overwritten by "c"
  -1 => 'd',
  '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
  '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
  true => 'g', // the value "c" will be overwritten by "g"
  false => 'h',
  '' => 'i',
  null => 'j', // the value "i" will be overwritten by "j"
  'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
  2 => 'l', // the value "k" will be overwritten by "l"
);

var_dump($array);