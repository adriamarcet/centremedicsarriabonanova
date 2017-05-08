// this is the document.ready code
$(document).ready( function(){

	/* Script for the main menu here */
	
		// The button that toggles the menu
		const toggleMenu = document.querySelector('.hamburger');
		// The main menu wrapper
		const mainMenu = document.querySelector('.main-menu');

		function showHideMenu(e){

			console.log(e);

			// Toggle the menu button as active
			toggleMenu.classList.toggle('is-active');
			/*
			if(mainMenu.style.display == 'block') {
				mainMenu.style.display = 'none';
			} else {
				mainMenu.style.display = 'block';
			}
			*/

			$( mainMenu ).slideToggle( "fast", function() {} );
		};

		// Do the thing when clicking the toggle button
		toggleMenu.addEventListener('click', showHideMenu);

	console.log("Ehh, What's Up Doc? I see you're ready. (-‿‿-)");
});
