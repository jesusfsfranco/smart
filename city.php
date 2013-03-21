<html>
<title>Cities of the World
</title>
<body>


<?php
include("navigation.php");

if(!empty($_GET["ID"])){

$ciudad = $_GET["ID"];

$con=mysqli_connect("localhost","root","123","world");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
$result = mysqli_query($con,"SELECT ID, CountryCode, Name, District, Population FROM city WHERE ID=$ciudad"); 
$fila = $result->fetch_assoc();
$form_CountryCode = $fila['CountryCode'];
$form_Name = $fila['Name'];
$form_District = $fila['District'];
$form_Pop = $fila['Population'];  

$result2 = mysqli_query($con,"SELECT Name FROM country WHERE Code='$form_CountryCode'"); 
$fila2 = $result2->fetch_assoc();
$form_Country = $fila2['Name'];

function displayWiki($form_Name, $form_CountryCode,$form_Pop,$form_District,$form_Country){

echo "<h1>Nombre de la ciudad: $form_Name</h1>"; echo "<br />";
echo "<p><a href=country.php?Code=$form_CountryCode>LINK</a></p>";echo "<br />";
echo "<p>Population: $form_Pop</p>";echo "<br />";
echo "<p>District: $form_District </p>";echo "<br />";
echo "<p><a href=http://en.wikipedia.org/wiki/$form_Country>WIKIPEDIA</a></p>";echo "<br />";

}

displayWiki($form_Name, $form_CountryCode,$form_Pop,$form_District,$form_Country);

}else{ echo "<h1>ERROR EN EL PASO DE DATOS</h1><br /><a href='city.php?ID=1'>VER LA PRIMERA CIUDAD</a>";}



?>



</body>



</html>





