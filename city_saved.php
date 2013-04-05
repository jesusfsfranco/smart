<html>
<title>City_Edit</title>
<head></head>
<body>
<?php
include("navigation.php");


if(!empty($_GET["ID"])){

$ciudad = $_GET["ID"];

function recogerdatos(&$countryCodebis, &$cityNewbis, &$cityDistricbis, &$cityPopulationbis,&$cityId  ){
$countryCodebis = $_GET["countryCode"]; 
$cityNewbis = $_GET["cityNew"]; 
$cityDistricbis = $_GET["cityDistrict"]; 
$cityPopulationbis = $_GET["cityPopulation"]; 
$cityId = $_GET["id"]; 

}

function mostrar(){
echo $_GET["Name"];echo "<br />";
echo $_GET["Population"]; echo "<br />"; 
echo $_GET["District"]; echo "<br />"; 
echo $_GET["CountryCode"]; echo "<br />";
echo $_GET["ID"]; echo "<br />";
}

function update($countryCodebis, $cityNewbis, $cityDistricbis, $cityPopulationbis,$cityId ){

$con=mysqli_connect("localhost","root","123","world");

$result = mysqli_query($con,"update city set Name = '$cityNewbis'  ,
District= '$cityDistricbis' ,Population = $cityPopulationbis where ID = $cityId" );

echo "Objetivo logrado"; 
echo "<br />";
}




echo "Los datos recibidos son <br />";
mostrar();





  
  
  
  
  

}else{ echo "<h1>ERROR EN EL PASO DE DATOS</h1><br /><a href='city.php?ID=1'>VER LA PRIMERA CIUDAD</a>";}

  
  
  

?>





</body>
</html>