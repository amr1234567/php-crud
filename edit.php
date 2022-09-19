<?php require_once 'PDO.php';

$sql = "select * from products where id =". $_GET['id'];

$result = mysqli_query($conn , $sql);

while($row=mysqli_fetch_assoc($result)){
       $id=$row['id'];
       
      $name= $row['name'];
       
      $cat_id=  $row['cat_id'];
    
}

?>
<form action="update.php" method="post">
<input type="text" name="name" value="<?php echo $name; ?>" placeholder="please enter a name">
<input type="hidden" name="id" value="<?php echo $id; ?>">

<?php
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn , $sql);
?>
<select class="form-select" aria-label="Default select example" name = "cat_id">
<?php 
if (mysqli_num_rows($result) > 0) {
while ($row=mysqli_fetch_array($result)) 

{ 
    if ($row['id'] == $cat_id) {
    ?>

  <option value="<?php echo $row['id'];?>" selected > <?php echo $row['name'];?> </option>
<?php 
} 
else { ?> <option value="<?php echo $row['id'];?>"> <?php echo $row['name'];?> </option>
<?php } ?>
  <?php 
}
}

?>
</select>
<input type="submit">
    </form>

 