<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Login</h1>
    <form method="post" action="{{url ( 'login' ) }}">
		
		@csrf

		<!-- <label>
			Nombre
		</label>
		<input type="text" name="name">

		<br>
		<br>

		<label>
			Apellido
		</label>
		<input type="text" name="lastname">

		<br>
		<br> -->

		<label>
			Email
		</label>
		<input type="email" name="email">

		<br>
		<br>

		<label>
			Password
		</label>
		<input type="password" name="password">

		<br>
		<br>

		<button>
			Acceder
		</button>
	</form>
</body>
</html>