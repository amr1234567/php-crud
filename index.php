<?php require_once 'PDO.php';

$sql="SELECT * FROM products , categories WHERE products.cat_id = categories.id " ;
$result = mysqli_query($conn , $sql);

?>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php 
if (mysqli_num_rows($result) > 0) {
while ($row=mysqli_fetch_array($result)) 
{ 
echo "<tr> <td>".$row[0]."</td>";
echo " <td>".$row[1]."</td>";
    echo " <td>".$row['name']."</td>";
    echo "<td>
    <button type='button' class=' btn btn-secondary'> <a href='show.php?id=".$row[0]."'>Show</a>
    </button>
    <button type='button' class='btn btn-light'> <a href='edit.php?id=".$row[0]."'>Edit</a> </button>
    <button type='button' class='btn btn-danger'> <a href='delete.php?id=".$row[0]."'>Delete</a> </button>
</td>";
echo"</tr>";

}
}
echo "</table>";


?>
  </tbody>
</table>
</body>
</html>