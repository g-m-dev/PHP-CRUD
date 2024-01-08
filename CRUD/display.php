 <?php
 //display.php
//include 'crudadd.php';
include'connect.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD APP</title>
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="crudadd.php" class="text-light">Add New</a></button>
    </div>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
   $sql="SELECT * FROM `crud`";
   $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo '<tr>
<th scope="row">'.($row['serial']).'</th>
<td>'.($row['name']).'</td>
<td>'.($row['email']).'</td>
<td> 
<button class="btn btn-primary" ><a href="update.php? updateid='.$row['serial'].'" class ="text-light">Update</a></button>
<button class="btn btn-danger" ><a href="delete.php? deleteid='.$row['serial'].'" class ="text-light">Delete</a></button>
</td>
</tr>';
}
?>
  </tbody>
</table>
    </div>
</body>
</html>