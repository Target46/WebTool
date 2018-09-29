/*  
	Author: 	 Roger Oakley
	Date:   	 December 23, 2017
	Description: JavaScript for button utility
	Filename: 	 button.js
*/




function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}