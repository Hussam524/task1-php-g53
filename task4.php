<?php

$is_user_logged_in = true ;
$role_of_user = 'admin';

if($is_user_logged_in == true){
echo '<button> log out </button>';
}
else{
echo '<button>log in </button>';
}


// by using ternary operator
$status = $is_user_logged_in == true ? ($role_of_user == 'admin' ? '<button>log out</button><button>dashboard</button>': '<botton>log out</button>') : '<button> log in </button>';
echo "$status";

// null coalising
$path = '/about';
$p = $path ?? '/';
echo $p ;
// falsy values 
$path = '0';
$p = $path ?: '/';
echo $p ;

// increment and decrement
$x = 50 ;
// echo $x++;  //post increment
echo $x;
echo ++$x;  //pre increment
echo $x;
echo $x--;  //post decrement
echo $x;
echo --$x;  //pre deccrement
echo $x;
$y = null;
echo ++$y ; 
echo $y;
$name = 'hussam';
echo $name++;
echo $name;

logical operators 

$x = true ;
$y = false;
$z = true;
var_dump($x && $y || $z && $y);
var_dump($x xor $y);
var_dump(  9 | 5); //bitweise operator for or
var_dump(  9 & 5); //bitweise operator for and
var_dump(  9 ^ 5); //bitweise operator for xor
var_dump(9 >> 5) ; // shift right operator 
var_dump(9 << 5) ; // shift lefts operator 

operators in array
$z = [0=>'a',1=>'b',2=>'c'];
$j = [3=>'d',4=>'e',5=>'h'];
var_dump($z + $j);
$x =[0=>'a',1=>'b'];
$y =[0=>'a',1=>'b'];
var_dump($x==$y);

if conditions

$student_degree = 95; 

if($student_degree  >= 90){
echo 'student degree is A+';
}elseif ($student_degree  <90 && $student_degree >= 80) {
echo 'student degree is b+';
} elseif ($student_degree  < 80 && $student_degree >= 70) {
echo 'student degree is c+';
} else{
echo 'f';
}

while condition

$x = 0;
while ($x <= 10) {
    echo "$x <br>";
    $x++;
}
do while condition

$x = 0;
do {
    echo "$x <br>"; 
    $x += 5;
} while ($x <= 100);

for condition

for($i=0; $i <=6; $i++){
    echo $i ."<br>" ;
}


 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>