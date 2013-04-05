<?php
	session_start();
	
	
$con=mysqli_connect("localhost","root","123","world");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$result = mysqli_query($con,"SELECT customerEmail, passwd FROM customers"); 
$fila = $result->fetch_assoc();
$customerEmail = $fila['customerEmail'];
$passwd = $fila['passwd'];
	
	if(isset($_POST["access_requested"])&& $_POST["access_requested"]=="Yes"){
		if($_POST["uname"]==$customerEmail && $_POST["pword"]==$passwd){
			$_SESSION["Approved"]="Yes";
		}
		else{
			echo "<p> Incorrect Username and/or Password,please try again</p>";
			$_SESSION["Approved"]="No";
		}
	}
	
	if(isset($_SESSION["Approved"]) && $_SESSION["Approved"]=="Yes"){
		echo "<!-- Comentario no visible -->";
		
	}
	else{
		$req_URL = $_SERVER["REQUEST_URI"];
	
print <<<GROUP1
<form action='$req_URL' method="POST">
<p>Username: <input type="text" name="uname"></p>
<p>Password: <input type="password" name="pword"></p>
<input type="hidden" name="access_requested" value="Yes">
<p><input type="submit" value="Login"></p>
</form>
GROUP1;
	exit;
	}
?>