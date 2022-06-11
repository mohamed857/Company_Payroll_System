<html>
    <head>
        <link rel="stylesheet" href="smalk.css">
       <?php
       		require "pdo.php";
       			
       		if (isset($_POST['edit'])) {
				$oid 	 = $_POST['oid'];
				$nid	 = $_POST['nid'];
				$name	 = $_POST['name'];
				$address = $_POST['address'];
				$rank 	 = $_POST['rank'];
				$hours 	 = $_POST['hours'];
				$over 	 = $_POST['over'];

				$stmt = $pdo->prepare("UPDATE emp 
									  SET id      = '$nid',
									  	  name    = '$name',
									  	  address = '$address',
									  	  rank    = '$rank',
									  	  hours   = '$hours',
									  	  over 	  = '$over'
									  WHERE id    = '$oid'");
				$stmt->execute();

				}

       ?>
    </head>
<body>
	<form method="post">
	<fieldset>
		<legend>Change Data</legend>
		<table>
			
			<tr><th for="id">OLD ID</th><td><input type="number"  name="oid"></td></tr>	
			<tr><th  for="oid">The New ID</td><td><input type="number" name="nid"></td></tr>
			<tr><th  for="oid">The New Name</td><td><input type="text" name="name"></td></tr>
			<tr><th  for="address">NEW address</td><td><input type="text" name="address"></td></tr>
			<tr><th for="rank">NEW Rank</th><td><input type="Number" name="rank"></td></tr>
			<tr><th for="no of hours">the NEW Number Of Hours</th><td><input type="Number" name="hours"></td></tr>
			<tr><th for="overtime">NEW Over Time</th><td><input type="Number" name="over"></td></tr>
			<tr ><input type="submit" value="Edit" name="edit" ></tr>
			
		</table>
	</fieldset>
</form>
</body>
    </html>