<?php
//delete.php
include'connect.php';
if(isset($_GET['deleteid']))//$_GET lets us to access the parameters shown in URL
{
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `crud` WHERE `crud`.`serial` = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die ("Deletion not successful ".(mysqli_error($conn)));

    }
}
?>