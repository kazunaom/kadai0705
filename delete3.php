<?php

include("functions.php");
$id = $_GET["id"];

$pdo = db_con();

$sql = 'DELETE FROM mono_story WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();


if($status==false){
    querryError($stmt);
}else{
    header("Location: mypage.php");
    exit;
}



?>