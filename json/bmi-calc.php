<?php
$height=$_REQUEST["hgt"];
$weight=$_REQUEST["wgt"]; 
$hgtMs= $height/100;  // convert cms in mts
$bmi= $weight/($hgtMs*$hgtMs); // weight/ mts squre means mts*mts
if( $bmi < 18.5){
	$message = "Your BMI is Under Weight";
}
else if($bmi >=18.5 && $bmi <= 24.9){
	$message = "Your BMI is Normal Weight";
}
else if($bmi > 24.9 && $bmi <= 29.9){
	$message = "Your BMI is Over Weight";
}
else  {
	$message = "Your BMI is Obese Weight";
}
$output = array(
"BMI"=>$bmi,"Message"=>$message	
);
echo JSON_encode($output);
?>
