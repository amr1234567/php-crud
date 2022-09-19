<?php require_once 'PDO.php';


$sql = "select * from  products where id =". $_GET['id'];
$result = mysqli_query($conn , $sql);

while($row=mysqli_fetch_array($result)){
    echo $row[0];
    echo '<br>';
    echo $row['name'];
    echo '<br>';
    echo $row['cat_id'];
    echo '<br>';
}

?>
<a href="index.php">Back</a>