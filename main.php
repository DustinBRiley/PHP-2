<?php
/* NOTE: to see your output in the console,
   follow your output with a new line "\n"

   2nd NOTE: This is only for Repl.
   Do not make a habit of adding the new line character
   in your PHP projects.
*/

/* 01: create an if statement that outputs 
   "x is greater than 5" when the condition is true
*/
$x = 6;
// Don't change the value of $x above
if ($x > 5) {
  echo "x is greater than 5\n";
}

/* 02: create an if else statement that outputs 
   "y is greater than 5" when the condition is true 
   and "y is less than or equal to 5" when false
*/
$y = 4;
// Don't change the value of $y above
if ($y > 5) {
  echo "y is greater than 5\n";
} else {
  echo "y is less than or equal to 5\n";
}

/* 03: create an if elseif else statement that outputs 
   "z is greater than 5" when the if condition is true, 
   "z is equal to 5" when the elseif condition is true, 
   and "z is less than 5" when both are false
   Use an identical (aka strict) equals operator for the elseif. 
*/
$z = 5;
// Don't change the value of $z above
if ($z > 5) {
  echo "z is greater than 5\n";
} elseif ($z === 5) {
  echo "z is equal to 5\n";
} else {
  echo "z is less than 5\n";
}

/* 04: create a switch statement that outputs 
   "Great weather!" when $w is equal to "sunny", 
   "Bad weather" when $w is equal to "cloudy", 
   and "Average weather" for any other value. 
*/
$w = "cloudy";
// Don't change the value of $w above
switch($w) {
  case "sunny": echo "Great weather!\n"; break;
  case "cloudy": echo "Bad weather\n"; break;
  default: echo "Average weather\n";
}

/* 05: create a switch statement that outputs 
   "Freshman" when $grade is equal to "9", 
   "Sophomore" when $grade is equal to "10",
   "Junior" when $grade is equal to "11",  
   "Senior" when $grade is equal to "12", 
   and "Not in High School" for any other value. 
*/
$grade = "10";
// Don't change the value of $grade above
switch($grade) {
  case "9": echo "Freshman\n"; break;
  case "10": echo "Sophomore\n"; break;
  case "11": echo "Junior\n"; break;
  case "12": echo "Senior\n"; break;
  default: echo "Not in High School\n";
}

/* 06: create an array named ledzep with the following values: 
   "Robert", "JPJ", "Jimmy", "John" 
   Output "John" from the array
*/
$ledzep = array("Robert", "JPJ", "Jimmy", "John");
echo $ledzep[3] . "\n";

/* 07: create a variable named arrlength 
   Use the proper PHP function to get the length of the ledzep array. 
   Output the variable arrlength to display the correct length. 
*/
$arrlength = count($ledzep);
echo $arrlength . "\n";

/* 08: Loop through the ledzep array with a for loop. 
   Output "Hello, Robert" and repeat for each element in the array. 
*/
for ($i = 0;$i < $arrlength;$i++) {
  echo "Hello, " . $ledzep[$i] . "\n";
}

/* 09: Create an associative array named vh with the following 
   key / value pairs: 
   "vocals": "Dave" 
   "guitar": "Eddie" 
   "bass": "Michael" 
   "drums": "Alex" 
   Output the following phrase using the vh array associations: 
   "Van Halen band members include Dave, Eddie, Michael, and Alex."
*/
$vh = [
  "vocals" => "Dave",
  "guitar" => "Eddie", 
  "bass" => "Michael",
  "drums" => "Alex"
];
echo "Van Halen band members include " . $vh["vocals"] . ", " . $vh["guitar"] . ", " . $vh["bass"] . ", and " . $vh["drums"] . ".\n";

/*10: Loop through the vh associative array with foreach. 
   Output "Key: vocals, Value: Dave" and repeat for each key/value pair 
*/
foreach ($vh as $x => $val) {
  echo "Key: " . $x . ", Value: " . $val . "\n";
}

/*11: Create a function named simpleMsg that outputs 
  "Here is a simple message" when it is called. 
  Remember to call the function, too. 
*/
function simpleMsg() {
  echo "Here is a simple message\n";
}
simpleMsg();

/*12: Create a function named hello that has a 
   $name parameter and outputs "Hello Dave!" when 
   it is called, and the value of the argument 
   passed in is "Dave". It should work with other 
   values, too.
   Remember to call the function with the argument. 
*/
$myName = "Walt";
// Don't change the value of $myName above
function hello($name) {
  echo "Hello " . $name . "!\n";
}
hello($myName);
/* NOTE: It is important to understand the variable name 
   that holds the argument value does NOT have to be 
   the same as the $name parameter in the definition 
   of the function. Functions should be reusable.
   You should be able to pass in different argument 
   variables and your function should still work.
*/


/*13: Create a function named addTwo that accepts 
  two parameters, $x and $y, and returns their sum. 
  Create a variable named $myTotal and set it equal 
  to the value returned from the function. 
  Call the addTwo with the arguments 15 and 3. 
  Output the value of $myTotal.
*/
function addTwo($x, $y) {
  return $x + $y;
}
$myTotal = addTwo(15, 3);
echo $myTotal . "\n";

/*14: Create a function named getFirst that accepts 
  an $array parameter and returns the first value 
  of the array. Create a variable named $myFirst 
  and set it equal to the value returned from the 
  function. Call getFirst with the $blt variable 
  provided as the argument. 
  Output the value of $myFirst.
*/
$blt = array("bacon","lettuce","tomato","toast","mayo");
// Don't change the value of $blt above
function getFirst($array) {
  return $array[0];
}
$myFirst = getFirst($blt);
echo $myFirst . "\n";

/*15: Create a function named getLast that accepts 
  an $array parameter and returns the last value 
  of the array. Create a variable named $myLast 
  and set it equal to the value returned from the 
  function. Call getLast with the $blt variable 
  provided as the argument. 
  Output the value of $myLast.
*/
function getLast($array) {
  return $array[count($array) - 1] . "\n";
}
$myLast = getLast($blt);
echo $myLast . "\n";
