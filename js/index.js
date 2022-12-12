$(window).scroll(function(){
			if ($(document).scrollTop() > 10) {
				let navbar = document.querySelector('.mynav');

				navbar.classList.add('new_mynav');
			}else{
				let navbar = document.querySelector('.mynav');

				navbar.classList.remove('new_mynav');
			}
		});