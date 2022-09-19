<?php require_once 'PDO.php';

$sql = "delete from products where id =". $_GET['id'];

$result = mysqli_query($conn , $sql);

echo "deleted successfully";
header('location:index.php');

?>