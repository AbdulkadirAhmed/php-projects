<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chapter Three Assiments </h1>
    

<?php
// Define the number
$number = 7;

// Check if the number is even or odd

echo("<b>1:</> Write a program that prints whether the number is even (divisible by 2) or odd::<br><br>");
if ($number % 2 == 0) {
    echo $number .' is even.';
} else {
    echo $number .' is odd.';
}


echo(" <br><br> 2: Write a program that prints even numbers from 35 to 7 using for statement:: <br><br>
");
//  ..for loop
for($i = 35; $i >= 7; $i --){
    if($i % 2 == 0){
        echo $i . "";
    }
};
echo("<br> <br>3 : Write a program that prints numbers divisible by 3 and 6 at the same time from 1 to 50 using 
do…while statement:: <br><br>");
$num = 1;
do{
    if($num % 3 == 0 && $num % 6 == 0 ){
        echo $num . "";
    } $num ++;
}while($num <=50);
echo("<br><br> 4 :Write a program to find all factors of a positive integer number (for example, factors of 42 are: 1, 
2, 3, 6, 7, 14, 21 and 42) using do…while statement:: <br><br>
");
$numm = 42;
$i = 1;
do{
    if($numm % $i == 0){
        echo $i . ",";

    }$i ++;
}while($i <= 42);
echo(" <br ><br> 5 :Write a program that calculates lowest common multiplier (LCM) of two positive integer numbers 
(for example, LCM of 8 and 12 = 24) using for statement<br><br>");

function calculateLCM($num1, $num2) {
  $max = max($num1, $num2);
  $lcm = $max;

  for ($i = $max; ; $i += $max) {
    if ($i % $num1 == 0 && $i % $num2 == 0) {
      $lcm = $i;
      break;
    }
  }

  return $lcm;
}

$num1 = 8;
$num2 = 12;

$LCM = calculateLCM($num1, $num2);
echo "LCM of $num1 and $num2 is: $LCM";
echo("<br><br> 6:Write a program that prints whether the number is a prime (whole number greater than 1 which is 
exactly divisible by itself and 1 but no other number) or non-prime using while statement.<br><br>
");

function isPrime($number) {
  if ($number <= 1) {
    return false;
  }

  $divisor = 2;

  while ($divisor < $number) {
    if ($number % $divisor == 0) {
      return false;
    }
    $divisor++;
  }

  return true;
}

$number = 17;

if (isPrime($number)) {
  echo "$number is a prime number.";
} else {
  echo "$number is a non-prime number.";
};
echo("<br><br> 7 :Write a program that prints prime numbers from 100 to 2 using for and do…while statements.<br><br>");

echo "Prime numbers from 100 to 2 (using for loop):\n";

for ($number = 100; $number >= 2; $number--) {
  $isPrime = true;

  for ($divisor = 2; $divisor < $number; $divisor++) {
    if ($number % $divisor == 0) {
      $isPrime = false;
      break;
    }
  }

  if ($isPrime) {
    echo $number . " ,";
  }
};
echo("<br><br> 8:Write a program that solves Quadratic Equations (print the value(s) of X or tell that it has 
imaginary solutions) using the formula:<br><br>");

function solveQuadraticEquation($a, $b, $c) {
  // Calculate the discriminant
  $discriminant = ($b * $b) - (4 * $a * $c);

  // Check the value of the discriminant
  if ($discriminant > 0) {
    // Two real and distinct solutions
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo "The equation has two real and distinct solutions:\n";
    echo "x1 = $x1\n   ,  ";
    echo "x2 = $x2\n";
  } elseif ($discriminant == 0) {
    // One real solution (repeated)
    $x = -$b / (2 * $a);
    echo "The equation has one real solution:\n";
    echo "x = $x\n";
  } else {
    // Imaginary solutions
    $realPart = -$b / (2 * $a);
    $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
    echo "The equation has imaginary solutions:\n";
    echo "x1 = $realPart + $imaginaryPart i\n";
    echo "x2 = $realPart - $imaginaryPart i\n";
  }
}

// Example usage
$a = 2;
$b = -5;
$c = -3;

solveQuadraticEquation($a, $b, $c);

?>





    
    
</body>
</html>