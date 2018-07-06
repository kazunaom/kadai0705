<?php
include("functions.php");
if(
!isset($_POST["name"]) || $_POST["name"]=="" ||
!isset($_POST["email"]) || $_POST["email"]=="" ||
!isset($_POST["lid"]) || $_POST["lid"]=="" ||
!isset($_POST["lpw"]) || $_POST["lpw"]==""
){
exit('ParamError');
}
$name = $_POST["name"];
$email = $_POST["email"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$pdo = db_con();

$stmt = $pdo->prepare("INSERT INTO mono_user_table(id, name, email, lid, lpw)
VALUES(NULL, :name, :email, :lid, :lpw");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$status = $stmt->execute();
if($status == false){
queryError($stmt);
}else{
header("Location: login_form.php");
exit;
}



?>

 
