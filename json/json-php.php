<!DOCTYPE html>
<html>
<title>JSON With PHP</title>
<body>

<?php
$names = array("Rajesh", "Jitendra", "Satya", "Mitali", "Tarun");
$person = array("name"=>"Rajesh", "Age"=>28, "Married"=>true);
echo json_encode($person);
echo "<br>";
$newPerson='{"name":"Rajesh","Age":28,"Married":true}';
$nwPerson =json_decode($newPerson);
echo $nwPerson->name; 
// echo "hello world";
// echo $names[0];
// $encode =json_encode($names, JSON_FORCE_OBJECT); // Convert php array to json array format  and JSON_FORCE_OBJECT convert index into keywords	
?>
</body>
</html>