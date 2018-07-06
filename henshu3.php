<?php
include("functions.php");

$id = $_GET["id"];

$pdo = db_con();

$sql = "SELECT * FROM mono_story WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view = "";
if($status==false){
  queryError($stmt);
}else{
    $row = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
 
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="mypage.php" style="color:#000; font-size:20px">HOME</a></div>
    </div>
  </nav>
</header>

<form method="post" action="update_mypage.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>商品名：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>ブランド：<input type="text" name="brand" value="<?=$row["brand"]?>"></label><br>
     <label>値段：<input type="text" name="price" value="<?=$row["price"]?>"></label><br>
     <label>カテゴリー：<input type="text" name="tag" value="<?=$row["tag"]?>"></label><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="保存">
    </fieldset>
  </div>
</form>


</body>
</html>
