//Start
document.addEventListener( 'DOMContentLoaded', function() {

	startApp();
    
} );

function startApp() {
    
	openMenucoll();
    
}

//COLLECTION MENU

const showAllButton = document.querySelector('.show-all-button');

const select = document.querySelector('.item-select');
const genesis = document.querySelector('.item-genesis');
const orion = document.querySelector('.item-orion');
const feline = document.querySelector('.item-feline');

const barMenuUp = document.querySelector('.coll-menu-up');
const barMenuDown = document.querySelector('.coll-menu-down');

const iconDownS = document.getElementById('icon-down-s');
const iconUpS = document.getElementById('icon-up-s');

const iconDownG = document.getElementById('icon-down-g');
const iconUpG = document.getElementById('icon-up-g');

const iconDownO = document.getElementById('icon-down-o');
const iconUpO = document.getElementById('icon-up-o');

const iconDownF = document.getElementById('icon-down-f');
const iconUpF = document.getElementById('icon-up-f');

function openMenucoll() {

	showAllButton.addEventListener('click', showAll );

	select.addEventListener('click', showMenu );
	genesis.addEventListener('click', showGenesis );
	orion.addEventListener('click', showOrion );
	feline.addEventListener('click', showFeline );

}

function showAll() {

	if( select.classList.contains('display-none') ) {

		select.classList.remove('display-none');
		select.classList.remove('collection-menu-active');
		select.classList.add('collection-menu-default');

		genesis.classList.add('display-none');
		orion.classList.add('display-none');
		feline.classList.add('display-none');
		
		genesis.classList.remove('collection-menu-default');
		orion.classList.remove('collection-menu-default');
		feline.classList.remove('collection-menu-default');

		barMenuUp.classList.add('display-none');
		barMenuDown.classList.add('display-none');

	}

}

function showMenu() {

	if( 

		genesis.classList.contains('display-none') &&
		orion.classList.contains('display-none') &&
		feline.classList.contains('display-none')

	) {

		select.classList.remove('collection-menu-default');
		select.classList.add('collection-menu-active');

		genesis.classList.remove('display-none');
		orion.classList.remove('display-none');
		feline.classList.remove('display-none');
		
		barMenuDown.classList.remove('display-none');

		iconUpS.classList.remove('display-none');
		iconDownS.classList.add('display-none');

		iconUpG.classList.add('display-none');
		iconDownG.classList.add('display-none');
		iconUpO.classList.add('display-none');
		iconDownO.classList.add('display-none');
		iconUpF.classList.add('display-none');
		iconDownF.classList.add('display-none');

	} else {

		select.classList.add('collection-menu-default');
		select.classList.remove('collection-menu-active');

		genesis.classList.add('display-none');
		orion.classList.add('display-none');
		feline.classList.add('display-none');

		barMenuDown.classList.add('display-none');

		iconUpS.classList.add('display-none');
		iconDownS.classList.remove('display-none');

	}

}

function showGenesis() {

	if( 

		select.classList.contains('display-none') &&
		orion.classList.contains('display-none') &&
		feline.classList.contains('display-none')

	) {

		genesis.classList.remove('collection-menu-default');

		orion.classList.remove('display-none');
		feline.classList.remove('display-none');

		barMenuUp.classList.remove('display-none');
		barMenuDown.classList.remove('display-none');

		iconUpG.classList.remove('display-none');
		iconDownG.classList.add('display-none');

		iconUpO.classList.add('display-none');
		iconDownO.classList.add('display-none');
		iconUpF.classList.add('display-none');
		iconDownF.classList.add('display-none');

	} else {

		genesis.classList.add('collection-menu-default');

		select.classList.add('display-none');
		orion.classList.add('display-none');
		feline.classList.add('display-none');

		barMenuUp.classList.add('display-none');
		barMenuDown.classList.add('display-none');

		iconUpG.classList.add('display-none');
		iconDownG.classList.remove('display-none');

	}

}

function showOrion() {

	if( 

		select.classList.contains('display-none') &&
		genesis.classList.contains('display-none') &&
		feline.classList.contains('display-none')

	) {

		orion.classList.remove('collection-menu-default');

		genesis.classList.remove('display-none');
		feline.classList.remove('display-none');

		barMenuUp.classList.remove('display-none');
		barMenuDown.classList.remove('display-none');

		iconUpO.classList.remove('display-none');
		iconDownO.classList.add('display-none');

		iconUpG.classList.add('display-none');
		iconDownG.classList.add('display-none');
		iconUpF.classList.add('display-none');
		iconDownF.classList.add('display-none');

	} else {

		orion.classList.add('collection-menu-default');

		select.classList.add('display-none');
		genesis.classList.add('display-none');
		feline.classList.add('display-none');

		barMenuUp.classList.add('display-none');
		barMenuDown.classList.add('display-none');

		iconUpO.classList.add('display-none');
		iconDownO.classList.remove('display-none');

	}

}

function showFeline() {

	if( 

		select.classList.contains('display-none') &&
		genesis.classList.contains('display-none') &&
		orion.classList.contains('display-none')

	) {

		feline.classList.remove('collection-menu-default');

		genesis.classList.remove('display-none');
		orion.classList.remove('display-none');

		barMenuUp.classList.remove('display-none');
		barMenuDown.classList.remove('display-none');

		iconUpF.classList.remove('display-none');
		iconDownF.classList.add('display-none');

		iconUpG.classList.add('display-none');
		iconDownG.classList.add('display-none');
		iconUpO.classList.add('display-none');
		iconDownO.classList.add('display-none');

	} else {

		feline.classList.add('collection-menu-default');

		select.classList.add('display-none');
		genesis.classList.add('display-none');
		orion.classList.add('display-none');

		barMenuUp.classList.add('display-none');
		barMenuDown.classList.add('display-none');

		iconUpF.classList.add('display-none');
		iconDownF.classList.remove('display-none');

	}

}


