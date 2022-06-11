<html>
    <head>
        <link rel="stylesheet" href="smalk.css">
    </head>
<body>
	<form method="post">
	<fieldset>
		<legend>the average</legend>

			<?php
			require 'pdo.php';
			$stmt2 = $pdo->prepare("SELECT SUM(rank*(hours+over)),COUNT(*) FROM emp");
			$stmt2->execute();
			echo "<table border='1'>";
			while($row = $stmt2->fetch())
			{
				// echo $row['COUNT(*)'];
				// echo $row['SUM(rank*(hours+over))'];
				echo "<tr>";
				echo "<th>The Number of Employees Is</th>";
				echo "<th>".$row['COUNT(*)']." Employees</th>";
				echo "</tr>";

				echo "<tr>";
				echo "<th>The total payment Is</th>";
				echo "<th>".$row['SUM(rank*(hours+over))']." $ daily</th>";
				echo "</tr>";

				echo "<tr>";
				echo "<th>The Average Is</th>";
				echo "<th>".$row['SUM(rank*(hours+over))'] / $row['COUNT(*)']." $</th>";
				echo "</tr>";
			}
			echo "</table>";
			?>
	</fieldset>
</form>
</body>
    </html>