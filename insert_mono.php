<?php
include("functions.php");

if(
    !isset($_POST["name"]) || $_POST["name"]=="" ||
    !isset($_POST["brand"]) || $_POST["brand"]=="" ||
    !isset($_POST["price"]) || $_POST["price"]=="" ||
    !isset($_POST["tag"]) || $_POST["tag"]==""
    
){
    exit('ParamError');
}

$title = $_POST["name"];
$url = $_POST["brand"];
$memo = $_POST["price"];
$tag = $_POST["tag"];

$pdo = db_con();


$stmt = $pdo->prepare("INSERT INTO mono_story(id, name, brand, price, tag, indate)
VALUES(NULL, :name, :brand, :price, :tag, sysdate())");
$stmt->bindValue(':name', $title, PDO::PARAM_STR);
$stmt->bindValue(':brand', $url, PDO::PARAM_STR);
$stmt->bindValue(':price', $memo, PDO::PARAM_STR);
$stmt->bindValue(':tag', $tag, PDO::PARAM_STR);
$status = $stmt->execute();

if($status == false){
    queryError($stmt);
}else{

    header("Location: mypage.php");
    exit;
}



?>