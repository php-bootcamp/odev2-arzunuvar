<?php 

$sex = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$sex = "female";
$weight = 60;
$height = 170;
$age = 30;

switch ($sex){
case 'female':
$sex= (10 * 60 ) + (6.25 * 170) - (5 * 30) - 161;
echo "<p>Your estimated daily metabolic rate is $sex </p>";
echo "<p>This means that you need rouhgly $sex calories a day to maintain your current weight.</p>";
 
break;
case 'male':
$sex= (10 *55) + (6.25 * 170) - (5 * 25) + 5;
echo "<p>Your estimated daily metabolic rate is $sex </p>";
echo "<p>This means that you need rouhgly $sex calories a day to maintain your current weight.</p>";

}

?>



