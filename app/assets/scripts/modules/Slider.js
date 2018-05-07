import $ from 'jquery';

/*  ####  SLIDER  ####  */

var numer = Math.floor(Math.random()*5)+1;
var timer1 = 0;
var timer2 = 0;

function ustawslajd(nrslajdu) {
	clearTimeout(timer1);
	clearTimeout(timer2);
	numer = nrslajdu - 1;
	
	schowaj();
	setTimeout("zmienslajd()", 0);
	
}

function schowaj() {
	$("#slider").fadeOut(500);
}

function zmienslajd() {
	numer++;

    if(numer>5) numer = 1;
	
	var plik = "<img src=\"/Project/app/assets/images/img/slajdy/slajd" + numer + ".jpg\" />";
	
	document.getElementById("slider").innerHTML = plik;
	$("#slider").fadeIn(500);
	
	timer1 = setTimeout("zmienslajd()",3000);
	timer2 = setTimeout("schowaj()", 0);
}

window.onload = zmienslajd;