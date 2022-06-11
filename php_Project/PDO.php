<?php
try {
      $pdo = new PDO("mysql:host=localhost;dbname=company","root","");
	  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully<br>"; 
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>