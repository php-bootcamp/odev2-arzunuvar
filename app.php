<?php 

$sex = "female";
$weight = 60;
$height = 170;
$age = 30;

/**
 * Bu ödevde günlük kalori hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük kaç kalori alması gerektiğini hesaplayıp
 * bunu ekrana yazan PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 10 x kilo + 6.25 x boy - 5 x yaş + 5
 * Kadınlar için; 10 x kilo + 6.25 x boy - 5 x yaş - 161
 * 
 * Örneğin;
 * $sex = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana 1351.5 yazması gerekiyor.
 */ 


switch ($sex){
case 'female':
$calorie= (10 * $weight) + (6.25 * $height) - (5 * $age) - 161;
echo "<p>Your estimated daily metabolic rate is $calorie </p>";
 
break;
case 'male':
$calorie= (10 * $weight) + (6.25 * $height) - (5 * $age) + 5;
echo "<p>Your estimated daily metabolic rate is $calorie </p>";

}

?>



