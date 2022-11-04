<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "Stringai";
echo '<br>'; echo '<br>';
echo "1 UZDUOTIS";
echo '<br>'; echo '<br>';
$string1 = 'Leonardo';
$string2 = 'Dicaprione';
 
if ($string1 > $string2) {
    echo "Trumpesnis stringas: "  . $string1;
}
else {
    echo "Trumpesnis stringas: "  . $string2;
}

echo '<br>'; echo '<br>';
echo "2 UZDUOTIS";
echo '<br>'; echo '<br>';
$str = strtoupper($string1);
$str1 = strtolower($string2);
echo $str . " ";
echo $str1;
echo '<br>'; echo '<br>';
echo "3 UZDUOTIS";
echo '<br>'; echo '<br>';
$init1 = substr($string1, 0, 1);
echo $init1 . " ";
$init2 = substr($string2, 0, 1);
echo $init2 . " ";
echo '<br>'; echo '<br>';
echo "4 UZDUOTIS";
echo '<br>'; echo '<br>';
$kint1 = substr($string1, -3);
echo $kint1 . " ";
$kint2 = substr($string2, -3);
echo $kint2 . " ";
echo '<br>'; echo '<br>';
echo "5 UZDUOTIS";
echo '<br>'; echo '<br>';
$america = "An American in Paris";
$pattern = '/a/i';
echo preg_replace($pattern, '*', $america);
echo '<br>'; echo '<br>';

?>


    
</body>
</html>