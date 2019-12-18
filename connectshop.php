<?php
//Jhamille Cumberbatch//
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "vuurwerkshop";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
	$result = $conn -> query("SELECT * from product");
while ($row = $result->fetch()) {  
        echo "<img src=".$row['URL_Afbeelding'] . ">"; 
		 echo $row['Naam'] . " €";
		 echo $row['Prijs'] . "<br>";
		 echo "bestel <br>";

}
?>