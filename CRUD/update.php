<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql="SELECT * FROM `crud` where `crud`.`serial` =$id ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql_update = "UPDATE `crud` SET `name` = '$name', `email` = '$email' WHERE `crud`.`serial` = '$id'";
    $result_update = mysqli_query($conn, $sql_update);

    if ($result_update) {
        header('location:display.php');
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD-APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 mx-auto">
        <form method="POST">
            <div class="mb-3">
                <label for="text" class="form-label">Name</label>
                <input type="text" class="form-control" id="text" aria-describedby="emailHelp" name="name"
                    value="<?php echo $name; ?>">
                <div id="text" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                    value="<?php echo $email; ?>">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
