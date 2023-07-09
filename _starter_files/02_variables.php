<?php

/* ----- Variables & Data Types ----- */
$variable; //unintialised variable, not recommended but allowed
$variable = "variable";

define("CONSTANT", "I have a constant variable");
echo CONSTANT;
echo PHP_EOL;

// By default, variables are always assigned by value. - instead of reference.
// To assign by reference, simply prepend an ampersand (&) to the beginning of the variable which is being assigned (the source variable). For instance, the following code snippet outputs 'My name is Bob' twice: 

$foo = 'Bob';              // Assign the value 'Bob' to $foo
$bar = &$foo;              // Reference $bar to $foo('Bob' in this case)
$bar = "My name is $bar";  // Alter $bar to a sentence containing its previous status ($foo - "Bob")
echo $bar;
echo $foo;                 // $foo is altered too. otherwise, $foo will not be affected. staying in 'Bob'


/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

// - String - A string is a series of characters surrounded by quotes

$string_01 = 'string_01';
$string_02 = "string_02";

//heredoc will need to escape

echo <<< STRING_03
    string_03
        declared in heredoc way;
        \n
STRING_03;

//nowdoc will print everything literally without need to escape

echo <<< 'STRING_04'
    string_04
        declared in nowdoc way;
        \n
STRING_04;

echo $string_01;
echo $string_02;
echo PHP_EOL;

// - Integer - Whole numbers
// To explicitly convert a value to int, use either the (int) or (integer) casts.
// If the string is numeric or leading numeric then it will resolve to the corresponding integer value, otherwise it is converted to zero (0). 
// null is always converted to zero (0). 

$integer = 1000;

echo "integer: ";
var_dump($integer);
echo PHP_EOL;

//interesting case -
//numeric strings
//https://www.php.net/manual/en/language.types.numeric-strings.php
echo "5" + "5"; // not "55" but "10"
echo PHP_EOL;

// - Float - Decimal numbers

$float = 1000.0001;

echo "float: ";
var_dump($float);
echo PHP_EOL;

// - Boolean - true or false, case-insensitive

$bool = true;
$bool_false = false; 

var_dump($bool);
echo $bool; //return 1
echo PHP_EOL;

var_dump($bool_false);
echo $bool_false; //return nothing
echo PHP_EOL;

// To explicitly convert a value to bool, use the (bool) cast.

var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
echo PHP_EOL;
echo ((bool) "0");       // bool(false)
echo ((bool) 1);         // bool(true)
echo ((bool) -2);        // bool(true)
echo PHP_EOL;

// - Array - An array is a special variable, which can hold more than one value
// - Object - A class
// - NULL - Empty variable
//   undefined, and unset() variables will resolve to the value null. 
// - Enumerations - a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type. 
// - Resource - A special variable that holds a resource
// - Callables
// - Mixed - equivalent to Any in TypeScript;
// - Void - readonly
// - Never - readonly

/* 
    To insert computed values into string, one can either use single-quotation marks or double-quotation marks.
    - use '.' to concatenate strings and variables;
    - use double-quotation marks like template literals in JS;
 */
echo 'string_01 is ' . $string_01 . 'and integer is ' . $integer;
echo PHP_EOL;
echo "string_2 is $string_02, and bool is $bool";
echo "<br>";

//coercion in JS is equivalent to  type-juggling in php;
//but its not really necessary as php will intepret according to context - operator of sort;

//Variable scope 
// In PHP global variables must be declared global inside a function if they are going to be used in that function. 

$a = 1; /* global scope */ 

function test()
{ 
    global $a; //global keyword to connect local to global, else wont work
    echo $a; /* reference to local scope variable */ 
} 

test();
echo "<br>";

//another way to do the same
$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
echo $b;
echo "<br>";

function static_test()
{
    $a = 0;
    echo $a;
    $a++;
}
echo static_test();
echo static_test();
echo static_test(); //always 0, will not increment
echo "<br>";

//with static keyword will behave differently
function static_incl_test()
{
    static $a = 0;
    echo $a;
    $a++;
}
echo static_incl_test();
echo static_incl_test();
echo static_incl_test();
echo "<br>";

//Static variables can be assigned values which are the result of constant expressions, but dynamic expressions, such as function calls, will cause a parse error. 

//a true global variable imported inside a function scope with the global statement actually creates a reference to the global variable. 

//https://www.php.net/manual/en/language.variables.scope.php