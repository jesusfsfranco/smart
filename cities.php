<html>
<title>Cities of the Woooooooorld
</title>
<body>


<?php

$ciudad = $_GET["id"];

$con=mysqli_connect("localhost","root","123","world");
$result = mysqli_query($con,"select " );
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

//PUNTO  5 tengo que comprobar que reusltado es correcto






function displayWiki(){
echo "<h1></h1>";
echo "<p>Country Code: Country Code Link</p>(this link will open up the country
web page – country.php?Code=CountryCode - to display the details of the
country).";


echo "<p>Population: Size of the city population</p>";
echo "<p>District: Name of the District the city belongs to</p>";
echo "<p>Wikipedia Link</p>(this link will open up a Wikipedia web page -
http://en.wikipedia.org/wiki/Name of City)";
echo "7. Add to the script code that will empty (clean out) the result set.";
echo "8. Add to the script code that will disconnect from the MySQL server.";
echo "9. Close out and save the city.php file.";
echo "10. View the script using the following URL:";


}













?>



</body>



</html>