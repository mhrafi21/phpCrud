<?php 
include("connect.php");


if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
   $query = "DELETE FROM student_info WHERE id =$id ";
   $result = mysqli_query($con,$query);
if($result){
    header("location:show.php?deletedSuccess");
}

}
?>