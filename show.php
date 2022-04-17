<?php
include ("connect.php");
?>

<a  class = "btn btn-secondary my-4 "href="insert.php">Add Data</a>
<?php

$query = "SELECT * FROM student_info";
$result = mysqli_query($con,$query);

?>
<table class="table">
  <thead>
    <tr class  = "text-center bg-dark text-white text-uppercase">
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <?php

  while( $row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $pass = $row['Password'];

  ?>
  <tbody>
    <tr class = "text-center bg-light text-secondary">
      <td ><?php echo $id?></td>
      <td><?php echo $name?></td>
      <td><?php echo $name?></td>

      <td><?php echo $pass?></td>
      <td><a class = "btn btn-primary px-2 py-1" href="edit.php?updateid =<?php echo $id?>">edit</a></td>
      <td><a class = "btn btn-danger px-2 py-1"  href="delete.php?deleteid=<?php echo $id?>">delete</a></td>

    </tr>

  </tbody>
  <?php
}
  ?>
</table>