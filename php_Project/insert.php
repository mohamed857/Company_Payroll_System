    <?php
        
    require_once "pdo.php";

    $arrId = [];
    $bool  = true;

    if(isset($_POST['addnew']))
    {
    if ( ($_POST['id']>='0') &&  ($_POST['name']!="") && ($_POST['address']!="") && ($_POST['rank']>0) &&  ($_POST['hours']>0) &&  ($_POST['over']>=0))
    {
        $stmt1 = $pdo->prepare("SELECT id from emp");
        $stmt1->execute();
        $i=0;
        while($row1 = $stmt1->fetch())
        {
            $arrId[$i++] = $row1['id'];
        }
        for($i=0;$i<count($arrId);$i++)
        {
            if($arrId[$i] == $_POST['id'])
                $bool = false;
        }


        if($bool == true)
        {
            $sql = "INSERT INTO emp (id,name, address, rank,hours,over) VALUES (:id,:name,:address, :rank,:hours, :over)";

            $stmt2 = $pdo->prepare($sql);
            $stmt2->execute(array(
            ':id'       => $_POST['id'],
            ':name'     => $_POST['name'],
            ':address'  => $_POST['address'],
            ':rank'     => $_POST['rank'],
            ':hours'    => $_POST['hours'],
            ':over'     => $_POST['over']));

            echo "<script>alert('Correct Inserted')</script>";
        }
        else
            echo "<script>alert('This ID Already Found')</script>";
    }
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="smalk.css">

    </head>
    <body>

        <fieldset>
            <legend> Add A New User</legend>
            <form method="post">
              
                <table>
                    <tr><th colspan="2"><?php $s; ?></th></tr>
                    <tr><th>id:<td><input type="id" name="id" ></td></tr>
                    <tr><th>Name:</th><td><input type="text" name="name" ></td></tr>
                    <tr><th>address:</th><td><input type="text" name="address" ></td></tr>
                    <tr><th>rank:</th><td><input type="number" name="rank" ></td></tr>
                    <tr><th>hours:</th><td><input type="number" name="hours" ></td></tr>
                    <tr><th>over:</th><td><input type="number" name="over"></td></tr>

                    <tr><p><input type="submit" name="addnew" value="Add New"/></p></tr>
                </table>
            </form>
        </fieldset>
    </body>
    
</html>