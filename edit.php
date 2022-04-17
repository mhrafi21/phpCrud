<?php 
include ("connect.php");
?>

<?php


if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];

  
if(isset($_POST['submit'])){

    $usr  = $_POST['name'];
    $email  = $_POST['email'];
    $pass  = $_POST['password'];
    $sql = "UPDATE student_info SET id = $id , name = '$usr', email = $email, Password = $pass WHERE id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "update";
    }else{
        echo "not";
    }

}
  }
?>
<form class = "w-75 m-auto py-4" action="edit.php" method = "post">
<input class = "form-control my-2" type="text" name="name" placeholder = "name" >
<input class = "form-control  my-2" type="email" name="email" placeholder = "email" >
<input class = "form-control  my-2" type="password" name="password" placeholder = "password" >
<button class = "btn btn-primary"  type  = "submit" name = "submit">Update</button>
<a class = "btn btn-success" href="show.php">Back</a>
</form>