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
echo "FUNKCIJOS";
echo '<br>'; echo '<br>';
echo '1 uzdavinys';
//Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
function htag($tekstas){
    return "<h1> $tekstas</h1>";
    }
    echo htag('FUNKCIJOS PHP');
 
echo '<br>'; echo '<br>';
echo '2 uzdavinys';
echo '<br>'; echo '<br>';
//Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
function htag2($tekstas,$skaicius){
    return "<h$skaicius> $tekstas</h$skaicius>";
    }
echo htag2('FUNKCIJOS PHP',rand(1,6));
echo '<br>'; echo '<br>';
echo '3 uzdavinys';
echo '<br>'; echo '<br>';
//Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
$string = md5(time());
echo $string;


$resoult = preg_replace_callback('/[0-9]+/i', 
    function ($rado){
        echo '<h1>'.$rado[0] .'</h1>';
},$string);

echo $resoult;

echo '<br>'; echo '<br>';
echo '4 uzdavinys';
echo '<br>'; echo '<br>';
//Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

function sveikas($skaicius)
{
    $skaiciai = 0;
    for ($i = 2; $i <= $skaicius; $i++) {
        if ($skaicius % $i == 0) {
            $skaiciai++;
        }
    }
    return $skaiciai;
}
$dalinasiis = rand(1, 999);
$uzduotis4 = sveikas($dalinasiis);
echo "$dalinasiis dalinasi is $uzduotis4 skaiciu";
echo '<br>'; echo '<br>';
echo '5 uzdavinys';
echo '<br>'; echo '<br>';
//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.


$random_number_array = range(0 , 100);
foreach($random_number_array as &$val){
    $val = rand(33, 77);
};

unset($val);
echo '<pre>';
print_r($random_number_array);

usort($random_number_array, fn($a, $b) => sveikas($b) - sveikas($a));
         
echo '<pre>';
print_r($random_number_array);
echo '<br>'; echo '<br>';
echo '6 uzdavinys';
echo '<br>'; echo '<br>';
//Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
$rnd = [];

for ($i=0; $i<100; $i++){
    $rnd[$i] = rand(333, 777);
    if (sveikas($rnd[$i]) == 0){
    unset($rnd[$i]);
    }
}
print_r($rnd);

echo '<br>'; echo '<br>';
echo '7 uzdavinys';
echo '<br>'; echo '<br>';
//Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;




// $atsitiktinis = range(10 , 20);
// foreach($atsitiktinis as &$val){
//     $val = rand(0, 10);
// };

// unset($val);
// print_r($atsitiktinis);

$rand = rand(10, 30); 
function generateArray($rand) {
    $num = rand(10, 20);
    for ($i = 0; $i < $num; $i++) {
        if ($i < $num - 1) {
            $array2[$i] = rand(10, 20);
        } else {
            if ($rand > 0) {
                $array2[$i] = generateArray($rand - 1);
            } else {
                $array2[$i] = 0;
            }
        }
    }
    return $array2;
}
echo '<pre>';
print_r(generateArray($rand));
?>
</body>
</html>