<?php require_once 'PDO.php';

$sql = "update products set name='".$_POST['name']."', cat_id=".$_POST['cat_id']." where id=".$_POST['id'];

echo $sql;
$result = mysqli_query($conn , $sql);

if($result){
    header('location:index.php');
}else{
    echo "wronng";
}