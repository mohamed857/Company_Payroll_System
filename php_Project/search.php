<html>
    <head>
        <link rel="stylesheet" type="text/css" href="smalk.css">
    </head>
    <body>
    	<form method="post">
            <table>
    		    <tr>
                    <th><label>His ID</label></th>
                    <td><input type="ID" maxlength="11" name="m"></td>
                    <td><input type="submit" name="hid" value="search By ID"></td>
                </tr>
                <tr>
                    <th><label>His Name</label></th>
                    <td><input type="text" name="n"></td>
                    <td><input type="submit" name="hname" value="search By Name"></td>
                </tr>
    	
            </table>
        </form>
<?php

    include_once "pdo.php";

    // Search By ID
    if(isset($_POST['hid']))
    {
        $sql = "SELECT id, name, address, rank, hours, over  FROM  emp  WHERE id = ?";
        $searchById = $pdo -> prepare($sql);
        $searchById -> execute(array($_POST['m']));

        $bool = false;
        while($row = $searchById -> fetch())
        {   
            $bool = true;
            echo "<table border = 1>
             <tr><th>ID</th><th>Name</th><th>address</th><th>rank</th><th>hours</th><th>over</th></tr>";
            echo("<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['rank']."</td><td>".$row['hours']."</td><td>".$row['over']."</td></tr></table>");
        }
        if($bool == false)
            echo "<script>alert('This ID Not Found')</script>"; 
    }

    // Search By Name
    if(isset($_POST['hname']))
    {
        $sql = "SELECT id, name, address, rank, hours, over  FROM  emp  WHERE name = ?";
        $searchByName = $pdo -> prepare($sql);
        $searchByName -> execute(array($_POST['n']));

        $bool = false;
        while($row = $searchByName -> fetch())
        {   
            $bool = true;
            echo "<table border = 1>
             <tr><th>ID</th><th>Name</th><th>address</th><th>rank</th><th>hours</th><th>over</th></tr>";
            echo("<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['rank']."</td><td>".$row['hours']."</td><td>".$row['over']."</td></tr></table>");
        }
        if($bool == false)
            echo "<script>alert('This Name Not Found')</script>"; 
    }            
?>
    </body>
</html>