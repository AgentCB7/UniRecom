<?php 
if(isset($_GET["id"])){
    $id =$_GET["id"];
    $servername ="localhost";
    $username ="root";
    $password ="";
    $database="test";
    $connection = new mysqli($servername, $username, $password, $database);
   $sql ="DELETE FROM survey WHERE id=$id";
   $connection->query($sql);
}
header("location:admin.php");
exit;
?>