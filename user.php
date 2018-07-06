<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<!-- <link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet"> -->
<style>
body{
margin: 0;
}
header{
height: 70px;
line-height: 70px;
border-bottom: solid 1px;
padding-left: 28px;
}
div{padding: 10px;font-size:16px;}
form{
width: 800px;
margin: 0 auto;
padding: 40px 0;
}
.input{
width: 300px;
height: 30px;
}
a{
text-decoration: none;
}
a:hover{
text-decoration: underline;
}
.a{
margin-bottom: 30px;
}
.soshin{
width: 106px;
height: 27px;
background-color: #5190fc;
color: #fff;
border-radius: 5px;
font-size: 12px;
margin: 20px 0;
}
</style>
<title>ユーザー登録</title>
</head>
<body>

<header>
<nav class="navbar navbar-default" ><a href="index3.php" style="color:#000; font-size:20px">HOME</a></nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="insert_user.php" method="post">
<h2>ユーザー登録</h2>
<table>
<tr class="a">
<td>お名前:</td><td><input class="input" type="text" name="name" /></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
<tr class="a">
<td>Email:</td><td><input class="input" type="text" name="email" /></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
<tr class="a">
<td>ユーザーID:</td><td><input class="input" type="text" name="lid" /></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
<tr class="a">
<td>PW:</td><td><input class="input" type="text" name="lpw" /></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
<tr class="a">
<td></td><td></td>
</tr>
</table>
<input type="submit" value="ユーザー登録" class="soshin" />

</form>


</body>
</html>