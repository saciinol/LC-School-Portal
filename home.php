<?php
session_start();


// $user = ($_SESSION['users']);

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) && isset($_SESSION['image_url']) && isset($_SESSION['course']) && isset($_SESSION['year_level']) && isset($_SESSION['last_name']) && isset($_SESSION['first_name']) && isset($_SESSION['middle_name']) && isset($_SESSION['name_suffix']) && isset($_SESSION['birth_date']) && isset($_SESSION['age']) && isset($_SESSION['birth_place']) && isset($_SESSION['gender']) && isset($_SESSION['civil_status']) && isset($_SESSION['nationality']) && isset($_SESSION['religion']) && isset($_SESSION['home_address']) && isset($_SESSION['zip_code']) && isset($_SESSION['home_contact_no']) && isset($_SESSION['email']) && isset($_SESSION['mobile_no']) && isset($_SESSION['socmed_profile']) && isset($_SESSION['father_name']) && isset($_SESSION['mother_name'])) {
	$_SESSION['table'] = 'grades';
	$grades = include('./show-grades-home.php');

	$_SESION['table'] = 'reg_card';
	$reg_cards = include('./reg-pic.php');

	$_SESION['table'] = 'enroll';
	$enrolls = include('./enroll.php');


?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>LC School Portal</title>
		<link rel="icon" type="image/png" href="./images/logo.png" />
		<link rel="stylesheet" href="./css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	</head>

	<body>
		<header class="header">
			<div class="container">
				<div class="header__wrapper">
					<div class="header__lc-logo">
						<a href="./home.php" class="header__lc-logo__logo">
							<img src="./images/logo.png" alt="" />
						</a>

						<a href="./home.php" class="header__lc-logo__lc">
							<h2>Laguna College</h2>
						</a>
					</div>

					<div class="header__account-logout">
						<a class="header__account-logout__accountSettings btnSettings">
							<i class="fa-sharp fa-solid fa-gear"></i>
							<p>Account Settings</p>
						</a>

						<a class="header__account-logout__accountSettings btnLogout">
							<i class="fa-sharp fa-solid fa-reply"></i>
							<p>Logout</p>
						</a>
					</div>
				</div>
			</div>
		</header>

		<section class="banner">
			<div class="container">
				<div class="banner__wrapper">
					<div class="profile_photo">
						<img src="./images/users/<?php echo $_SESSION['image_url'] ?>" alt="" />
					</div>

					<div class="banner__info">
						<div class="name_confirm">
							<h1 class="Name">
								<?php echo $_SESSION['first_name']; ?>
								<?php echo $_SESSION['middle_name']; ?>
								<?php echo $_SESSION['last_name']; ?>
								<!-- - -->
							</h1>
						</div>

						<h2 class="Course"><?php echo $_SESSION['course'] ?></h2>

						<h2 class="Year"><?php echo $_SESSION['year_level'] ?></h2>

						<?php foreach ($enrolls as $index => $enroll) { ?>

							<h2 class="Semester"><?= $enroll['sem'] ?> <?= $enroll['school_year'] ?></h2>
							<h1 class="status"><?= $enroll['status'] ?></h1>

						<?php } ?>
					</div>
				</div>
			</div>
		</section>

		<section class="features">
			<div class="container">
				<div class="features__wrapper">
					<div class="features__mainFeatures">
						<div class="features-center">
							<div class="features__mainFeatures__col">
								<a class="features__mainFeatures__feat btn-feature-profile">
									<i class="fa-solid fa-user"></i>
									<p>Profile</p>
								</a>

								<a class="features__mainFeatures__feat btn-feature-grades">
									<i class="fa-solid fa-book"></i>
									<p>Grades</p>
								</a>

								<a class="features__mainFeatures__feat btn-feature-prerequisites">
									<i class="fa-solid fa-puzzle-piece"></i>
									<p>Prerequisites</p>
								</a>
							</div>

							<div class="features__mainFeatures__col">
								<a class="features__mainFeatures__feat btn-feature-regcard">
									<i class="fa-solid fa-address-card"></i>
									<p>Registration Card</p>
								</a>

								<a class="features__mainFeatures__feat btn-feature-subjects">
									<i class="fa-solid fa-chalkboard-user"></i>
									<p>Subjects</p>
								</a>

								<a class="features__mainFeatures__feat btn-feature-registration">
									<i class="fa-solid fa-user-graduate"></i>
									<p>Registration</p>
								</a>
							</div>

							<div class="features__mainFeatures__col">
								<a class="features__mainFeatures__feat btn-feature-balanceinquiry">
									<i class="fa-solid fa-scale-balanced"></i>
									<p>Balance Inquiry</p>
								</a>

								<a class="features__mainFeatures__feat btn-feature-payment">
									<i class="fa-solid fa-money-check-dollar"></i>
									<p>Payment</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

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

		<!-------------------- OVERLAY ------------------->

		<!-- <div class="settings">
			<div class="settings__wrapper">

				<h2>Account Settings</h2>

				<div class="settings__input">
					<div class="inputGroup">
						<label for="username">Username:</label>
						<input type="text" name="settings-username" class="settings-username" id="settings-username" />
					</div>

					<div class="inputGroup">
						<label for="email">Email:</label>
						<input type="text" name="settings-email" class="settings-email" id="settings-email" />
					</div>

					<button class="btn btn-changePW">
						<div class="pw_ewan">
							<i class="fa-solid fa-lock"></i>
							<p>Change Password</p>
						</div>

						<i class="fa-solid fa-angle-right"></i>
					</button>
				</div>

				<div class="settings__btn">
					<a href="#" class="btn settings-save">Save</a>
					<a class="btn settings-close">Cancel</a>
				</div>
			</div>
		</div> -->

		<div class="changePassword" id="changePassword">
			<form action="./change-p.php" method="post" class="changePassword__wrapper">
				<h2>Change Password</h2>

				<div class="changePassword__input">

					<?php if (isset($_GET['error'])) { ?>
						<p class="errorPW"><?php echo $_GET['error']; ?></p>
					<?php } ?>

					<?php if (isset($_GET['success'])) { ?>
						<p class="successPW"><?php echo $_GET['success']; ?></p>
					<?php } ?>

					<div class="inputGroup">
						<label>Current Password: <span>*</span></label>
						<input type="password" name="changePassword-current-password" class="changePassword-current-password" id="changePassword-current-password" />
					</div>

					<div class="inputGroup">
						<label>New Password: <span>*</span></label>
						<input type="password" name="changePassword-new-password" class="changePassword-new-password" id="changePassword-new-password" />
					</div>

					<div class="inputGroup">
						<label>Confirm New Password: <span>*</span></label>
						<input type="password" name="changePassword-confirmnew-password" class="changePassword-confirmnew-password" id="changePassword-confirmnew-password" />
					</div>
				</div>

				<div class="changePassword__btn">
					<button type="submit" class="btn btn-save btnSettings">Confirm</button>
					<a class="btn changePassword-close">Cancel</a>
				</div>
			</form>
		</div>

		<div class="logout">
			<div class="logout__wrapper">
				<h2>Are you sure you want to logout?</h2>

				<div class="logout__button">
					<a href="./logout.php" class="btn btn--transparent btn--blue">Yes</a>
					<a class="btn btn--transparent btn--red logout-close">No</a>
				</div>
			</div>
		</div>

		<div class="profile">
			<div class="profile__scroll">
				<div class="profile__wrapper">
					<a class="close-btn profile-close" title="Close Profile">&times;</a>

					<div class="profile__initial-info">
						<div class="profile_photo">
							<img src="./images/users/<?php echo $_SESSION['image_url'] ?>" alt="" />
						</div>

						<div class="banner__info">
							<div class="name_confirm">
								<h1 class="Name">
									<?php echo $_SESSION['first_name']; ?>
									<?php echo $_SESSION['middle_name']; ?>
									<?php echo $_SESSION['last_name']; ?>
								</h1>
							</div>
							<h2 class="Course"><?php echo $_SESSION['course'] ?></h2>
							<h2 class="Year"><?php echo $_SESSION['year_level'] ?></h2>

							<?php foreach ($enrolls as $index => $enroll) { ?>

								<h2 class="Semester"><?= $enroll['sem'] ?> <?= $enroll['school_year'] ?></h2>
								<h1 class="status"><?= $enroll['status'] ?></h1>

							<?php } ?>
						</div>
					</div>

					<div class="profile__student-information">
						<div class="profileTitle">
							<h3>STUDENT INFORMATION</h3>
						</div>

						<div class="profile__student-information__row">
							<div class="inputGroup">
								<h3>Last Name: <span>*</span></h3>
								<input type="text" class="profile-lastname" value="<?php echo $_SESSION['last_name']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>First Name: <span>*</span></h3>
								<input type="text" class="profile-firstname" value="<?php echo $_SESSION['first_name']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Middle Name: <span>*</span></h3>
								<input type="text" class="profile-lastname" value="<?php echo $_SESSION['middle_name']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Name Suffix:</h3>

								<div class="styled-select">
									<select id="select-nameSuffix" name="select">
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

						<div class="profile__student-information__row">
							<div class="inputGroup">
								<h3>Birth Date: <span>*</span></h3>
								<input type="text" class="profile-birthdate" value="<?php echo $_SESSION['birth_date']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Age:</h3>
								<input type="text" class="profile-age" value="<?php echo $_SESSION['age']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Birth Place: <span>*</span></h3>
								<input type="text" class="profile-birthplace" value="<?php echo $_SESSION['birth_place']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Gender: <span>*</span></h3>
								<div class="styled-select">
									<select id="select-gender" name="select">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
						</div>

						<div class="profile__student-information__row">
							<div class="inputGroup">
								<h3>Civil Status: <span>*</span></h3>
								<input type="text" class="profile-civstat" value="<?php echo $_SESSION['civil_status']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Nationality: <span>*</span></h3>
								<input type="text" class="profile-civstat" value="<?php echo $_SESSION['nationality']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Religion: <span>*</span></h3>
								<input type="text" class="profile-civstat" value="<?php echo $_SESSION['religion']; ?>" />
							</div>
						</div>
					</div>

					<div class="profile__add-cont-info">
						<div class="profileTitle">
							<h3>ADDRESS AND CONTACT INFORMATION</h3>
						</div>

						<div class="profile__student-information__row">
							<div class="inputGroup">
								<h3>Home Address: <span>*</span></h3>
								<input type="text" class="profile-homeadd" value="<?php echo $_SESSION['home_address']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Zip Code: <span>*</span></h3>
								<input type="text" class="profile-zipcode" value="<?php echo $_SESSION['zip_code']; ?>" />
							</div>
						</div>

						<div class="profile__student-information__row">
							<div class="inputGroup">
								<h3>Home Contact No.: <span>*</span></h3>
								<input type="text" class="profile-homecontno" value="<?php echo $_SESSION['home_contact_no']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Email: <span>*</span></h3>
								<input type="text" class="profile-email" value="<?php echo $_SESSION['email']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Mobile No.: (ex. 09123456789): <span>*</span></h3>
								<input type="text" class="profile-mobno" value="<?php echo $_SESSION['mobile_no']; ?>" />
							</div>
						</div>

						<div class="profile__student-information__row">
							<div class="inputGroup">
								<h3>Social Media Profile URL/Link (alternative means of communication):</h3>
								<input type="text" class="profile-socmed" value="<?php echo $_SESSION['socmed_profile']; ?>" />
							</div>
						</div>
					</div>

					<div class="profile__parents">
						<div class="profileTitle">
							<h3>PARENTS</h3>
						</div>

						<div class="profile__student-information__row">
							<div class="inputGroup">
								<h3>Father's Name: <span>*</span></h3>
								<input type="text" class="profile-parentname" value="<?php echo $_SESSION['father_name']; ?>" />
							</div>

							<div class="inputGroup">
								<h3>Mother's Name: <span>*</span></h3>
								<input type="text" class="profile-parentname" value="<?php echo $_SESSION['mother_name']; ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="grades">
			<div class="grades__scroll">
				<div class="grades__wrapper">
					<a class="close-btn grades-close" title="Close Grades">&times;</a>

					<div class="inputGroup">

						<select id="select-GradesYear" name="select">
							<option value="First Year" class="btnFirst">First Year</option>
							<option value="Second Year" class="btnSecond">Second Year</option>
							<option value="Third Year" class="btnThird" selected>Third Year</option>
							<option value="Fourth Year" class="btnFourth">Fourth Year</option>
						</select>

					</div>

					<table id="TableYear1" class="year1 inactive">
						<thead>
							<tr>
								<th>Code</th>
								<th>Subject</th>
								<th>Units</th>
								<th>Semester</th>
								<th>Grade</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>GE 101</td>
								<td>Purposive Communication</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>GE 102</td>
								<td>Readings in Philippine History</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>GE 103</td>
								<td>Mathematics in the Modern World</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C101</td>
								<td>Introduction to Computing (lec/lab)</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C102</td>
								<td>Computer Programming 1 (lec/lab)</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>FIL 111</td>
								<td>Kumunikasyon sa Akademikong Filipino</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>NSTP 111</td>
								<td>NSTP - Civic Welfare Training Service 1</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>PE 111</td>
								<td>Individual/Dual Sports 1</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>GE 104</td>
								<td>Art Appreciation</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>FIL 112</td>
								<td>Pagbasa at Pagsulat Tungo sa Pananaliksik</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C103</td>
								<td>Computer Programming 2 (lec/lab)</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C104</td>
								<td>Data Structures and Algorithms (lec/lab)</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C101</td>
								<td>Discrete Structures 1</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C102</td>
								<td>Web Development</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>NSTP 112</td>
								<td>NSTP - Civic Welfare Training Service 2</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>PE 112</td>
								<td>Individual/Dual Sports 2</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>
						</tbody>
					</table>

					<table id="TableYear2" class="year2 inactive">
						<thead>
							<tr>
								<th>Code</th>
								<th>Subject</th>
								<th>Units</th>
								<th>Semester</th>
								<th>Grade</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>GE 105</td>
								<td>Understanding the Self</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>GE 106</td>
								<td>ETHICS</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C101</td>
								<td>Information Management (lec/lab)</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE C106</td>
								<td>Application Dev't and Emerging Technology (lec/lab)</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE P102</td>
								<td>Digital Logic Design</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE P102</td>
								<td>Discrete Structures 2</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ACCTG 111</td>
								<td>Fundamentals of Accounting</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>PE 113</td>
								<td>Group Sports 1</td>
								<td>3</td>
								<td>FIRST</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE P203</td>
								<td>Analysis and Design of Algorithms (lec/lab)</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE P204</td>
								<td>Object Oriented Programming (lec/lab)</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE P205</td>
								<td>Computer Organization and Architecture (lec/lab)</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>GE 108</td>
								<td>Science, Technology, and Society</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>ITE P206</td>
								<td>Social issues and Professional Practice</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>MATH 221</td>
								<td>Statistics and Probabilities</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>

							<tr>
								<td>PE 114</td>
								<td>Group Sport 2</td>
								<td>3</td>
								<td>SECOND</td>
								<td>90</td>
							</tr>
						</tbody>
					</table>

					<table id="TableYear3" class="year3 active">
						<thead>
							<tr>
								<th>Code</th>
								<th>Subject</th>
								<th>Units</th>
								<th>Semester</th>
								<th>Grade</th>
							</tr>
						</thead>

						<tbody>

							<?php foreach ($grades as $index => $grade) { ?>

								<tr>
									<td class="code"><?= $grade['code'] ?></td>
									<td class="subject_name"><?= $grade['subject_name'] ?></td>
									<td class="units"><?= $grade['units'] ?></td>
									<td class="semester"><?= $grade['semester'] ?></td>
									<td class="grade"><?= $grade['grade'] ?></td>
								</tr>

							<?php } ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>

		<div class="prerequisites">
			<div class="prerequisites__scroll">
				<div class="prerequisites__wrapper">
					<a class="close-btn prerequisites-close" title="Close prerequisites">&times;</a>

					<div class="prerequisites__cmb">
						<div class="inputGroup">
							<select id="select-course" name="course">
								<option value="">Course</option>
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

						<div class="inputGroup">
							<select id="select-year-level" name="year-level">
								<option value="">Year</option>
								<option value="1st Year">1st Year</option>
								<option value="2nd Year">2nd Year</option>
								<option value="3rd Year">3rd Year</option>
								<option value="4th Year">4th Year</option>
							</select>
						</div>

						<div class="inputGroup">
							<select id="select-year-level" name="semester">
								<option value="">Semester</option>
								<option value="1st Year">1st Year</option>
								<option value="2nd Year">2nd Year</option>
								<option value="3rd Year">3rd Year</option>
								<option value="4th Year">4th Year</option>
							</select>
						</div>
					</div>

					<div class="prerequisites__title">
						<h3>THIRD YEAR</h3>
					</div>

					<div class="prerequisites__table">
						<table id="TableYear1" class="year1 inactive">
							<thead>
								<tr>
									<th>Subject Code</th>
									<th>Subject Name</th>
									<th>Units</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($grades as $index => $grade) { ?>

									<tr>
										<td class="code"><?= $grade['code'] ?></td>
										<td class="subject_name"><?= $grade['subject_name'] ?></td>
										<td class="units"><?= $grade['units'] ?></td>
									</tr>

								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="regcard">
			<div class="regcard__scroll">
				<div class="regcard__wrapper">
					<a class="close-btn regcard-close" title="Close registration card">&times;</a>

					<div class="regcard__title">
						<h2>Registration Card</h2>
					</div>

					<div class="regcard__img">
						<?php foreach ($reg_cards as $index => $reg_card) { ?>
							<img src="./images/regcard/<?= $reg_card['reg_pic'] ?>" alt="">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="subjects">
			<div class="subjects__scroll">
				<div class="subjects__wrapper">
					<a class="close-btn subjects-close" title="Close Subjects">&times;</a>

					<ul class="subjects__content">

						<?php foreach ($grades as $index => $grade) { ?>

							<li class="subjects__content__card">
								<div class="subjects__content__card__img">
									<img src="./images/profpic/<?= $grade['prof_pic'] ?>" alt="" />
								</div>

								<div class="subjects__content__card__subjects">
									<div class="subjects__content__card__subjects__name">
										<h2 class="subject_name"><?= $grade['subject_name'] ?></h2>
										<h3 class="units">(<?= $grade['units'] ?> Units)</h3>
									</div>

									<div class="subjects__content__card__subjects__profname">
										<h2 class="prof"><?= $grade['prof'] ?></h2>
									</div>

									<div class="subjects__content__card__subjects__time">
										<h3>Monday</h3>
										<h4>10:00AM - 12:00AM & 1:00PM - 4:00PM</h4>
									</div>
								</div>
							</li>

						<?php } ?>


						<!-- 
						<li class="subjects__content__card">
							<div class="subjects__content__card__img">
								<img src="./images/kumar.png" alt="">
							</div>

							<div class="subjects__content__card__subjects">
								<div class="subjects__content__card__subjects__name">
									<h2>ITE P305 - Operating Systems</h2>
									<h3>(3 Units)</h3>
								</div>

								<div class="subjects__content__card__subjects__profname">
									<h2>Kumar, Gunda Anjit Dheeraj Abhishek</h2>
								</div>

								<div class="subjects__content__card__subjects__time">
									<h3>Monday</h3>
									<h4>10:00AM - 12:00AM & 1:00PM - 4:00PM</h4>
								</div>
							</div>
						</li>

						<li class="subjects__content__card">
							<div class="subjects__content__card__img">
								<img src="./images/winters.png" alt="">
							</div>

							<div class="subjects__content__card__subjects">
								<div class="subjects__content__card__subjects__name">
									<h2>ITE P301 - Automata Theory and Formal Languages</h2>
									<h3>(3 Units)</h3>
								</div>

								<div class="subjects__content__card__subjects__profname">
									<h2>Winters, Henri</h2>
								</div>

								<div class="subjects__content__card__subjects__time">
									<h3>Monday</h3>
									<h4>10:00AM - 12:00AM & 1:00PM - 4:00PM</h4>
								</div>
							</div>
						</li>

						<li class="subjects__content__card">
							<div class="subjects__content__card__img">
								<img src="./images/steinberg.png" alt="">
							</div>

							<div class="subjects__content__card__subjects">
								<div class="subjects__content__card__subjects__name">
									<h2>ITE P303 - Software Engineering</h2>
									<h3>(3 Units)</h3>
								</div>

								<div class="subjects__content__card__subjects__profname">
									<h2>Dr. Steinberg, Benjamin H.</h2>
								</div>

								<div class="subjects__content__card__subjects__time">
									<h3>Monday</h3>
									<h4>10:00AM - 12:00AM & 1:00PM - 4:00PM</h4>
								</div>
							</div>
						</li>

						<li class="subjects__content__card">
							<div class="subjects__content__card__img">
								<img src="./images/sofia.png" alt="">
							</div>

							<div class="subjects__content__card__subjects">
								<div class="subjects__content__card__subjects__name">
									<h2>ITE P304 - Human Computer Interaction</h2>
									<h3>(3 Units)</h3>
								</div>

								<div class="subjects__content__card__subjects__profname">
									<h2>Bellini, Sofia</h2>
								</div>

								<div class="subjects__content__card__subjects__time">
									<h3>Monday</h3>
									<h4>10:00AM - 12:00AM & 1:00PM - 4:00PM</h4>
								</div>
							</div>
						</li>

						<li class="subjects__content__card">
							<div class="subjects__content__card__img">
								<img src="./images/yu.png" alt="">
							</div>

							<div class="subjects__content__card__subjects">
								<div class="subjects__content__card__subjects__name">
									<h2>FL 111-1 - Basic Nihongo</h2>
									<h3>(3 Units)</h3>
								</div>

								<div class="subjects__content__card__subjects__profname">
									<h2>Narukami, Yu</h2>
								</div>

								<div class="subjects__content__card__subjects__time">
									<h3>Monday</h3>
									<h4>10:00AM - 12:00AM & 1:00PM - 4:00PM</h4>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
		</div>

		<div class="registration">
			<div class="registration__scroll">
				<form action="./status.php" method="post" class="registration__wrapper">
					<a class="close-btn registration-close" title="Close Registration">&times;</a>

					<div class="student-info">
						<h3 class="name">
							<?php echo $_SESSION['last_name']; ?>,
							<?php echo $_SESSION['first_name']; ?>
							<?php echo $_SESSION['middle_name']; ?>
						</h3>

						<h3><?php echo $_SESSION['course'] ?> - <?php echo $_SESSION['year_level'] ?> | Student No.: C21-0118</h3>
					</div>

					<div class="registration-details">
						<h3 class="regtail">REGISTRATION DETAILS</h3>

						<?php foreach ($enrolls as $index => $enroll) { ?>

							<div class="registration-details__row">
								<div class="inputGroup">
									<h3 for="register-as" class="register-label">Register as:</h3>

									<select id="select-register-as" name="register-as" disabled="">
										<option value="<?= $enroll['registered_as'] ?>"><?= $enroll['registered_as'] ?></option>
									</select>
								</div>

								<div class="inputGroup">
									<h3 for="school-year" class="register-label">School Year:</h3>

									<input type="text" class="school-year" name="school-year" value="<?= $enroll['school_year'] ?>" disabled />


								</div>

								<div class="inputGroup">
									<h3 for="sem-term" class="register-label">Semester/Term:</h3>

									<input type="text" class="sem-term" name="sem-term" value="<?= $enroll['semester_term'] ?>" disabled />


								</div>
							</div>

							<div class="registration-details__row2">
								<div class="inputGroup">
									<h3 for="year-level" class="register-label">Year Level:</h3>

									<select id="select-year-level" name="year-level">
										<option value="">-Select-</option>
										<option value="1st Year">1st Year</option>
										<option value="2nd Year">2nd Year</option>
										<option value="3rd Year">3rd Year</option>
										<option value="4th Year">4th Year</option>
									</select>
								</div>

								<div class="inputGroup">
									<h3 for="course" class="register-label">Course:</h3>

									<select id="select-course" name="course">
										<option value="<?php echo $_SESSION['course'] ?>"><?php echo $_SESSION['course'] ?></option>
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

						<?php } ?>
					</div>

					<div class="registration-submit">
						<button class="reg-submit">Submit</button>
					</div>
				</form>
			</div>
		</div>

		<div class="balanceInquiry">
			<div class="balanceInquiry__scroll">
				<div class="balanceInquiry__wrapper">
					<a class="close-btn balanceinquiry-close" title="Close Registration">&times;</a>

					<h2>Balance Inquiry</h2>

					<table id="balinq" class="balinq">
						<thead>
							<tr>
								<th colspan="2">Officially Enrolled</th>
							</tr>

							<tr>
								<th class="bal_tab_clr">2023-2024</th>
								<th class="bal_tab_clr">2nd Semester</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Prelims</td>
								<td class="texend">100,000.00</td>
							</tr>

							<tr>
								<td>Midterms</td>
								<td class="texend">100,000.00</td>
							</tr>

							<tr>
								<td>Semifinals</td>
								<td class="texend">100,000.00</td>
							</tr>

							<tr>
								<td>Finals</td>
								<td class="texend">100,000.00</td>
							</tr>

							<tr>
								<td>Miscellaneous</td>
								<td class="texend">100,000.00</td>
							</tr>

							<tr>
								<td>Total Balance</td>
								<td class="texend">500,000.00</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="payment">
			<div class="payment__scroll">
				<div class="payment__wrapper">
					<a class="close-btn payment-close" title="Close Payment">&times;</a>

					<div class="payment__options">
						<div class="payment__options__btn">
							<button class="gcash active"><i class="fa-regular fa-circle-dot gcash_dot"></i>Gcash</button>
							<button class="creditcard inactive"><i class="fa-regular fa-circle creditcard_dot"></i>Credit Card</button>
							<button class="banktransfer inactive"><i class="fa-regular fa-circle banktransfer_dot"></i>Bank Transfer</button>
						</div>

						<button class="ewannnnsd">
							<span></span>
						</button>
					</div>

					<div class="viewGcash active">
						<p class="checkout">Checkout</p>

						<div class="gcash_next active">
							<div class="gcash_next_center">
								<div class="gcash_next_merchant">
									<p>Merchant</p>
									<p>ISCTP</p>
								</div>

								<div class="gcash_next_amountdue">
									<p>Amount Due</p>
									<span>PHP 1000.00</span>
								</div>
							</div>

							<p class="logtopayg">Login to pay with GCash</p>

							<div class="gcash_next_mobnum">
								<p class="mobnum">Mobile Number</p>
								<p>+63 921 347 6530</p>
							</div>

							<div class="gcash_nextbtn">
								<button class="gcashpay">Next</button>
							</div>
						</div>

						<div class="gcash_pay inactive">
							<div class="gcashreturrn">
								<i class="fa-solid fa-angle-left"></i>
							</div>

							<p class="isctpcenter">ISCTP</p>

							<p>PAY WITH</p>

							<div class="gcash_pay_gcashbalance">
								<p>GCASH</p>
								<p>PHP 5,400.00</p>
							</div>

							<p class="availbal">Available Balance</p>

							<p class="yaatp">YOU ARE ABOUT TO PAY</p>

							<div class="gcash_pay_amount">
								<p class="amm">Amount</p>
								<p>PHP 1000.00</p>
							</div>

							<button class="lineeee"><span></span></button>

							<div class="gcash_pay_total">
								<p class="amm">Total</p>
								<p>PHP 1000.00</p>
							</div>

							<p class="dwads">Please review to ensure that the details are correct before you proceed </p>

							<div class="gcash_paybtn">
								<button class="gcashpay gsuccess">PAY PHP 1000.00</button>
							</div>
						</div>

						<div class="gcash_success">
							<div class="gcash_success_scroll">
								<div class="gcash_success_wrapper">
									<h2>Payment Successful</h2>

									<div class="gcash_success_bg">
										<div class="gcash_success_bg_check">
											<i class="fa-solid fa-check"></i>
										</div>
									</div>

									<div class="gcash_success_btn">
										<button class="gcash_success_baaa">Return</button>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="viewCreditcard inactive">
						<p class="checkout">Checkout</p>

						<div class="creditcard_input">
							<div class="inputGroup">
								<p>Account Name</p>

								<input type="text">
							</div>

							<div class="inputGroup">
								<p>Card Number</p>

								<input type="text">
							</div>

							<div class="expicvs">
								<div class="inputGroup">
									<p>Expiry</p>

									<input class="vbexp" type="text">
								</div>

								<div class="inputGroup">
									<p>CVC</p>

									<input class="vbexp" type="text">
								</div>
							</div>

							<div class="checkremeber">
								<button class="dawd"><i class="checkkkk fa-solid fa-check"></i><span></span></button>
								<p>Remember bank card</p>
							</div>

						</div>

						<div class="creditcard_paynowbtn">
							<button>Pay Now</button>
						</div>

						<div class="ccard_success">
							<div class="ccard_success_scroll">
								<div class="ccard_success_wrapper">
									<h2>Payment Successful</h2>

									<div class="ccard_success_bg">
										<div class="ccard_success_bg_check">
											<i class="fa-solid fa-check"></i>
										</div>
									</div>

									<div class="ccard_success_btn">
										<button class="ccard_success_baaa">Return</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="viewBanktransfer inactive">
						<div class="viewBanktransfer__flex">
							<div class="viewBanktransfer__btransfer">
								<h3>Bank Transfer</h3>

								<p class="lnh">Please make a payment to the following bank account in the amount of the chosen package price.</p>

								<p class="lnh">RCBC over-the-counter payment / Online Bank Transfer:</p>

								<p>Account Name - Laguna College, Inc.</p>
								<p>Account Number - 019100682176</p>
								<p>Account Type - Savings Account</p>
								<p>Bank Name - RCBC San Pablo City</p>
								<p>Beneficiary Name - GROWTHNEXT FZC</p>
								<p>Email - acctg.section.lc@gmail.com</p>
							</div>

							<button class="ewannnnsd">
								<span></span>
							</button>

							<div class="viewBanktransfer__checkout">
								<p class="checkout">Checkout</p>

								<h3>Upload The Proof of Your Payment <span>*</span></h3>

								<h4 class="fwnor">Ex. Bank Transfer Receipt Screenshot</h4>

								<div class="viewBanktransfer__checkout__browsefile">
									<div class="check_icon">
										<img src="./images/cloud.png" alt="">
									</div>

									<h4 class="mg1">Choose a file or drag & drop it here</h4>

									<h4 class="mg2">JPEG, PNG, PDF</h4>

									<a href="" class="browsefuke">Browse File</a>
								</div>

								<div class="creditcard_input">
									<div class="inputGroup">
										<p>Full Name</p>

										<input type="text">
									</div>

									<div class="inputGroup">
										<p>Email Address</p>

										<input type="text">
									</div>

									<div class="expicvs">
										<div class="inputGroup">
											<p>Year</p>

											<input class="vbexp" type="text">
										</div>

										<div class="inputGroup">
											<p>Course</p>

											<input class="vbexp" type="text">
										</div>
									</div>

									<div class="btansfer__chekkkk">
										<button class="dawcsac"><i class="btanschekk fa-solid fa-check"></i><span></span></button>
										<p>I declare that I have read and agreed with <span class="dwasdac">Terms and Conditions, Disclosure Statement &Privacy Policy</span></p>
									</div>
								</div>

								<div class="btranster_conpay">
									<button>Confirm Payment</button>
								</div>

								<div class="btransfer_success">
									<div class="btransfer_success_scroll">
										<div class="btransfer_success_wrapper">
											<h2>Payment Successful</h2>

											<div class="btransfer_success_bg">
												<div class="btransfer_success_bg_check">
													<i class="fa-solid fa-check"></i>
												</div>
											</div>

											<div class="btransfer_success_btn">
												<button class="btransfer_success_baaa">Return</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>

	<script src="./js/script.js"></script>

	</html>

<?php
} else {
	header("Location: index.php");
	exit();
}
?>