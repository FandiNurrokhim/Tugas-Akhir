<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Awesome Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" href="CSS/masuk.css">

</head>
<body>
	<form class="container" method="post" action="../../../Model/Login_Register/proses.php?aksi=daftar">
		<div class="row justify-content-center">
			<div class="form_control col-md-6 w-100">
				<h4 class="text-center">Daftar</h4>
				<h2 class="text-center mb-5 text-danger">Sehat <span class="text-dark">Q</span></h2>
					<div class="form-floating mb-3 mt-5">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						<label for="floatingInput">Email</label>
					</div>

					<div class="form-floating mb-3">
						<input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
						<label for="floatingInput">Username</label>
					</div>

					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
						<label for="password">Password</label>
					</div>
					<div class="d-grid gap-2 mt-2">
						<button type="submit" class="btn">Sign up</button>
					</div>

					<div  class="mt-3 mx-auto">
						<p>Sudah memiliki akun? <a href="masuk.php">Masuk sekarang</a></p>
					</div>
			</div>
		</div>
	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
