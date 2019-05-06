$(document).ready( function () {
	$('#mydata').DataTable();
});


function contact_read(id) {
	window.location.href = base_url+"admin/"+"contact/"+"message/"+id;
};



function view(nim) {
	window.location.href = base_url+"profile/"+nim;
};

function edit(nim) {
	window.location.href = base_url+"update/"+nim;
};

function del(nim) {
	swal({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			swal(
				'Deleted!',
				'Your file has been deleted.',
				'success'
				).then(function() {
					window.location.href = base_url+"input/delete/"+nim
				});
			}
		})
};


// ====================== Login Area ======================

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function showPassword() {
	$(".toggle-password").toggleClass("fa-eye fa-eye-slash");
	var x = document.getElementById('login-password');
	if(x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}

// ================== End of Login Area ===================




// ========================= Ripple Effect ========================

const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
	button.addEventListener('click', function(e) {
		let x = e.clientX;
		let y = e.clientY;
		let buttonTop = e.target.offsetTop;
		let buttonLeft = e.target.offsetLeft;
		let xInside = x - buttonLeft;
		let yInside = y - buttonTop;

		let circle = document.createElement('span');
		circle.classList.add('circle');
		circle.style.top = yInside + 'px';
		circle.style.left = xInside + 'px';

        this.appendChild(circle);
        setTimeout(() => {
            circle.remove();
        }, 500);
	});
});

// ==================== End of Ripple Effect =====================