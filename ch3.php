<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter Three</title>
</head>
<body>
    <h1>Chapter Three Practice </h1>
    <?php
    // echo("hello World")
    // .. if single selection
//     $marks =50;
//     if ($marks >=50)
//     echo("<br> you have optained  58 to pass");
// // .. if single double selection 
//     if ($marks >=50)
//     echo("<br> you have optained  58 to pass");
// else
// echo("<br> you have optained $marks and it not passed ");
// "<br>";
// // ...if .... elseif .. else multiple select
// $score = 85;

// if ($score >= 90) {
//     echo "Excellent!";
// } elseif ($score >= 80) {
//     echo "Good job!";
// } elseif ($score >= 70) {
//     echo "Fair.";
// } else {
//     echo "Needs improvement.";
// }
// // switch statements that  we ned
// $day = "Monday";

// switch ($day) {
//     case "Monday":
//         echo "<br>Today is Monday.";
//         break;
//     case "Tuesday":
//         echo "<br>Today is c.";
//         break;
//     case "Wednesday":
//         echo "<br>Today is Wednesday.";
//         break;
//     case "Thursday":
//         echo "<br>Today is Thursday.";
//         break;
//     case "Friday":
//         echo "<br>Today is Friday.";
//         break;
//     default:
//         echo "<br>Today is a weekend day.";
//         break;
// }
// ..... switch 
// $day = "Monday";
// switch ($day){
//     case "monday":
//     echo("<br> Today Is Monday");
//     break;
// case "Teusday":
// echo("<br> Today is Teusday ");
// case "Wedesday";
// echo("<br>  Today Is Wedesday ");
// case "Thursday":

// }
// ... Switch Statements
// $day = "Monday";

// switch ($day) {
//     case "monday":
//         echo "Today is Monday.";
//         break;
//     case "Tuesday":
//         echo "Today is Tuesday.";
//         break;
//     case "Wednesday":
//         echo "Today is Wednesday.";
//         break;
//     case "Thursday":
//         echo "Today is Thursday.";
//         break;
//     case "Friday":
//         echo "Today is Friday.";
//         break;
//     default:
//         echo "It's the weekend!";
// }




// .....switch students grade
// $score = 100;
// $grade = '';
// switch($grade){
//     case($score >= 90 && $score <100):
//         $grade = 'A';
//         break;
//         case($score >= 80 && $score < 90 ):
//             $grade = 'B';
//             break;
//             case($score >=70 && $score <80):
//                 $grade = 'C';
//                 break;
//                 case ($score >= 60 && $score < 70 ):
//                     $grade = 'D';
//                     break;
//                     case ($score >= 50 && $score < 60):
//                         $grade = 'E';
//                         break;
//                         default:
//                         $grade = 'F';



// }
// echo("Students's Score is :$score<br>");
// echo("Students's grade  is :$grade<br>")

//...Loops in php 

$numbers = [1,2,3,4,5,6,7,8,9,10];

for($i =0; $i <=10; $i ++){
    echo("For Loop ..................: $i <br>");
}
// ...while loop 
$coun = 0;
while($coun <= 10){
    echo("While loop...................: $coun <br>");
    $coun ++;
}
// ... foreach loop
foreach($numbers as $number ){
    echo("Foreach loop .............:$number <br>");
}
// ... Do while loop
$count = 1;
do{
    echo("Do While Loop.................:$count<br>");
    $count ++;
}while($count <= 10);
// ....  nested loop
for($i = 1; $i <= 3; $i ++){
    for($j = 1; $j <= 3; $j ++){
        echo("outer loop :$i,Inter loop:$j <br>");
    }

}
// ...tables row and colum 
$numRow = 3;
$numCol = 4;
echo "table border = '1'";
// generate row and colum 
for($row =1; $row <= $numRow; $row ++){
    echo "br";
    for($col = 1; $col <= $numCol;$row ++){
        echo "<td> Row $row ,column $col</td>";

    }
    echo "<tr>";
}
echo "</table>";












    ?>
    
</body>
</html>