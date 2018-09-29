/* -------------------------------------------------------------*/
//        Author: 	Patrick Keating, Travis Waelbroeck
//        Date:   	December 15, 2015
//        Filename: 	color.js 
/* -------------------------------------------------------------*/		




"use strict";


		// Colors the actual cells that match each course (all 3 parts per course)
		// If tblPrograms has 2 cells specified, it will handle both at once (like SDEV AAS & SDEV AS)
		function colorCourse(KeyProgramsArrayId, color) {
			var row    = KeyProgramsArray[KeyProgramsArrayId][2];
			var column = KeyProgramsArray[KeyProgramsArrayId][3].replace(/\D/g,'');			// Leaves us with column number only - no 'c'

			if(KeyProgramsArray[KeyProgramsArrayId][4] && KeyProgramsArray[KeyProgramsArrayId][5]) {
				var twoCells = true;
				var row2     = KeyProgramsArray[KeyProgramsArrayId][4];
				var column2  = KeyProgramsArray[KeyProgramsArrayId][5].replace(/\D/g,'');	// Leaves us with column number only - no 'c'
			}

			for(var j = 1; j <= 3; j++) {
				if(j == 1) {
					var rowPart = row + 'a';
					if(twoCells) { var rowPart2 = row2 + 'a'; }
				} else if(j == 2) {
					var rowPart = row + 'b';
					if(twoCells) { var rowPart2 = row2 + 'b'; }
				} else if(j == 3) {
					var rowPart = row + 'c';
					if(twoCells) { var rowPart2 = row2 + 'c'; }
				}

				document.getElementById(rowPart).children[column - 1].style.backgroundColor = color;
				if(twoCells) {
					document.getElementById(rowPart2).children[column2 - 1].style.backgroundColor = color;
				}
			}
		}

		// This function is called whenever the campus selection is changed.
		// Checks all courses for the selected campus and color the cells accordingly
		function colorize() {
			// Selected Campus ID
			var selectedCampus = document.getElementById("camp").selectedIndex;

			// Check all courses for the selected campus and color the cells
			for (var i = 0; i < KeyCampusestoProgramsArray.length; i++){
				if (KeyCampusestoProgramsArray[i][1] == selectedCampus){
					// Get course name
					var kc2pval2 = window.parseInt(KeyCampusestoProgramsArray[i][2]);
					var course   = KeyProgramsArray[kc2pval2-1][1].trim();

					// Get Color for this course at this campus
					var kc2pval3 = window.parseInt(KeyCampusestoProgramsArray[i][3]);
					var shade    = KeyColorChartArray[kc2pval3-1][2].trim();
					var hexCode  = KeyColorChartArray[kc2pval3-1][4].trim();

					// Actually color the cells related to this course
					colorCourse(kc2pval2-1, hexCode);
				}
			}
		}

		// Add onchange event listener to fire the colorize function whenever the Campus selection is changedf
		if(window.addEventListener) {
			document.getElementById("camp").addEventListener("change", colorize, false);
		} else if(window.attachEvent) {
			document.getElementById("camp").attachEvent("onchange", colorize);
		}