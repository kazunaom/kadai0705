<?php
include("functions.php");
$id = $_POST["id"];
$name = $_POST["name"];
$brand = $_POST["brand"];
$price = $_POST["price"];
$tag = $_POST["tag"];

$pdo = db_con();

$sql = 'UPDATE mono_story SET name=:name,brand=:brand,price=:price,tag=:tag WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name',  $name,  PDO::PARAM_STR);
$stmt->bindValue(':brand',  $brand,  PDO::PARAM_STR);
$stmt->bindValue(':price',  $price,  PDO::PARAM_STR);
$stmt->bindValue(':tag',  $tag,  PDO::PARAM_STR);
$stmt->bindValue(':id',  $id,  PDO::PARAM_INT); 
$status = $stmt->execute();


if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  header("Location: mypage.php");
  exit;

}

?>