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
file_put_contents("health-data",implode('',file("data.txt",FILE_SKIP_EMPTY_LINES)));
$dataFile=fopen("health-data.txt", "r") or die("Unable to open file.");
echo "<h1>Here is your health information for the week:</h1> <br>";

 while(!feof($dataFile))
 {
	 $fileContents[]=fgetcsv($dataFile);
 }
foreach($fileContents as $line)
{
echo "<h3><div>$line[4]:</div></h3>You drank $line[3] cups of water which means, $line[5]";
echo "<br>";
echo "You ate $line[6] servings of fuits which means, $line[7]";
echo "<br>";
echo "You ate $line[8] servings of vegetables which means, $line[9]";
echo "<br>";
		
}
fclose($dataFile);

?>


</body>
</html>