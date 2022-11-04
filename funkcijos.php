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


function h1 ($m) {
    return "<h1>$m[0]</h1>";
}

$rez = preg_replace_callback('/\d+/', 'h1', $string); // [0-9]+ is stringo paima visus skaicius ir ideda i masyvus po viena elementa

print_r($rez)
?>
</body>
</html>