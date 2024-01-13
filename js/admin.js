const viewGrades = document.querySelector('.viewGrades');
const viewBalance = document.querySelector('.viewBalance');
const viewRegcard = document.querySelector('.viewRegcard');

const content__grades = document.querySelector('.content__grades');
const content__balance = document.querySelector('.content__balance');
const content__regcard = document.querySelector('.content__regcard');

viewGrades.addEventListener('click', () => {
	if (
		!content__balance.classList.contains('inactive') ||
		!content__regcard.classList.contains('inactive') && !content__grades.classList.contains('active')
	) {
		// REMOVE ACTIVE AND ADD INACTIVE
		content__balance.classList.remove('active');
		content__balance.classList.add('inactive');

		content__regcard.classList.remove('active');
		content__regcard.classList.add('inactive');

		viewBalance.classList.remove('active');
		viewBalance.classList.add('inactive');

		viewRegcard.classList.remove('active');
		viewRegcard.classList.add('inactive');

		// REMOVE INACTIVE AND ADD ACTIVE
		content__grades.classList.remove('inactive');
		content__grades.classList.add('active');

		viewGrades.classList.remove('inactive');
		viewGrades.classList.add('active');
	}
});

viewBalance.addEventListener('click', () => {
	if (
		!content__grades.classList.contains('inactive') ||
		!content__regcard.classList.contains('inactive') && !content__balance.classList.contains('active')
	) {
		// REMOVE ACTIVE AND ADD INACTIVE
		content__grades.classList.remove('active');
		content__grades.classList.add('inactive');

		content__regcard.classList.remove('active');
		content__regcard.classList.add('inactive');

		viewGrades.classList.remove('active');
		viewGrades.classList.add('inactive');

		viewRegcard.classList.remove('active');
		viewRegcard.classList.add('inactive');

		// REMOVE INACTIVE AND ADD ACTIVE
		content__balance.classList.remove('inactive');
		content__balance.classList.add('active');

		viewBalance.classList.remove('inactive');
		viewBalance.classList.add('active');
	}
});

viewRegcard.addEventListener('click', () => {
	if (
		!content__grades.classList.contains('inactive') ||
		!content__balance.classList.contains('inactive') && !content__regcard.classList.contains('active')
	) {
		// REMOVE ACTIVE AND ADD INACTIVE
		content__grades.classList.remove('active');
		content__grades.classList.add('inactive');

		content__balance.classList.remove('active');
		content__balance.classList.add('inactive');

		viewGrades.classList.remove('active');
		viewGrades.classList.add('inactive');

		viewBalance.classList.remove('active');
		viewBalance.classList.add('inactive');

		// REMOVE INACTIVE AND ADD ACTIVE
		content__regcard.classList.remove('inactive');
		content__regcard.classList.add('active');

		viewRegcard.classList.remove('inactive');
		viewRegcard.classList.add('active');
	}
});




const viewSubjects = document.querySelector('.viewSubjects');
const addSubjects = document.querySelector('.addSubjects');
const view_subjects = document.querySelector('.view_subjects');
const add_subjects = document.querySelector('.add_subjects');

viewSubjects.addEventListener('click', () => {
	if (!add_subjects.classList.contains('inactive') && !view_subjects.classList.contains('active')) {
		add_subjects.classList.remove('active');
		add_subjects.classList.add('inactive');

		addSubjects.classList.remove('active');
		addSubjects.classList.add('inactive');

		view_subjects.classList.remove('inactive');
		view_subjects.classList.add('active');

		viewSubjects.classList.remove('inactive');
		viewSubjects.classList.add('active');
	}
});

addSubjects.addEventListener('click', () => {
	if (!view_subjects.classList.contains('inactive') && !add_subjects.classList.contains('active')) {
		add_subjects.classList.remove('inactive');
		add_subjects.classList.add('active');

		addSubjects.classList.remove('inactive');
		addSubjects.classList.add('active');

		view_subjects.classList.remove('active');
		view_subjects.classList.add('inactive');

		viewSubjects.classList.remove('active');
		viewSubjects.classList.add('inactive');
	}
});
