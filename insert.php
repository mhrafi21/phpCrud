<?php
include ("connect.php");
?>
<?php
if(isset($_POST['submit'])){
   $usr =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['password'];
$query = "INSERT INTO student_info(name,email,Password) VALUES('$usr','$email','$pass')";
$result = mysqli_query($con,$query);
}
?>
<form class = "w-75 m-auto py-4" action="insert.php" method = "post">
<input class = "form-control my-2" type="text" name="name" placeholder = "name" >
<input class = "form-control  my-2" type="email" name="email" placeholder = "email" >
<input class = "form-control  my-2" type="password" name="password" placeholder = "password" >
<button class = "btn btn-primary"  type  = "submit" name = "submit">Submit</button>
<a class = "btn btn-success" href="show.php">Back</a>
</form>