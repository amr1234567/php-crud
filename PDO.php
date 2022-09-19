<?php

$dsn = "mysql:host=localhost;dbname=users";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);
// $data = [
//     'name' => $_POST['name'],
//     'phone' => $_POST['phone'],
// ];
// $sql = "INSERT INTO users (name, phone) VALUES (:name, :phone)";
// $stmt= $pdo->prepare($sql);
// $stmt->execute($data);
$stm = $pdo->query("SELECT * from user");

$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
    echo $row['id']." "." ".$row['name']." ".$row['phone']."<br/>";

}

echo "yeast";

$stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");

$stmt->execute(['id' => 6]); 
$user = $stmt->fetch();
echo $user[0];
echo $user[1];
echo $user[2];



?>