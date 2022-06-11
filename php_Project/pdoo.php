
<?php
require_once "pdo.php";
if(isset($_POST['insert'])){
if ( isset($_POST['id']) &&  isset($_POST['name']) && isset($_POST['address'])
     && isset($_POST['rank']) &&  isset($_POST['hours'])) {
    $sql = "INSERT INTO emp (id,name, address, rank,hours,over)
               VALUES (:id,:name,:address, :rank, :hours, :over)";
    echo("<pre>\n".$sql."\n</pre>\n");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':id' => $_POST['id'],
        ':name' => $_POST['name'],
        ':address' => $_POST['address'],
        ':rank' => $_POST['rank'],
        ':hours' => $_POST['hours'],
        ':over' => $_POST['over']));
}}
?>
<html><head></head><body>
<p>Add A New User</p>
<form method="post">
<p>id:<input type="id" name="id" size="40"></p>
<p>Name:<input type="text" name="name" size="40"></p>
<p>address:<input type="text" name="address" size="40"></p>
<p>rank:<input type="number" name="rank" size="40"></p>
<p>hours:<input type="number" name="hours"></p>
<p>over:<input type="number" name="over"></p>
<p><input type="submit" value="Add New"/></p>
</form>
</body>
