
<html>

<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Ruletka</title>
			<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<?php																//instrukcje warunkowe, zrzutuje się do boola

/*
$x = 10;

if($x == 10) {
	print("x jest liczbą i ma wartość 10");
	
}else if($x == 11){
	print('x jest liczbą 11');
}else{
	print ("x jest inna liczbą");
}
*/


/*	
$liczba = rand(1, 6); 											//random, piszemy rosyjską ruletke i potem wypisuje numer


$kulka = array(
		1=> "jeden",
		2=> "dwa",
		3=> "trzy",
		4=> "cztery",
		5=> "pięć",
		6=> "sześć",
		);

		print($kulka[$liczba]);
		
	
if($liczba == 1) {
	print( " BUM!");
} else {
	print(" klik...");
	*/

	
	/*
	if($liczba == 1 || $liczba == 5) {						// || oznacza or
	print( " BUM!");
} else {
	print(" klik...");
	
}
*/
//  /- dzielenie, %- modulo, reszta z dzielenia &&- and


/*
$rok = 2100;
$string ="Rok ".$rok." jest przestępny";

if((($rok % 4 == 0) && ($rok % 100 !== 0)) || ($rok % 400 == 0) ){
	print("<span style='color: red'>Rok ".$rok." jest przestępny</span>");
}else{
	print("< style='color: green'>Rok ".$rok." nie jest przestępny</span>");
}
*/
/*

$godzina =  date("H");														//warunek na pobranie godziny i ustawienie koloru tla wzgledem niej.
print("test");

if($godzina > 22  || $godzina < 6) {
	print("<body style='background-color: black; color: white;'></body>");
}else{
	print("<body style='background-color: white; color: black;'></body>");
}
*/

/*
$liczba1 = rand(1, 6); 											//random, pokazujacy obrazek z numerkiem kostki
$liczba2 = rand(1, 6); 											//random, pokazujacy obrazek z numerkiem kostki


$kulka = array(
		1=> "kostka_1.png",
		2=> "kostka_2.png",
		3=> "kostka_1.png,",
		4=> "kostka_1.png,",
		5=> "kostka_1.png,",
		6=> "kostka_1.png,",
		);

		
if($liczba1 != $liczba2){									//nie do konca dobrze bo wyrzuca wartosc kostki 7.
	print("<img src='kostka_". $liczba1.".png'/>");
	print("<img src='kostka_". $liczba2.".png'/>");
}else {
	$liczba1 = rand(1, 6);
	print("<img src='kostka_". $liczba1.".png'/>");
	print("<img src='kostka_". $liczba2.".png'/>");
}
	*/
	
	/*
$liczba1 = rand(1, 6); 										
$liczba2 = rand(1, 6); 		
$kostki = rand(1, 10);									


$kulka = array(
		1=> "kostka_1.png",
		2=> "kostka_2.png",
		3=> "kostka_1.png,",
		4=> "kostka_1.png,",
		5=> "kostka_1.png,",
		6=> "kostka_1.png,",
		);

while($kostki >0){
	$kostka = rand(1,6);
	print("<img src='kostka_". $liczba1.".png'/>");
	$kostka = -1;
}
		
while($liczba1 ==$liczba2){
	$liczba2 = rand(1,6);
}
*/


$ile_kostek = rand(1, 10);			
$kostka = rand(1,6);								//liczenie sumy i sredniej oczek
$suma = 0;

while($ile_kostek > 0){
	$kostka = rand(1,6);
	$suma +=$kostka;
	print("<img src='kostka_". $kostka.".png'/>");
	$ile_kostek-=1;
}

print("<img src='kostka_". $kostka.".png'/>");
print(" Suma oczek to: $suma");

?>
</body>
</html>