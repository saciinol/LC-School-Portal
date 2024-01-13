<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LC - log in</title>
	<link rel="icon" type="image/png" href="./images/logo.png" />
	<link rel="stylesheet" href="./css/main.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
	<div class="bg-image">
		<div class="main">
			<div class="quote">
				<h1>“Study hard for the well is deep and our brains are shallow.”</h1>
				<p>- Richard Baxter</p>
			</div>

			<form action="login.php" method="post" class="login">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>

				<div class="login__email-pw">
					<div class="inputGroup">
						<label for="username" class="login-label">Username:</label>
						<input type="text" name="uname" class="login-email" id="login-email" placeholder="Enter your username" />
					</div>

					<div class="inputGroup">
						<label for="password" class="login-label">Password:</label>
						<div class="login-eye">
							<input type="password" name="password" class="login-pw" id="login-pw" placeholder="Enter your password" />
							<!-- <img src="./images/eye-slash-solid.svg" id="eyeicon"> -->
							<i class="fa-solid fa-eye-slash eyeicon" id="eyeicon"></i>
						</div>
					</div>
				</div>

				<div class="login__buttons">
					<button type="submit" class="btn btn--primary btn-login">Login</button>

					<a href="./registration.php" class="btn btn--transparent">
						<p>Sign Up</p>
					</a>
				</div>

				<a href="#" class="forgotPW">
					<h6>Forgot your password?</h6>
				</a>
			</form>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="footer__wrapper">
					<div class="footer__left">
						<div class="footer__left__iconText">
							<i class="fa-solid fa-location-dot"></i>
							<h6>
								38CG+XFV, Paseo de Escudero at Zulueta ST, <br />
								Paseo de Escudero, Lungsod ng San Pablo, 4000 Laguna
							</h6>
						</div>

						<div class="footer__left__two">
							<div class="footer__left__iconText">
								<i class="fa-solid fa-clock"></i>
								<h6>Student Hours: 7:00 am - 8:00 pm</h6>
							</div>

							<h6>|</h6>

							<div class="footer__left__iconText">
								<i class="fa-solid fa-clock"></i>
								<h6>Office Hours: 8:00 am - 4:00 pm</h6>
							</div>
						</div>

						<div class="footer__left__two">
							<div class="footer__left__iconText">
								<i class="fa-solid fa-phone"></i>
								<h6>Main Office: (049562) 8078</h6>
							</div>

							<h6>|</h6>

							<div class="footer__left__iconText">
								<i class="fa-solid fa-envelope"></i>
								<h6>Technical Support: support@lcportal.online</h6>
							</div>
						</div>
					</div>

					<div class="footer__right">
						<div class="footer__right__img">
							<img src="./images/logo.png" alt="" />
						</div>

						<div class="footer__right__text">
							<h3>“100 Years of Timeless Excellence”</h3>
							<p>Copyright © 2023 Laguna College</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-------------------------------- OVERLAY REGISTER --------------------------->

	<script src="./js/script.js"></script>
	<script src="./js/admin.js"></script>
</body>

</html>