<!DOCTYPE html>
<html>
<head>
<title>Cronut Output</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<pre>
<?php
ini_set('display_errors', 1);
$name=$_POST['firstName'];
$water=$_POST['cups_of_water'];
$sex=$_POST['gender'];
$age=$_POST['age'];
$day=$_POST['days'];
$fruit=$_POST['fruit'];
$vegetables=$_POST['vegetables']; 
//var_dump($day);
//echo "$day";
require 'class.php';
$p1 = new subject();
$p1->setAge($age);
$p1->setSex($sex);
$p1->setWater($water);
$p1->setDay($day);
$p1->setFruit($fruit);
$p1->setVegetables($vegetables);
/*
$wv=$p1->getWater();
$av=$p1->getAge();
$sv=$p1->getSex();
$gf=$p1->getFruit();
$gv=$p1->getVegetables();
*/
$waterServings=$p1->getWaterServ();
$fruitServings=$p1->getFruitServ();
$vegServings=$p1->getVegServ();
echo "<h2>Thank you for your entry, $name. Here are your results:</h2>"; 
echo "<h3>$waterServings</h3><br>";
echo "<h3>$fruitServings</h3><br>";
echo "<h3>$vegServings</h3><br>";

$file=fopen("health-data.txt", "a") or die("File was not able to open.");//create and open the file
//$userData=$name.",".$sex.",".$age.",".$water."\n";
$userData=$name.",".$sex.",".$age.",".$water.",".$day.",".$waterServings.",".$fruit.",".$fruitServings.",".$vegetables.",".$vegServings."\n";
//fputs($file,implode('', file($userData, FILE_SKIP_EMPTY_LINES)));
fputs($file, $userData) or die("Data was not written to the file.");
fclose($file);
?>
<form action="health-form-backend.php" method="post">
<button type="submit" value="Submit" class="btn btn-success"><b>Click here to see your Data</b></button>
</form>
<form action="health-form.html" method="post">
<button type="submit" value="Submit" class="btn btn-info"><strong>Click here to go back to the form</strong></button></form>
</body>
</html>