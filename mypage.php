<?php
session_start();

include("functions.php");

$pdo = db_con();

$stmt = $pdo->prepare("SELECT * FROM mono_story ORDER BY id DESC");
$status = $stmt->execute();

$view="";
if($status==false){
    querryError($stmt);
}else{
    while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<div class=bookmark_box>';
        $view .= $r["id"]."-";
        $view .='<img src="'.$result["image"].'" width="200">';    
        $view .= $r["name"]."-".$r["brand"]."-".$r["tag"].$r["price"]."-";
        $view .= '</a>';  
        $view .= '<a href="henshu3.php?id='.$r["id"].'">';
        $view .= '[編集]';
        $view .= '</a>';             
        $view .= '<a href="delete3.php?id='.$r["id"].'">';
        $view .= '[削除]';
        $view .= '</a>';
        $view .= '<p class="date">';
        $view .= $r["indate"];
        $view .= '</p>';
        $view .= '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>マイmonoストーリー</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
div{
  padding: 10px;font-size:16px;
  }

</style>
</head>
<body id="main">

<div>
    <h2>マイmonoストーリー</h2>
    <a href="mono_add.php" stylr="color:5190fc" class="title">monoを追加</a>
    <div class="container jumbotron" id="view"><?=$view?></div>
  </div>
</div>

</body>
</html>