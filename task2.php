



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// first code print hello world use ( echo and print).

echo  "hello world <br>";
print "hello world<br>";

// second code make variable and print it with using concatinate

$firstname = "hussam";
$lastname = "hassan";
$age = 24 ;
echo " my name is $firstname". "$lastname <br>";
echo " my age is $age <br>";

// third code variables .

$x = 2000;
$y = $x;
echo "$y <br>";

// fourth code print my name in different ways.

echo $firstname . "<br>";
echo 'firstname'. "<br>";
echo "$firstname $lastname" ."<br>" ;
echo "$firstname " ."<br>";
echo '$firstname $lastname'."<br>";
echo "$firstname $lastname"."<br>";
echo "{$firstname} {$lastname}"."<br>";
echo '{$firstname} {$lastname}'."<br>";

// constant 

$name;
$name = "hussam";
$name = "hazem";
echo "name<br>";

define ("databasename", "huusam22");
echo databasename . "<br>";

// make function 
echo "$firstname .<br>";
function test (){
    global $firstname;
    echo $firstname;
}

echo PHP_VERSION ."<br>";
echo PHP_OS_FAMILY."<br>";
echo PHP_INT_MIN."<br>";
echo PHP_INT_MAX."<br>";

//boolean values

echo true . "<br>" ;
echo false . "<br>";
print true . "<br>" ;
print false . "<br>";

// if condition
$test = null ;
if ($test = true){
echo "the value is truthy.";
}else{
    echo "the value is falsy";
}

// var_dump and print_r

$isconnected = true;
$isoffline = false ;

var_dump($isconnected);
var_dump($isoffline);
print_r($isconnected);
print_r($isoffline);



?> 
</body>
</html