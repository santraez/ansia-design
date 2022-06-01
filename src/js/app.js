//Start
document.addEventListener( 'DOMContentLoaded', function() {

	startApp();
    
} );

function startApp() {
    
    faqButton();
    
}

//SHOW ANSWER FAQs

//answer 1

function faqButton() {
    
	const container = document.querySelector('#c1');
	
	container.addEventListener( 'click', showAnswer );
    
}

function showAnswer() {

	const answer = document.querySelector('#a1');
	const buttonDetails = document.querySelector('#b1a');
	const buttonHide = document.querySelector('#b1b');
	const iconDown = document.querySelector('#i1a');
	const iconUp = document.querySelector('#i1b');

	answer.classList.toggle('display-none');
	buttonDetails.classList.toggle('display-none');
	buttonHide.classList.toggle('display-none');
	iconDown.classList.toggle('display-none');
	iconUp.classList.toggle('display-none');

}