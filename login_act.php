<?php
session_start();

include("functions.php");

$pdo = db_con();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];


$sql = "SELECT * FROM mono_user_table WHERE lid=:lid AND lpw=:lpw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();

if($res==false){
queryError($stmt);
}

$val = $stmt->fetch();

if($val["id"] != ""){
$_SESSION["chk_ssid"] = session_id();
// $_SESSION["kanri_flg"] = $val["kanri_flg"];
$_SESSION["name"] = $val["name"];
header("Location: mypage.php");
}else{
header("Location: login_form.php");
}

?>
