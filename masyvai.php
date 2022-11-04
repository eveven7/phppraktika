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
echo "MASYVAI";
echo '<br>'; echo '<br>';
echo "1 UZDUOTIS";
echo '<br>'; echo '<br>';


// $random_number_array = range(5, 25);//20 items
// shuffle($random_number_array );
// $random_number_array = array_slice($random_number_array ,0,30);
// print_r($random_number_array);
//Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
$random_number_array = range(0 , 29);
foreach($random_number_array as &$val){
    $val = rand(5, 25);
};

unset($val);

print_r($random_number_array);

echo '<br>'; echo '<br>';
echo "2 UZDUOTIS";
echo '<br>'; echo '<br>';
echo "A UZDUOTIS";
echo '<br>'; echo '<br>';
//Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;


$didesniUz=0;
for($i =0 ; $i< count($random_number_array) ; $i++){
    if ($random_number_array[$i] > 10) {
        $didesniUz++;
    }
}
echo "Didesniu uz 10 yra : " .  $didesniUz;
echo '<br>'; echo '<br>';
echo "B UZDUOTIS";
//Raskite didžiausią masyvo reikšmę;

echo '<br>'; echo '<br>';

echo(max($random_number_array) . "<br>");
echo '<br>'; echo '<br>';
echo "C UZDUOTIS";
//Suskaičiuokite visų reikšmių sumą;
echo '<br>'; echo '<br>';
echo "sum of random_number_array = " . array_sum($random_number_array);
echo '<br>'; echo '<br>';
echo "D UZDUOTIS";
echo '<br>'; echo '<br>';
// d.Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;


$naujasMasyvas = [];
foreach ($random_number_array as $index => $val) {
    $naujasMasyvas[] = $val - $index;
 }
 print_r($naujasMasyvas);

 echo '<br>'; echo '<br>';
echo "E UZDUOTIS";
echo '<br>'; echo '<br>';
// e.Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

for($a = 0; $a < 10; $a++){
    $naujasMasyvas[] = rand(5, 25);
}
print_r($naujasMasyvas);

echo '<br>'; echo '<br>';
echo "F UZDUOTIS";
echo '<br>'; echo '<br>';

// f.Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

$masEqual = [];
$masOdd = [];

foreach($naujasMasyvas as $index => $val){
    if($index %2 == 0){
        $masEqual[] = $val;
    }else{
        $masOdd[] = $val;
    }
};
echo "Porinis masyvas " .'<br>';;

print_r($masEqual);
echo '<br>';
echo "Neporinis masyvas " .'<br>';;
print_r($masOdd);

echo '<br>'; echo '<br>';
echo "G UZDUOTIS";
echo '<br>'; echo '<br>';
// g.Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach($random_number_array as $index => &$val ){
    if($index %2 == 0 && $val > 15){
        $val = 0;
    }
}
unset($val);
print_r($random_number_array);
echo '<br>'; echo '<br>';
echo "H UZDUOTIS";
echo '<br>'; echo '<br>';
//Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

for ($i = 0; $i < count($random_number_array); $i++) {
    if ($random_number_array[$i] > 10) {
        echo " Pirmas (mažiausias) indeksas yra  " . $i;
        break;
    }
}
echo '<br>'; echo '<br>';
?>
</body>
</html>