<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>mono追加</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default"><a href="mypage.php" style="color:#000; font-size:20px">HOME</a></nav>
</header>

 <form method="post" action="insert_fileup.php" enctype="multipart/form-data">
<form name="form1" action="insert_fileup.php" method="post">
商品名:<input type="text" name="name" />
ブランド:<input type="text" name="brand" />
カテゴリ:<input type="text" name="tag" />
値段:<input type="text" name="price" />
<input type="file" name="upfile"><br>
<button data-action="mypage.php">monoを追加</button>

</form>


</body>
</html>