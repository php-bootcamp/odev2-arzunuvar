<?php 


$sex = "female";
$weight = 60;
$height = 170;
$age = 30;


switch ($sex){
case 'female':
$calorie= (10 *  $weight) + (6.25 * $height) - (5 * $age) - 161;
echo "<p>Your estimated daily metabolic rate is $calorie </p>";
 
break;
case 'male':
$calorie= (10 * $weight) + (6.25 * $height) - (5 * $age) + 5;
echo "<p>Your estimated daily metabolic rate is $calorie </p>";

}

?>



