<html>
<title>Mysql and PHP</title>
<header><h1>"Cities of the World"</h1></header>
<body>

<?php
//13
include("navigation.php");

$con=mysqli_connect("localhost","root","123","world");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$results = mysqli_query($con,"SELECT ID, CountryCode, Name, District, Population FROM city"); 



	while($row = $results->fetch_assoc()){
	$variablepasante = $row["CountryCode"];
		$identificador = $row["ID"];
		echo $row["ID"],"-", 
		$row["Name"],"-", 
		"<a href=cities.php?id=$identificador >ENLACE</a>",
		$row["CountryCode"],'</a>',
		"-",$row["District"],"-",
		$row["Population"],"<br/>\n";
		
		
		
		
		
		
		
	//	echo "<a href =#$row[ID]> </a>";
	//echo "<a href= http://localhost/PHP/1marzo7.php/#$row[ID]> Examples</a>";
	}
	
var_dump ($fila);


?>

</body>
</html>