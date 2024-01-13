<?php

session_start();

$_SESSION['table'] = 'grades';

$grades = include('./show-grades.php');

// Default error to empty so we can customize it
$error_message = '';

if ($_POST) {
	include("connection.php");

	$subject_name = $_POST["subject_name"];
	$units = $_POST['units'];
	$code = $_POST['code'];
	$semester = $_POST['semester'];
	$grade = $_POST['grade'];

	if ($subject_name == '' || $units == '' || $code == '' || $semester == '' || $grade == '') {
		$error_message = 'Do not leave empty fields';
	} else header('Location: addGrades.php?subject_name=' . $subject_name . '&units=' . $units . '&code=' . $code . '&semester=' . $semester . '&grade=' . $grade);
} else;
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
					<a href="./admin-edit-student.php" class="header__lc-logo__logo">
						<img src="./images/logo.png" alt="" />
					</a>

					<a href="./admin-edit-student.php" class="header__lc-logo__lc">
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

	<div class="menu">
		<div class="container">
			<div class="menu__wrapper">
				<button class="viewGrades menu-btn active">
					<img src="./images/book-solid.svg" alt="" />
					Grades
				</button>

				<button class="viewBalance menu-btn inactive">
					<img src="./images/scale-balanced-solid.svg" alt="" />
					Balance Inquiry</button>

				<button class="viewRegcard menu-btn inactive">
					<img src="./images/address-card-solid.svg" alt="" />
					Registration Card</button>
			</div>
		</div>
	</div>

	<a href="./admin-find-student.php" class="back-btn">
		<i class="fa-solid fa-arrow-left"></i>
	</a>

	<div class="content">
		<div class="content__grades active">
			<div class="content__grades__header">
				<button class="grades-edit btn-viewsubjects viewSubjects tab-btn active">View Subject</button>
				<button class="grades-edit btn-addsubjects addSubjects tab-btn inactive">Add Subject</button>
			</div>

			<table class="view_subjects active" id="view_subjects">
				<thead>
					<tr>
						<th>Code</th>
						<th>Subject</th>
						<th>Units</th>
						<th>Semester</th>
						<th>Grade</th>
						<th>Action</th>
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
							<td>
								<span class="toggle-edit grades-edit editGrade" data-gradeid="<?= $grade['id'] ?>">EDIT</span>
								<span class="toggle-delete grades-edit deleteGrade" data-gradeid="<?= $grade['id'] ?>" data-subname="<?= $grade['subject_name'] ?>">
									DELETE
								</span>
							</td>
						</tr>

					<?php } ?>


				</tbody>
			</table>

			<div class="add_subjects inactive" id="add_subjects">
				<div class="add_subjects_wrapper">
					<form action="admin-edit-student.php" method="POST" class="add_subjects_wrapper_input">
						<div class="inputGroup">
							<label for="subject_name" class="register-label">Subject Name:</label>

							<input type="text" name="subject_name" id="subject_name" />
						</div>

						<div class="inputGroup">
							<label for="units" class="register-label">Units:</label>

							<input type="text" name="units" id="units" />
						</div>

						<div class="inputGroup">
							<label for="code" class="register-label">Code:</label>

							<input type="text" name="code" id="code" />
						</div>

						<div class="inputGroup">
							<label for="semester" class="register-label">Semester:</label>

							<input type="text" name="semester" id="semester" />
						</div>
					</form>

					<div class="grades-button">
						<button type="submit" class="grades-edit">Add</button>
					</div>

					<?php
					if (isset($_SESSION['response'])) {
						$response_message = $_SESSION['response']['message'];
						$is_success = $_SESSION['response']['success'];
					?>
						<div class="responseMessage">
							<p class="responseMessage <?= $is_success ? 'success' : 'error' ?>">
								<?= $response_message ?>
							</p>
						</div>
					<?php unset($_SESSION['response']);
					} ?>
				</div>
			</div>

			<!-- <div class="content__grades__save">
						<a href="#">Save</a>
					</div> -->
		</div>

		<div class="content__balance inactive">balance</div>

		<div class="content__regcard inactive">registration card</div>
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

	<div class="edit">
		<div class="edit__wrapper">
			<div class="edit__header">
				<h4>Edit Information</h4>
			</div>

			<div class="edit__body">
				<div class="edit__center">	
					<div class="edit_input">
						<div class="inputGroup">
							<label for="subject_name" class="register-label">Subject:</label>

							<input type="text" class="editsubject" id="edit-subject_name" />
						</div>
					</div>

					<div class="edit_input">
						<div class="inputGroup">
							<label for="code" class="register-label">Code:</label>

							<input type="text" id="edit-code" />
						</div>

						<div class="inputGroup">
							<label for="units" class="register-label">Units:</label>

							<input type="text" id="edit-units" />
						</div>
					</div>

					<div class="edit_input">
						<div class="inputGroup">
							<label for="semester" class="register-label">Semester:</label>

							<input type="text" id="edit-semester" />
						</div>

						<div class="inputGroup">
							<label for="grade" class="register-label">Grade:</label>

							<input type="text" id="edit-grade" />
						</div>
					</div>
				</div>
			</div>

			<div class="edit__button">
				<button class="btn btn--transparent btn--green edit-yes">Confirm</button>
				<button class="btn btn--transparent btn--red edit-no">Cancel</button>
			</div>
		</div>
	</div>


	<div class="delete">
		<div class="delete__wrapper">
			<h3>Are you sure you want to delete this subject?</h3>

			<div class="delete__button">
				<button class="btn btn--transparent btn--green grade-dl">Yes</button>
				<button class="btn btn--transparent btn--red grade-dl-no">No</button>
			</div>
		</div>
	</div>
</body>

<script src="./js/script.js"></script>
<script src="./js/admin.js"></script>
<script src="./js/jquery/jquery-3.7.1.min.js"></script>
<script>
	function script() {
		this.initialize = function() {
			this.registerEvents();
		};

		this.registerEvents = function() {
			document.addEventListener('click', function(e) {
				targetElement = e.target;
				classList = targetElement.classList;

				if (classList.contains('deleteGrade')) {
					const deleteOverlay = document.querySelector('.delete');
					gradeId = targetElement.dataset.gradeid;
					subname = targetElement.dataset.subname;

					deleteOverlay.classList.toggle('open');

					if (deleteOverlay.classList.contains('open')) {
						const confirm = document.querySelector('.grade-dl');
						const negative = document.querySelector('.grade-dl-no');

						confirm.addEventListener('click', () => {
							$.ajax({
								method: 'POST',
								data: {
									grade_id: gradeId,
									sub_name: subname,
								},
								url: 'delete-grade.php',
								dataType: 'json',
								success: function(data) {
									if (data.success) {
										location.reload();
										deleteOverlay.classList.toggle('open');
									} else {
										deleteOverlay.classList.toggle('open');
										window.alert(data.message);
									}
								},
							});
						});

						negative.addEventListener('click', () => {
							location.reload();
							deleteOverlay.classList.toggle('open');
						});
					}
				}

				if (classList.contains('editGrade')) {
					const editOverlay = document.querySelector(".edit");
					gradeId = targetElement.dataset.gradeid;

					e.preventDefault();

					editOverlay.classList.toggle("open");

					// Get data
					subject_name = targetElement.closest('tr').querySelector('td.subject_name').innerHTML;
					units = targetElement.closest('tr').querySelector('td.units').innerHTML;
					code = targetElement.closest('tr').querySelector('td.code').innerHTML;
					semester = targetElement.closest('tr').querySelector('td.semester').innerHTML;
					grade = targetElement.closest('tr').querySelector('td.grade').innerHTML;

					document.getElementById("edit-subject_name").value = subject_name;
					document.getElementById("edit-units").value = units;
					document.getElementById("edit-code").value = code;
					document.getElementById("edit-semester").value = semester;
					document.getElementById("edit-grade").value = grade;

					if (editOverlay.classList.contains("open")) {
						const confirm = document.querySelector(".edit-yes");
						const negative = document.querySelector(".edit-no");

						confirm.addEventListener("click", () => {
							subject_nameUp = document.getElementById("edit-subject_name").value;
							unitsUp = document.getElementById("edit-units").value;
							codeUp = document.getElementById("edit-code").value;
							semesterUp = document.getElementById("edit-semester").value;
							gradeUp = document.getElementById("edit-grade").value;

							$.ajax({
								method: 'POST',
								data: {
									grade_id: gradeId,
									grade_sub_name: subject_nameUp,
									grade_units: unitsUp,
									grade_code: codeUp,
									grade_semester: semesterUp,
									grade_grade: gradeUp

								},
								url: 'edit-grade.php',
								dataType: 'json',
								success: function(data) {
									if (data.success) {
										location.reload();
										editOverlay.classList.toggle('open');
									} else {
										editOverlay.classList.toggle('open');
										window.alert(data.message);
									}
								},
							});
						});

						negative.addEventListener('click', () => {
							location.reload();
							editOverlay.classList.toggle('open');
						});
					}
				}
			});
		};
	}

	var script = new script();
	script.initialize();
</script>

</html>