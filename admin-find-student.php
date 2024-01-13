<?php

session_start();

include "db_conn.php";


$_SESSION['table'] = 'users';
// $user = $_SESSION['user'];
$users = include('show-students.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LC Admin</title>
	<link rel="icon" type="image/png" href="./images/logo.png" />
	<link rel="stylesheet" href="./css/main.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<div class="header__lc-logo">
					<a href="./admin-find-student.php" class="header__lc-logo__logo">
						<img src="./images/logo.png" alt="" />
					</a>

					<a href="./admin-find-student.php" class="header__lc-logo__lc">
						<h2>Laguna College</h2>
					</a>
				</div>

				<div class="header__account-logout">
					<a class="header__account-logout__accountSettings btnLogout">
						<i class="fa-sharp fa-solid fa-reply"></i>
						<p>Logout</p>
					</a>
				</div>
			</div>
		</div>
	</header>

	<div class="find-students">
		<div class="container">
			<!-- <div class="find-students__searchbar">
				<input type="text" placeholder="Enter student's name" />
				<a href="#">Search</a>
			</div> -->

			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Course</th>
						<th>Year Level</th>
						<th></th>
					</tr>
				</thead>
<!-- /$id_user = $user['id'] -->
				<tbody>
					<?php foreach ($users as $index => $user) { ?>

						<tr>
							<td><?= $index + 1 ?></td>
							<td><?= $user['last_name'] ?>, <?= $user['first_name'] ?> <?= $user['middle_name'] ?></td>
							<td><?= $user['course'] ?></td>
							<td><?= $user['year_level'] ?></td>

							<td><a href="./admin-edit-student.php" class="student-edit">VIEW</a></td>
						</tr>

					<?php } ?>

				</tbody>
			</table>
		</div>
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

	<div class="logout">
		<div class="logout__wrapper">
			<h2>Are you sure you want to logout?</h2>

			<div class="logout__button">
				<a href="./logout.php" class="btn btn--transparent btn--blue">Yes</a>
				<a class="btn btn--transparent btn--red logout-close">No</a>
			</div>
		</div>
	</div>
</body>

<script src="./js/script.js"></script>
<script src="./js/admin.js"></script>

</html>