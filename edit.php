<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);


 $id=$_GET["id"];
 $sql1="SELECT *FROM survey WHERE id=$id";
 $result= mysqli_query($connection, $sql1);
 $row= mysqli_fetch_assoc($result);

// }
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class ="container my-5">
        <h2>Survey</h2>
        <?php 
        // if(!empty($errorMessage))
        // {
        //     echo" 
        //     <div class='alert alert-warning alert-dismissible fade show' role= 'alert'>
        //     <strong>$errorMessage</strong>
        //     <button type= 'button' class='btn-close' data-bs-dismiss='alert' arial label='close'></button>
        //     </div>
        //     ";
        // }

        ?>
        <form method ="post">
            
        <div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Name </label>
                <div class =" col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $row["name"]; ?>">
</div>
</div>
<div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class =" col-sm-6">
                    <input type="text" class="form-control" name="gender" value="<?php echo $row["gender"]; ?>">
</div>
</div>

<div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Subject </label>
                <div class =" col-sm-6">
                    <input type="text" class="form-control" name="subject" value="<?php echo $row["subject"]; ?>">
</div>
</div>

<div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Class </label>
                <div class =" col-sm-6">
                    <input type="text" class="form-control" name="class" value="<?php echo $row["class"]; ?>">
</div>
</div>

<div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Finance </label>
                <div class =" col-sm-6">
                    <input type="text" class="form-control" name="finance" value="<?php echo $row["finance"]; ?>">
</div>
</div>

<div class = "row mb-3">
                <label class="col-sm-3 col-form-label">Opinion </label>
                <div class =" col-sm-6">
                    <input type="text" class="form-control" name="opinion" value="<?php echo $row["opinion"]; ?>">
</div>
</div>

   <!--  <?php 
    //  if(empty($successMessage))
    //  {
    //     echo" 
    //         <div class='alert alert-success alert-dismissible fade show' role= 'alert'>
    //         <strong>$successMessage</strong>
    //         <button type= 'button' class='btn-close' data-bs-dismiss='alert' arial label='close'></button>
    //         </div>
    //         ";
    //  }
   ?>    -->

    <div class= " row mb-3">
    <div class= "offset-sm-3 col-sm-3 d-grid">
    <input type="submit" value="Update" class="btn" name="update">
</div>
<div class="col-sm-3 d-grid">
    <a class=" btn btn-outline primary" href="index.php" role="button">Cancel</a>
</div>
</div> 




</form>
</div>
    
</body>
</html>
<?php
if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $subject = $_POST['subject'];
    $class = $_POST['class'];
    $finance = $_POST['finance'];
    $opinion = $_POST['opinion'];
    
    $sql="UPDATE survey SET name='$name',gender='$gender',subject='$subject',class='$class',finance='$finance',opinion='$opinion' WHERE id='$id'";
     $result=mysqli_query($connection, $sql);
    if($result)
    {
        header('location:index.php');
    }
}
?>