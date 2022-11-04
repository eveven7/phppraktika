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
	echo "1 užduotis <br>";
	//
	echo '<br>'; echo '<br>';

    $name= "Evelina";
    $surname= "Venckute";
    $born= "1996";
    $thisyear= "2022";
	$birth = $thisyear - $born;
	echo "Aš esu $name $surname. Man yra $birth metai(ų).";
	echo '<br>'; echo '<br>';

	echo "2 užduotis <br>";
	//
	echo '<br>'; echo '<br>';

	echo "Pirmoji reiksme " . $kint1 = rand(0,4) ;
	echo "<br>";
	echo "Antroji reiksme " .$kint2 = rand(0,4) ;
	echo "<br>";
	if ($kint1 == 0 || $kint2 == 0){
		echo 'Dalyba iš nulio negalima';
	}
	else if ($kint1 > $kint2){
		$divisionRezult = $kint1 / $kint2;
		echo round($divisionRezult, 2);
	}
	else {
		$divisionRezult = $kint2 / $kint1;
		echo round($divisionRezult, 2);
	}
	echo '<br>'; echo '<br>';

	echo "3 užduotis <br>";
	//
	echo '<br>'; echo '<br>';

	echo "Pirmoji reiksme " . $number3 = rand(0,25) . "<br>";
	echo "Antroji reiksme " . $number4 = rand(0,25) . "<br>";
	echo "Trecioji reiksme " . $number5 = rand(0,25) . "<br>";

	if (($number3 >= $number4 && $number3 <= $number5) || ($number3 <= $number4 && $number3 >= $number5)) {
		echo "Vidurine reiksme yra " . $number3;
	} elseif (($number4 >= $number3 && $number4 <= $number5) || ($number4 <= $number3 && $number4 >= $number5)) {
		echo $number4;
	} elseif (($number5 >= $number3 && $number5 <= $number4) || ($number5 <= $number3 && $number5 >= $number4)) {
		echo "Vidurine reiksme yra " . $number5;
	}
	echo '<br>'; echo '<br>';


	echo "4 užduotis <br>";
	//
	echo '<br>'; 
	$a = rand(1,10);
	$b = rand(1,10);
	$c = rand(1,10);
	echo "A reiksme " . $a  . "<br>";
	echo "B reiksme " . $b  . "<br>";
	echo "C reiksme " . $c  . "<br>";


	if ($a < ($b + $c)) {
		echo 'Trikampis sudaromas';
	} elseif ($b < ($a+ $c)) {
		echo 'Trikampis sudaromas';
	} elseif ($c < ($a + $b)) {
		echo 'Trikampis sudaromas';
	} else {
		echo 'Trikampis negalimas';
	}
	echo '<br>'; echo '<br>';

	echo "5 užduotis <br>";
	//
	echo '<br>'; echo '<br>';

	$reiksme1 = rand(0,2);
	$reiksme2 = rand(0,2);
	$reiksme3 = rand(0,2);
	$reiksme4 = rand(0,2);

	echo "Pirmoji reiksme " .$reiksme1 . "<br>";
	echo "Antroji reiksme " . $reiksme2. "<br>";
	echo "Trecioji reiksme " . $reiksme3. "<br>";
	echo "Ketvirtoji reiksme " . $reiksme4. "<br>";
	$nulis= 0;
	$vienas = 0;
	$dvejetas = 0;
	if ($reiksme1 ===0) {
		$nulis +=1;
	}
	if($reiksme2 === 0) {
		$nulis +=1;
	}
	if($reiksme3 === 0) {
		$nulis +=1;
	}
	if ($reiksme1 === 1) {
		$vienas +=1;
	}
	if($reiksme2 === 1) {
		$vienas +=1;
	}
	if($reiksme3 === 1) {
		$vienas +=1;
	}
	if ($reiksme1 === 2) {
		$dvejetas +=1;
	}
	if($reiksme2 === 2) {
		$dvejetas +=1;
	}
	if($reiksme3 === 2) {
		$dvejetas +=1;
	}
	
	echo '<br>';
	echo ("Nuliai = $nulis, vienetai = $vienas, dvejetai = $dvejetas" );
	echo '<br>'; echo '<br>';


	echo "6 užduotis <br>";
	//
	echo '<br>'; echo '<br>';

	echo "Atsitiktine reiksme " . $ran = rand(0,6) . "<br>";
	echo "<h3>$ran</h3>";
	//echo '<h1>' . $ran . '</h1>'; 
	echo '<br>'; echo '<br>';

	echo "7 užduotis <br>";
	//
	echo '<br>'; echo '<br>';
	$e = rand(-10,10);
	$f = rand(-10,10);
	$g = rand(-10,10) ;
	echo "Pirmoji reiksme " . $e . "<br>";
	echo "Antroji reiksme " . $f . "<br>";
	echo "Trecioji reiksme " . $g  . "<br>";

	if($e < 0) echo 'Pirmoji = <span style="color: green">'. $e .'</span>';
	else if ($e == 0) echo 'Pirmoji = <span style="color: red">'. $e .'</span>';
	else if ($e > 0) echo 'Pirmoji = <span style="color: blue">'. $e .'</span>';
	echo '<br>';
	if($f < 0) echo 'Antroji = <span style="color: green">'. $f .'</span>';
	else if ($f == 0) echo 'Antroji = <span style="color: red">'. $f .'</span>';
	else if ($f > 0) echo 'Antroji = <span style="color: blue">'. $f .'</span>';
	echo '<br>';
	if($g < 0) echo 'Trecioji = <span style="color: green">'. $g .'</span>';
	else if ($g == 0) echo 'Trecioji = <span style="color: red">'. $g .'</span>';
	else if ($g > 0) echo 'Trecioji = <span style="color: blue">'. $g .'</span>';
	echo '<br>';
	echo '<br>'; echo '<br>';

echo "8 užduotis <br>";
//
echo '<br>'; echo '<br>';

$oneUnitPrice = 1;
$amount = rand(5, 3000);

if ($amount > 1000 && $amount <= 2000) {
    $oneUnitPrice = $oneUnitPrice - ($oneUnitPrice * 0.03);
} elseif ($amount > 2000) {
    $oneUnitPrice = $oneUnitPrice - ($oneUnitPrice *  0.04);
} else {$oneUnitPrice = 1;}
echo "Nupirkta $amount zvakiu, vienos kaina $oneUnitPrice Eur";

echo '<br>'; echo '<br>';

echo "9 užduotis <br>";
//Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
echo '<br>'; echo '<br>';

$rnd1 = rand(0,100);
$rnd2 = rand(0,100);
$rnd3 = rand(0,100);
echo "Pirmoji reiksme " . $rnd1 . "<br>";
echo "Antroji reiksme " . $rnd2 . "<br>";
echo "Trecioji reiksme " . $rnd3  . "<br>";

	$vidurkis = ($rnd1+$rnd2+$rnd3)/3;
	


echo "Visu reiksmiu aritmetinis vidurkis: " . round($vidurkis,0);

	
$vid = 0;
$count = 0;
if($rnd1>10 && $rnd1<90){
    $vid += $rnd1;
    $count++;
}
if($rnd2>10 && $rnd2<90){
    $vid += $rnd2;
    $count++;
}
if($rnd3>10 && $rnd2<90){
    $vid += $rnd3;
    $count++;
}
$vid = $vid / $count;
echo "<p>Aritmetinis vidurkis atmetus tas reikšmes, 
kurios yra mažesnės nei 10 arba didesnės nei 90 skaičių " . $rnd1. " " . $rnd2. " " . $rnd3. ": " .  round($vid, 0)."</p>";
    
echo '<br>'; echo '<br>';

echo "10 užduotis <br>";
echo '<br>';
$hour = rand(0,23);
$second = rand(0,59);
$min = rand(0,59);
echo "Valandos " . $hour . "<br>";
echo "Sekundes " . $second . "<br>";
echo "Minutes " . $min . "<br>";

$laikrodis = "laikrodis: $hour val $min min $second sek";
echo "Papildomos sekeundes " . $adv = rand(0,300) . "<br>";

$currSecond = 0;
$addMinut = 0;
$currMinut = 0;
$addHours = 0;
$currHours = 0;

if($adv + $second < 60)
{
	$currSecond =  $adv + $second;
	echo " Dabar yra $hour valandos ir $min minutes ir $currSecond sekundes";
}
if () {
	
}



	?>
</body>
</html>