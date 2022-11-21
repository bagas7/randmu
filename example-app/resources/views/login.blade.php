<!doctype html>
<html lang="en">
  	<head>
		<title>Randmu | Login</title>

		<!-- Favicons -->
	    <link rel="icon" href="img/favicon_randmu.png" type="image">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="css/login.css">

		<!--sweetalert-->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	</head>
	<body class="begron">
		@if(session()->has('errorLogin'))
			{{-- has adalah untuk mengechek apakah suatu session membawa session/mempunyai session loginError --}}
			<script>swal("Login gagal!", "{{ session('errorLogin') }}", "error");</script>
		@endif
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-10">
						<div class="wrap d-md-flex">
							<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
								<div class="text w-100">
									<img src="img/logo_randmu.jpg" alt="Randmu"><br><br>
									<b><p>PT. RANDMU INDONESIA CONSULT</p></b>
									<p>Don't have an account?</p>
									<a href="/register" class="btn btn-white btn-outline-white"><b>SIGN UP</b></a>
								</div>
							</div>
							<div class="login-wrap p-4 p-lg-5">
								<div class="d-flex">
									<div class="w-100">
										<h3 class="mb-4" style="color: #fff;">Log In</h3>
									</div>
									<div class="w-100">
										<p class="social-media d-flex justify-content-end">
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
											<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a>
										</p>
									</div>
								</div>
								<form action="/login/authenticate" method="POST" class="signin-form">
									@csrf
									<div class="form-group mb-3">
										<label class="label" for="name" style="color: #fff;">Username</label>
										<input type="text" style="color: #fff; background-color: gray" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
										<small style="color:red;" >@error('username') {{ $message }} @enderror</small>
									</div>
									<div class="form-group mb-3">
										<label class="label" for="password" style="color: #fff;">Password</label>
										<input id="password-field" type="password" name="password" style="color: #fff; background-color: gray" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
										<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
										<small style="color:white;" >@error('password') {{ $message }} @enderror</small>
									</div>
									<div class="form-group">
										<button type="submit" class="form-control btn btn-primary submit px-3"><b>LOGIN</b></button>
									</div>
									<div class="form-group d-md-flex">
										<div class="w-50 text-left">
											<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
												<input type="checkbox" checked>
												<span class="checkmark"></span>
											</label>
										</div>
										<div class="w-50 text-md-right">
											<a href="#">Forgot Password?</a>
										</div>
									</div>
                                    <div class="text-md-right">
										<a href="/">Back to Home</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="footer" style="color: #fff; text-align: center; text-transform: uppercase;">
			<p>Copyright © 2022 PT. RANDMU INDONESIA CONSULT, All Rights Reserved.</p>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>

