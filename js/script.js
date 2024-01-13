// 	PROFILE
const btnProfile = document.querySelector('.btn-feature-profile');
const overlayProfile = document.querySelector('.profile');

btnProfile.addEventListener('click', () => {
	overlayProfile.classList.toggle('open');

	const close = document.querySelector('.profile-close');
	close.addEventListener('click', () => {
		overlayProfile.classList.toggle('open');
		location.reload();
	});
});



// 	GRADES
const btnGrades = document.querySelector('.btn-feature-grades');
const overlayGrades = document.querySelector('.grades');

btnGrades.addEventListener('click', () => {
	overlayGrades.classList.toggle('open');

	const close = document.querySelector('.grades-close');
	close.addEventListener('click', () => {
		overlayGrades.classList.toggle('open');
		location.reload();
	});
});



// 	GRADES TABLE
const btnFirst = document.querySelector('.btnFirst');
const btnSecond = document.querySelector('.btnSecond');
const btnThird = document.querySelector('.btnThird');

const year1 = document.querySelector('.year1');
const year2 = document.querySelector('.year2');
const year3 = document.querySelector('.year3');

btnFirst.addEventListener('click', () => {
	if (
		!year2.classList.contains('inactive') ||
		!year3.classList.contains('inactive') && !year1.classList.contains('active')
	) {
		year2.classList.remove('active');
		year2.classList.add('inactive');

		year3.classList.remove('active');
		year3.classList.add('inactive');

		year1.classList.remove('inactive');
		year1.classList.add('active');
	}
});

btnSecond.addEventListener('click', () => {
	if (
		!year1.classList.contains('inactive') ||
		!year3.classList.contains('inactive') && !year2.classList.contains('active')
	) {
		year1.classList.remove('active');
		year1.classList.add('inactive');

		year3.classList.remove('active');
		year3.classList.add('inactive');

		year2.classList.remove('inactive');
		year2.classList.add('active');
	}
});

btnThird.addEventListener('click', () => {
	if (
		!year1.classList.contains('inactive') ||
		!year2.classList.contains('inactive') && !year3.classList.contains('active')
	) {
		year1.classList.remove('active');
		year1.classList.add('inactive');

		year2.classList.remove('active');
		year2.classList.add('inactive');

		year3.classList.remove('inactive');
		year3.classList.add('active');
	}
});



// 	SUBJECTS
const btnSubjects = document.querySelector('.btn-feature-subjects');
const overlaySubjects = document.querySelector('.subjects');

btnSubjects.addEventListener('click', () => {
	overlaySubjects.classList.toggle('open');

	const close = document.querySelector('.subjects-close');
	close.addEventListener('click', () => {
		overlaySubjects.classList.toggle('open');
		location.reload();
	});
});




// 	REGISTRATION
const btnRegistration = document.querySelector('.btn-feature-registration');
const overlayRegistration = document.querySelector('.registration');

btnRegistration.addEventListener('click', () => {
	overlayRegistration.classList.toggle('open');

	const close = document.querySelector('.registration-close');
	close.addEventListener('click', () => {
		overlayRegistration.classList.toggle('open');
		location.reload();
	});
});



// 	BALANCE INQUIRY
// const btnbalanceinquiry = document.querySelector('.btn-feature-balanceinquiry');
// const overlaybalanceinquiry = document.querySelector('.balanceInquiry');

// btnbalanceinquiry.addEventListener('click', () => {
// 	overlaybalanceinquiry.classList.toggle('open');

// 	const close = document.querySelector('.balanceinquiry-close');
// 	close.addEventListener('click', () => {
// 		overlaybalanceinquiry.classList.toggle('open');
// 		location.reload();
// 	});
// });




// 	PAYMENT
const btnPayment = document.querySelector('.btn-feature-payment');
const overlayPayment = document.querySelector('.payment');

btnPayment.addEventListener('click', () => {
	overlayPayment.classList.toggle('open');

	const close = document.querySelector('.payment-close');
	close.addEventListener('click', () => {
		overlayPayment.classList.toggle('open');
		location.reload();
	});
});




// GCASH CREDITCARD BANKTRANSFER
const btnGcash = document.querySelector('.gcash');
const btnCreditcard = document.querySelector('.creditcard');
const btnBanktransfer = document.querySelector('.banktransfer');

const gcash_dot = document.querySelector('.gcash_dot');
const creditcard_dot = document.querySelector('.creditcard_dot');
const banktransfer_dot = document.querySelector('.banktransfer_dot');

const viewGcash = document.querySelector('.viewGcash');
const viewCreditcard = document.querySelector('.viewCreditcard');
const viewBanktransfer = document.querySelector('.viewBanktransfer');

btnGcash.addEventListener('click', () => {
	if (
		!viewCreditcard.classList.contains('inactive') ||
		!viewBanktransfer.classList.contains('inactive') && !viewGcash.classList.contains('active')
	) {
		viewCreditcard.classList.remove('active');
		viewCreditcard.classList.add('inactive');

		btnCreditcard.classList.remove('active');
		btnCreditcard.classList.add('inactive');

		creditcard_dot.classList.remove('fa-circle-dot');
		creditcard_dot.classList.add('fa-circle');

		viewBanktransfer.classList.remove('active');
		viewBanktransfer.classList.add('inactive');

		btnBanktransfer.classList.remove('active');
		btnBanktransfer.classList.add('inactive');

		banktransfer_dot.classList.remove('fa-circle-dot');
		banktransfer_dot.classList.add('fa-circle');

		viewGcash.classList.remove('inactive');
		viewGcash.classList.add('active');

		btnGcash.classList.remove('inactive');
		btnGcash.classList.add('active');

		gcash_dot.classList.remove('fa-circle');
		gcash_dot.classList.add('fa-circle-dot');
	}
});

btnCreditcard.addEventListener('click', () => {
	if (
		!viewGcash.classList.contains('inactive') ||
		!viewBanktransfer.classList.contains('inactive') && !viewCreditcard.classList.contains('active')
	) {
		viewGcash.classList.remove('active');
		viewGcash.classList.add('inactive');

		btnGcash.classList.remove('active');
		btnGcash.classList.add('inactive');

		gcash_dot.classList.remove('fa-circle-dot');
		gcash_dot.classList.add('fa-circle');



		viewBanktransfer.classList.remove('active');
		viewBanktransfer.classList.add('inactive');

		btnBanktransfer.classList.remove('active');
		btnBanktransfer.classList.add('inactive');

		banktransfer_dot.classList.remove('fa-circle-dot');
		banktransfer_dot.classList.add('fa-circle');



		viewCreditcard.classList.remove('inactive');
		viewCreditcard.classList.add('active');

		btnCreditcard.classList.remove('inactive');
		btnCreditcard.classList.add('active');

		creditcard_dot.classList.remove('fa-circle');
		creditcard_dot.classList.add('fa-circle-dot');
	}
});

btnBanktransfer.addEventListener('click', () => {
	if (
		!viewGcash.classList.contains('inactive') ||
		!viewCreditcard.classList.contains('inactive') && !viewBanktransfer.classList.contains('active')
	) {
		viewGcash.classList.remove('active');
		viewGcash.classList.add('inactive');

		btnGcash.classList.remove('active');
		btnGcash.classList.add('inactive');

		gcash_dot.classList.remove('fa-circle-dot');
		gcash_dot.classList.add('fa-circle');



		viewCreditcard.classList.remove('active');
		viewCreditcard.classList.add('inactive');

		btnCreditcard.classList.remove('active');
		btnCreditcard.classList.add('inactive');

		creditcard_dot.classList.remove('fa-circle-dot');
		creditcard_dot.classList.add('fa-circle');



		viewBanktransfer.classList.remove('inactive');
		viewBanktransfer.classList.add('active');

		btnBanktransfer.classList.remove('inactive');
		btnBanktransfer.classList.add('active');

		banktransfer_dot.classList.remove('fa-circle');
		banktransfer_dot.classList.add('fa-circle-dot');
	}
});




//PAYMENT GCASH
const btnGcashreturn = document.querySelector('.gcashreturrn');
const btnGcashNext = document.querySelector('.gcash_nextbtn');

const gcashNext = document.querySelector('.gcash_next');
const gcashPay = document.querySelector('.gcash_pay');

btnGcashNext.addEventListener('click', () => {
	if (
		!gcashNext.classList.contains('inactive') && !gcashPay.classList.contains('active')
	) {
		gcashNext.classList.remove('active');
		gcashNext.classList.add('inactive');

		gcashPay.classList.remove('inactive');
		gcashPay.classList.add('active');
	}
});

btnGcashreturn.addEventListener('click', () => {
	if (
		!gcashPay.classList.contains('inactive') && !gcashNext.classList.contains('active')
	) {
		gcashPay.classList.remove('active');
		gcashPay.classList.add('inactive');

		gcashNext.classList.remove('inactive');
		gcashNext.classList.add('active');
	}
});


const checkremember = document.querySelector('.checkremeber');
const checkkkk = document.querySelector('.checkkkk');

checkremember.addEventListener('click', () => {
	checkkkk.classList.toggle('open');
})



// 	SETTTINGS
const btnSettings = document.querySelector('.btnSettings');
const overlaySettings = document.querySelector('.settings');

btnSettings.addEventListener('click', () => {
	overlaySettings.classList.toggle('open');

	const close = document.querySelector('.settings-close');
	close.addEventListener('click', () => {
		overlaySettings.classList.toggle('open');
		location.reload();
	});
});




// 	CHANGE PASSWORD
const btnChangePW = document.querySelector('.btn-changePW');
const overlayChangePW = document.querySelector('.changePassword');

btnChangePW.addEventListener('click', () => {
	overlayChangePW.classList.toggle('open');

	const close = document.querySelector('.changePassword-close');
	close.addEventListener('click', () => {
		overlayChangePW.classList.toggle('open');
		location.reload();
	});
});




// 	LOG OUT
const btnLogout = document.querySelector('.btnLogout');
const overlayLogout = document.querySelector('.logout');

btnLogout.addEventListener('click', () => {
	overlayLogout.classList.toggle('open');

	const close = document.querySelector('.logout-close');
	close.addEventListener('click', () => {
		overlayLogout.classList.toggle('open');
		location.reload();
	});
});




//	EYE ICON
// let eyeicon = document.getElementById('eyeicon');
// let password = document.getElementById('login-pw');

// eyeicon.addEventListener('click', () => {
// 	if (password.type == 'password') {
// 		password.type = 'text';
// 		eyeicon.src = './images/eye-solid.svg';
// 	} else {
// 		password.type = 'password';
// 		eyeicon.src = './images/eye-slash-solid.svg';
// 	}
// });

// let eyeicon = document.getElementById('eyeicon')
// let password = document.getElementById('login-pw');

// eyeicon.addEventListener('click', () => {
// 	if (password.type == 'password') {
// 		password.type = 'text';
// 		eyeicon.classList.remove = 'fa-solid fa-eye-slash';
// 		eyeicon.classList.add = 'fa-solid fa-eye';

// 	} else {
// 		password.type = 'password';
// 		eyeicon.classList.remove = 'fa-solid fa-eye';
// 		eyeicon.classList.add = 'fa-solid fa-eye-slash';
// 	}
// });

// EYE ICON
let eyeicon = document.querySelector('.eyeicon');
let password = document.querySelector('.login-pw');

eyeicon.addEventListener('click', () => {
	if(password.type == 'password') {
		password.type = 'text';
		eyeicon.classList.remove('fa-eye-slash');
		eyeicon.classList.add('fa-eye');
	} else {
		password.type = 'password';
		eyeicon.classList.remove('fa-eye');
		eyeicon.classList.add('fa-eye-slash');
	}
})


