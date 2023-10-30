<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// ...Quetion one 
echo "<b>Quetion 1 <br></b><br>";
$octalNumber = '123'; // Replace with your desired octal number

$decimalNumber = intval($octalNumber, 8);
$binaryNumber = decbin($decimalNumber);
$hexadecimalNumber = dechex($decimalNumber);

echo "Octal: " . $octalNumber . "\n";
echo "Decimal: " . $decimalNumber . "\n";
echo "Binary: " . $binaryNumber . "\n";
echo "Hexadecimal: " . $hexadecimalNumber . "\n";
// ....Quetion two
echo "<br><br><b>Quetion 2 : part 1 - 4</b>:::";
$values = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
$total = 0 ;
foreach ($values as $value) {
    if($value % 2 === 0){
        $total += $value;
    }
}
echo "Total Even number is :".$total."<br>";

echo "<b>Quetion 2: part 5 :::<br></b>";
$values =[5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, ];
$Total = 0;
foreach( $values as $value) {
    if($value % 3 !== 0){
   $Total += $value;
}
}
echo "Total number odd is ".$Total."<br>";

// ...Quetion 3 part 6
echo "<b> Quetion 2  minimum and positions part 6:<br></b>";
$values = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, ];
$minvalue = $values[0];
$positions = [];
//.... Find the minimum element and its positions
foreach( $values as $index => $value) {
    if($value < $minvalue) {
        $minvalue = $value;
        $positions[] = $index;
    }elseif($value = $minvalue){
        $positions[] = $index;
    }
}
//.... Print the minimum element and its positions
echo "".$minvalue."\n";
echo " ".implode(",",$positions)." <br>";
// ....print maximum  and positions
echo "<b> Quetion 2  maximun number and positions part 7:<br></b>";
$values = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, ];
$maxvalue = $values[0];
$positions = [];
//.... Find the minimum element and its positions
foreach( $values as $index => $value) {
    if($value > $maxvalue) {
        $maxvalue = $value;
        $positions[] = $index;
    }elseif($value = $maxvalue){
        $positions[] = $index;
    }
}
//.... Print the minimum element and its positions
echo "".$maxvalue."\n";
echo " ".implode(",",$positions)."\n";

//...... Declare the associative array
echo "<pre>";
$array = [
    'CA201' => [
        'Name' => 'Abdulkadir Ahmed ',
        'Phone' => '1234567890',
        'Address' => '123 Califonia'
    ],
    'CA205' => [
        'Name' => 'shire',
        'Phone' => '9876543210',
        'Address' => '456 Maka-almukarama'
    ],
    'CA206' => [
        'Name' => 'Abdulkadir Aash',
        'Phone' => '5555555555',
        'Address' => '789  New york Streat'
    ]
];

// Print array elements in table format
echo "-----------------------------------------------------\n";
echo "|     |    Name       |   Phone       |   Address     |\n";
echo "-----------------------------------------------------\n";

foreach ($array as $row => $data) {
    printf("| %6s | %12s | %12s | %14s |\n", $row, $data['Name'], $data['Phone'], $data['Address']);
}

echo "-------------------------------------------------------\n";
echo "</pre>";
?>
</body>
</html>