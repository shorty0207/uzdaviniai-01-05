<?php

//1. Hurdle Jump

//$hurdles = masyvas su 5 skaičiais - rand(1, 10);
//$jump_height = rand(5, 12);
//---> function function_name ($array, $number)
//Funkcija turi patikrinti ar šuolio aukštis yra didesnis, nei kliūtys masyve.
//Jei šuolis didesnis, grąžiname true, kitu atveju false.


//$hurdles = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];
//$jump_height = rand(5, 12);
//
//function check($array, $height) {
//    foreach ($array as $hurdle){
//        if ($height > $hurdle){
//            echo 'true';
//            echo '<br>';
//        }else {
//            echo 'false';
//            echo '<br>';
//        }
//    }
//}
//
//var_dump($hurdles);
//var_dump($jump_height);
//check($hurdles, $jump_height);

//2. LARGEST SWAP

//$two_digit_num = rand(11, 99);
//---> function function_name ($number)
//Su funkcija patikrinkite iškritusio skaičiaus atvirkštinę reikšmę, ir jei ji didesnė - grąžins true.
//
//Pvz. jei skaičius 27, jo atvirkštinė reikšmė yra 72 → true.
//Jei iškrito lygus skaičius, pvz., 11 - taip pat grąžiname true.

//$two_digit_num = rand(11, 99);
//
//var_dump($two_digit_num);
//
//function checkNumber($num) {
//   if ($num[1] >= $num[0]) {
//       echo 'true';
//   } else {
//       echo 'false';
//   }
//}
//
//checkNumber ((string)$two_digit_num);

//3. SORT ARRAY (USING REFERENCE)

//$array = [80, 29, 4, -95, -24, 85, 1, 2, 10, 50, 5];
////---> function function_name (&$array)
////Funkcija išrikiuos masyvo skaičius nuo mažiausio iki didžiausio.
////Po funkcijos iškvietimo originalus masyvas turi būti pasikeitęs, t.y. išrikiuotas.
//
//
//function sortArray(&$array)
//{
//    sort($array);
//}
//var_dump($array);
//
//sortArray($array);
//
//var_dump($array);

//4. Eliminate odd numbers (using reference)


//$array = 6 x random skaičiai(1, 3000);
//---> function function_name (&$array)
//Funkcija iš masyvo pašalins visus nelyginius skaičius.
//Po funkcijos iškvietimo originalus masyvas turi būti pasikeitęs (jame turi būti tik lyginiai skaičiai).

//function generateArray($times, $num1, $num2) {
//    $newArray = [];
//    for ($x = 0; $x < $times; $x++) {
//        $rand_num = rand($num1, $num2);
//        $newArray[$x] = $rand_num;
//    }
//
//    return $newArray;
//}
//
//$numbers = generateArray(6,1,3000);
//
//function eliminate_odd_numbers(&$newArray) {
//    foreach ($newArray as $key => &$number){
//        if ($number % 2 !== 0) {
//            array_splice($newArray, $key, 1);
//        }
//    }
//}
//var_dump($numbers);
//eliminate_odd_numbers($numbers);
//var_dump($numbers);


//5. Palindromes only (using reference)
//

////---> function function_name (&$array);
////Funkcija grąžins masyvą, tik su tais skaičiais, kurių atvirkštinė reikšmė yra tokia pati kaip originalaus skaičiaus.
////838 -> 838 ir t.t.
////Po funkcijos iškvietimo originalus masyvas turi būti pasikeitęs, t.y. tik su palindromais.
//$numbers_array = [838, 121, 344, 555, 768, 878, 987, 345, 565];
//
//
//function searchForPalindromes($array) {
//    $newArray = [];
//    foreach ($array as &$value) {
//        if ($value == strrev($value)) {
//            $newArray[] += $value;
//            unset($value, $array);
//        }
//    }
//    var_dump($newArray);
//}
//
//searchForPalindromes ($numbers_array);
//
//var_dump($numbers_array);

//6. Alternating caps (using reference)

//---> function function_name (&$string);
//pvz. 'mano batai buvo trys viens pasislepe gaidys' ->
//'MaNo BaTaI bUvO tRyS vIeNs PaSiSlEpE gAiDyS'
//
//Pirma stringo raidė turi būti didžioji, tada mažoji ir t.t., o tarpai nesiskaičiuoja, todėl padavus bet kokį sakinį raidės turi būti kapitalizuotos kaip pavyzdyje.
//Kitų simbolių nenaudojame.

//$my_string = 'viens du trys mano kambarys liudi be taves viens du trys';
//
//function string_letters_convert(&$string) {
//    for ($x = 1; $x < strlen($string); $x++) {
//        echo ucfirst($string[$x-1]) . lcfirst($string[$x++]);
//    }
//}
//
//string_letters_convert($my_string);

//7.Sort descending (using reference)


////---> function function_name (&$integer);
////Funkcija iškritusius 8 skaičius išrikiuos pagal skaitmenis nuo didžiausio iki mažiausio.
////Pvz. 864390 -> 987430
////Po funkcijos iškvietimo, skaičius turi būti pasikeitęs - t.y. išrikiuotas integeris.

$high_num = rand(10000, 10000000);

function get_number(&$integer)
{
    var_dump($integer);
    $newArray = [];
    $string = strval($integer);
    $newArray[] = str_split($integer);
    foreach ($newArray as $item) {
        $another_array = [];
        sort($item);
        $another_array[] = $item;
        foreach ($another_array as $array) {
            $newString = implode('', $array);
            $answer = intval($newString);
            var_dump($answer);
        }
    }
}

get_number($high_num);

//8. SUM OF MISSING NUMBERS

//1st example - $numbers = [1, 3, 5, 7, 10];
//2nd example - $numbers2 = [10, 20, 30, 40, 50, 60];
//---> function function_name ($array);
//Parašykite funkciją, kuri sudės visus trūkstamus skaičius ir grąžins jų sumą.
//Pvz. $numbers masyvo trūkstami skaičiai yra 2, 3, 6, 8 ir 9.
