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
						<label for="email" class="login-label">Email/Username:</label>
						<input type="text" name="uname" class="login-email" id="login-email" placeholder="email@email.com/JaneDoe123" />
					</div>

					<div class="inputGroup">
						<label for="password" class="login-label">Password:</label>
						<input type="password" name="password" class="login-pw" id="login-pw" />
					</div>
				</div>

				<div class="login__check">
					<input type="checkbox" id="cboxPW" />
					<label for="cboxPW" class="noselect">Show Password</label>
				</div>

				<div class="login__buttons">
					<!-- <a href="#" class="btn btn--primary">
								<p>Login</p>
							</a> -->
					<button type="submit" class="btn btn--primary btn-login">Login</button>

					<a href="#overlayRegister" class="btn btn--transparent">
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
	<div id="overlayRegister" class="register">
		<div class="register__scroll">
			<form action="signup-check.php" method="post" enctype="multipart/form-data" class="register__wrapper">

				<a href="./index.php" class="close-btn" onclick="closeRegister()" title="Close Register">&times;</a>

				<div class="register__account-info">
					<div class="registerTitlee">
						<h3>ACCOUNT INFORMATION</h3>
					</div>

					<div class="dikoalampota">
						<!---------------------------------- TEMPORARY -->
						<div class="dikoalampota_img">
							<label for="input-file">
								<img src="./images/addimage.png" id="student-pic" />
							</label>
							<input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file" name="input-file">
						</div>

						<div class="register__username-pw">

							<?php if (isset($_GET['error'])) { ?>
								<p class="error"><?php echo $_GET['error']; ?></p>
							<?php } ?>

							<?php if (isset($_GET['success'])) { ?>
								<p class="success"><?php echo $_GET['success']; ?></p>
							<?php } ?>

							<div class="inputGroup">
								<label for="username" class="register-label">Username: <span>*</span></label>
								<?php if (isset($_GET['uname'])) { ?>
									<input type="text" name="uname" class="register-pw" value="<?php echo $_GET['uname']; ?>">
								<?php } else { ?>
									<input type="text" name="uname" class="register-pw">
								<?php } ?>
							</div>

							<div class="inputGroup">
								<label for="password" class="register-label">Password: <span>*</span></label>
								<div class="login-eye">
									<input type="password" name="password" class="register-pw login-pw" id="login-pw" />
									<!-- <img src="./images/eye-slash-solid.svg" class="showPW"> -->
									<i class="fa-solid fa-eye-slash eyeicon" id="eyeicon"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="register__course-info">
					<div class="registerTitle">
						<h3>COURSE INFORMATION</h3>
					</div>

					<div class="register__course-info__row">
						<div class="inputGroup">
							<label for="course" class="register-label">Course: <span>*</span></label>

							<div class="styled-select">
								<select id="select-course" name="course">
									<option value="B.S. in Accountancy">B.S. in Accountancy</option>
									<option value="B.S. in Business Administration">B.S. in Business Administration</option>
									<option value="B.S. in Management Accounting">B.S. in Management Accounting</option>
									<option value="B.S. in Civil Engineering">B.S. in Civil Engineering</option>
									<option value="B.S. in Industrial Engineering">B.S. in Industrial Engineering</option>
									<option value="B.S. in Computer Science">B.S. in Computer Science</option>
									<option value="B.S. in Information Technology">B.S. in Information Technology</option>
									<option value="B.S. in Nursing">B.S. in Nursing</option>
									<option value="B.S. in Psychology">B.S. in Psychology</option>
									<option value="B.S. in Hospitality Management">B.S. in Hospitality Management</option>
									<option value="B.S. in Tourism Management">B.S. in Tourism Management</option>
									<option value="Bachelor of Arts in English Language">Bachelor of Arts in English Language</option>
									<option value="Bachelor of Secondary Education">Bachelor of Secondary Education</option>
									<option value="Bachelor of Elementary Education">Bachelor of Elementary Education</option>
								</select>
							</div>
						</div>

						<div class="inputGroup">
							<label for="year" class="register-label">Year Level: <span>*</span></label>

							<div class="styled-select">
								<select id="select-year" name="year_level">
									<option value="1st Year">1st Year</option>
									<option value="2nd Year">2nd Year</option>
									<option value="3rd Year">3rd Year</option>
									<option value="4th Year">4th Year</option>
								</select>
							</div>
						</div>
					</div>
				</div>

				<div class="register__student-information">
					<div class="registerTitle">
						<h3>STUDENT INFORMATION</h3>
					</div>

					<div class="register__student-information__row">
						<div class="inputGroup">
							<label for="lastname" class="register-label">Last Name: <span>*</span></label>
							<?php if (isset($_GET['last_name'])) { ?>
								<input type="text" class="profile-lastname" name="last_name" value="<?php echo $_GET['last_name']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-lastname" name="last_name" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="firstname" class="register-label">First Name: <span>*</span></label>
							<?php if (isset($_GET['first_name'])) { ?>
								<input type="text" class="profile-firstname" name="first_name" value="<?php echo $_GET['first_name']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-firstname" name="first_name" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="middlename" class="register-label">Middle Name: <span>*</span></label>
							<?php if (isset($_GET['middle_name'])) { ?>
								<input type="text" class="profile-lastname" name="middle_name" value="<?php echo $_GET['middle_name']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-lastname" name="middle_name" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="name-suffix" class="register-label">Name Suffix:</label>

							<div class="styled-select">
								<select id="select-nameSuffix" name="name_suffix">
									<option value="N/A">N/A</option>
									<option value="Jr.">Jr.</option>
									<option value="I">I</option>
									<option value="II">II</option>
									<option value="III">III</option>
									<option value="IV">IV</option>
									<option value="V">V</option>
									<option value="VI">VI</option>
									<option value="VII">VII</option>
									<option value="VIII">VIII</option>
									<option value="IX">IX</option>
									<option value="X">X</option>
									<option value="Sr.">Sr.</option>
								</select>
							</div>
						</div>
					</div>

					<div class="register__student-information__row">
						<div class="inputGroup">
							<label for="birthdate" class="register-label">Birth Date: <span>*</span></label>
							<?php if (isset($_GET['birth_date'])) { ?>
								<input type="date" class="profile-birthdate" id="birth_date" name="birth_date" value="<?php echo $_GET['birth_date']; ?>" />
							<?php } else { ?>
								<input type="date" class="profile-birthdate" id="birth_date" name="birth_date" id="birth_date" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="age" class="register-label">Age: <span>*</span></label>
							<?php if (isset($_GET['age'])) { ?>
								<input type="text" class="profile-age" id="age" name="age" value="<?php echo $_GET['age']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-age" id="age" name="age" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="birthplace" class="register-label">Birth Place: <span>*</span></label>
							<?php if (isset($_GET['birth_place'])) { ?>
								<input type="text" class="profile-birthplace" name="birth_place" value="<?php echo $_GET['birth_place']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-birthplace" name="birth_place" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="gender" class="register-label">Gender: <span>*</span></label>
							<div class="styled-select">
								<select id="select-gender" name="gender">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
					</div>

					<div class="register__student-information__row">
						<div class="inputGroup">
							<label for="civil-status" class="register-label">Civil Status: <span>*</span></label>
							<?php if (isset($_GET['civil_status'])) { ?>
								<input type="text" class="profile-civstat" name="civil_status" value="<?php echo $_GET['civil_status']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-civstat" name="civil_status" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="nationality" class="register-label">Nationality: <span>*</span></label>
							<?php if (isset($_GET['nationality'])) { ?>
								<input type="text" class="profile-civstat" name="nationality" value="<?php echo $_GET['nationality']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-civstat" name="nationality" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="religion" class="register-label">Religion: <span>*</span></label>
							<?php if (isset($_GET['religion'])) { ?>
								<input type="text" class="profile-civstat" name="religion" value="<?php echo $_GET['religion']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-civstat" name="religion" />
							<?php } ?>
						</div>
					</div>
				</div>

				<div class="register__add-cont-info">
					<div class="registerTitle">
						<h3>ADDRESS AND CONTACT INFORMATION</h3>
					</div>

					<div class="register__student-information__row">
						<div class="inputGroup">
							<label for="home-address" class="register-label">Home Address: <span>*</span></label>
							<?php if (isset($_GET['home_address'])) { ?>
								<input type="text" class="profile-homeadd" name="home_address" value="<?php echo $_GET['home_address']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-homeadd" name="home_address" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="zip-code" class="register-label">Zip Code: <span>*</span></label>
							<?php if (isset($_GET['zip_code'])) { ?>
								<input type="text" class="profile-zipcode" name="zip_code" value="<?php echo $_GET['zip_code']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-zipcode" name="zip_code" />
							<?php } ?>
						</div>
					</div>

					<div class="register__student-information__row">
						<div class="inputGroup">
							<label for="home-contact-no" class="register-label">Home Contact No.: <span>*</span></label>
							<?php if (isset($_GET['home_contact_no'])) { ?>
								<input type="text" class="profile-homecontno" name="home_contact_no" value="<?php echo $_GET['home_contact_no']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-homecontno" name="home_contact_no" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="email" class="register-label">Email: <span>*</span></label>
							<?php if (isset($_GET['email'])) { ?>
								<input type="text" class="profile-email" name="email" value="<?php echo $_GET['email']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-email" name="email" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="mobile-no" class="register-label">Mobile No.: (ex. 09123456789): <span>*</span></label>
							<?php if (isset($_GET['mobile_no'])) { ?>
								<input type="text" class="profile-mobno" name="mobile_no" value="<?php echo $_GET['mobile_no']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-mobno" name="mobile_no" />
							<?php } ?>
						</div>
					</div>

					<div class="register__student-information__row">
						<div class="inputGroup">
							<label for="socmed" class="register-label">Social Media Profile URL/Link (alternative means of communication):</label>
							<?php if (isset($_GET['socmed_profile'])) { ?>
								<input type="text" class="profile-socmed" name="socmed_profile" value="<?php echo $_GET['socmed_profile']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-socmed" name="socmed_profile" />
							<?php } ?>
						</div>
					</div>
				</div>

				<div class="register__parents">
					<div class="registerTitle">
						<h3>PARENTS</h3>
					</div>

					<div class="register__student-information__row">
						<div class="inputGroup">
							<label for="fathername" class="register-label">Father's Name: <span>*</span></label>
							<?php if (isset($_GET['father_name'])) { ?>
								<input type="text" class="profile-parentname" name="father_name" value="<?php echo $_GET['father_name']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-parentname" name="father_name" />
							<?php } ?>
						</div>

						<div class="inputGroup">
							<label for="mothername" class="register-label">Mother's Name: <span>*</span></label>
							<?php if (isset($_GET['mother_name'])) { ?>
								<input type="text" class="profile-parentname" name="mother_name" value="<?php echo $_GET['mother_name']; ?>" />
							<?php } else { ?>
								<input type="text" class="profile-parentname" name="mother_name" />
							<?php } ?>
						</div>
					</div>
				</div>

				<div class="register__save">
					<!-- <a href="#" class="btn btn--transparent regis-confirm">
						<p>Confirm</p>
					</a> -->
					<button type="submit" class="btn btn--transparent regis-confirm">Confirm</button>

					<a href="./index.php" class="btn btn--transparent regis-cancel" onclick="closeRegister()">
						<p>Cancel</p>
					</a>
				</div>
			</form>
		</div>
	</div>

	<script src="./js/script.js"></script>

	<script>
		// ADD IMAGE
		let studentPic = document.getElementById('student-pic');
		let inputFile = document.getElementById('input-file');

		inputFile.onchange = function() {
			studentPic.src = URL.createObjectURL(inputFile.files[0]);
		}
	</script>
</body>

</html>