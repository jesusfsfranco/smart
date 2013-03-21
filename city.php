<html>
<title>Cities of the World
</title>
<body>


<?php
include("navigation.php");


//La funcion empty es una detección de error. Si no es error se ejecutara todo el codigo.
if(!empty($_GET["ID"])){

$ciudad = $_GET["ID"];

$con=mysqli_connect("localhost","root","123","world");

//Esto es P3 si no hay error se ejecutara todo el codigo.
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  
$result = mysqli_query($con,"SELECT ID, CountryCode, Name, District, Population FROM city WHERE ID=$ciudad"); 
$fila = $result->fetch_assoc();
$form_CountryCode = $fila['CountryCode'];
$form_Name = $fila['Name'];
$form_District = $fila['District'];
$form_Pop = $fila['Population'];  



$result2 = mysqli_query($con,"SELECT Name FROM country WHERE Code='$form_CountryCode'"); 
$fila2 = $result2->fetch_assoc();
$form_Country = $fila2['Name'];

mysqli_close($con );


function displayWiki($form_Name, $form_CountryCode,$form_Pop,$form_District,$form_Country ){

echo "<h1>Nombre de la ciudad: $form_Name</h1>"; 
echo "<p><a href=country.php?Code=$form_CountryCode>LINK</a></p>";
echo "<p>Population: $form_Pop</p>";
echo "<p>District: $form_District </p>";
echo "<p><a href=http://en.wikipedia.org/wiki/$form_Country>WIKIPEDIA</a></p>";

}

displayWiki($form_Name, $form_CountryCode,$form_Pop,$form_District,$form_Country );

}}else{ echo "<h1>ERROR EN EL PASO DE DATOS</h1><br /><a href='city.php?ID=1'>VER LA PRIMERA CIUDAD</a>";}





?>



</body>



</html>





