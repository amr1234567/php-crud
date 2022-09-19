<?php require_once 'PDO.php';

$sql = 'INSERT INTO products (name , cat_id )
values("'.$_POST["name"].'","'.$_POST["cat_id"].'")';

// $sql="INSERT INTO `products` (Name , cat_id)
// VALUES 
// ('{$_POST['Name']}',{$_POST['cat_id']}')";
echo $sql ;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('location:index.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
?> 

