<?php require_once 'PDO.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <form action="insert.php" method="post">
<input type="text" name="name">
<?php
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn , $sql);
?>
<select class="form-select" aria-label="Default select example" name = "cat_id">
<?php 
if (mysqli_num_rows($result) > 0) {
while ($row=mysqli_fetch_array($result)) 
{ ?>
  <option value="<?php echo $row['id'];?>"> <?php echo $row['name'];?> </option>

  <?php 
}
}

?>
</select>
<input type="submit">
    </form>
</body>
</html>