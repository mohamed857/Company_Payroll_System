<html>
    <head>
        <link rel="stylesheet" type="text/css" href="smalk.css">
    </head>

    <body>
        <form method="post">
            <table>
                <tr>
                    <th><label>His ID</label></th>
                    <td><input type="number"  name="id"></td>
                    <td><input type="submit" name="p" value="calculate"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    include_once "pdo.php";

    if(isset($_POST['p']))
    {
        $sql = "SELECT name, rank, hours, over  FROM  emp  WHERE id = ?";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(array($_POST['id']));

        $bool = false;
        while($row = $stmt -> fetch())
        {
            $bool = true;
            echo "<table border = 1>
            <tr><th>The payment of ". $row['name'] ." is </th><th>".($row['rank']*($row['hours']+$row['over']))." $</th></tr></table>";
        }

        if($bool == false)
            echo "<script>alert('This ID Not Found')</script>";
    }


?>