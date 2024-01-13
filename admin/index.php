<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="index.css">
	<title>Login Page</title>
</head>

<body>
	<form action="login.php" method="post">
		<div class="login-box">
			<h1>Admin Paneli</h1>
			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Kullanıcı Adı"
						name="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Şifre"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Giriş Yap">
		</div>
	</form>
</body>

</html>
