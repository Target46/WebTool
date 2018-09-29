<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<!--
	Author: 	Patrick Keating, Travis Waelbroeck
	Date:   	December 15, 2015
	Filename: 	campuses.php
-->

<?php include'includes/header.php';?>
<?php include'includes/sidenav.php';?> 

<body>

	<nav>
		<ul>
<!--			<li><a href="#" style="text-decoration: none; color:black">Programs by Campus</a></li>-->
			<li><a href="https://ivytech.edu/computers/index.html" style="text-decoration: none; color:black">Programs Index</a></li>
		</ul>
	</nav>
      
	<article>
	<p>The following programs are available at:</p>
	
		<?php
							echo '<form method="post" >';
							echo '<select id="camp" name="campus" required="required">';
							echo '<option selected="selected">Select Campus:</option>';
							$CampusesArray = file("data/tblCampuses.txt");
							$CampusesArray = str_replace('"', "", $CampusesArray);
							$Campuses2Count = count($CampusesArray);
							foreach ($CampusesArray as $Campuses) {
								$CurrCampuses = explode(",", $Campuses);
								$KeyCampusesArray[] = $CurrCampuses;
							}
							
							for ($i = 0; $i < (count($CampusesArray)); $i++) {
								echo '<option value="' . $KeyCampusesArray[$i][2] . '">' . $KeyCampusesArray[$i][1] . '</option>' . "\n";
							}
							
							echo '</form>';
							echo '</select>';
                      ?>
                        
		<div id="divCamp">
            
			<table>
				
				<tr>
					<th id="math" colspan=0 >Math</th>
				<!--	<th id="ddown" colspan=9 > -->
					
                        <?php
				//	echo '</th>';
				    echo '</tr>'; 

				$Programs2Array = file("data/tblPrograms2.txt");
		        $Programs2Array = str_replace('"', "", $Programs2Array);
				$Programs2Count = count($Programs2Array);
				foreach ($Programs2Array as $Programs2) {
					$CurrPrograms2 = explode(",", $Programs2);
					$KeyPrograms2Array[] = $CurrPrograms2;
				}

				$x = 0;
				for ($i = 0; $i < 8; $i = $i + 3) {
					echo '<tr id="r' . $x . 'a">';
						echo "<td id='c1a'>" . ($KeyPrograms2Array[$i][1]) . "</td>";
						echo "<td id='c2a'>" . ($KeyPrograms2Array[$i][2]) . "</td>";
						echo "<td id='c3a'>" . ($KeyPrograms2Array[$i][3]) . "</td>";
						echo "<td id='c4a'>" . ($KeyPrograms2Array[$i][4]) . "</td>";
						echo "<td id='c5a'>" . ($KeyPrograms2Array[$i][5]) . "</td>";
						echo "<td id='c6a'>" . ($KeyPrograms2Array[$i][6]) . "</td>";
						echo "<td id='c7a'>" . ($KeyPrograms2Array[$i][7]) . "</td>";
						echo "<td id='c8a'>" . ($KeyPrograms2Array[$i][8]) . "</td>";
						echo "<td id='c9a'>" . ($KeyPrograms2Array[$i][9]) . "</td>";
					echo "</tr>\n";
					echo '<tr id="r' . $x . 'b">';
						echo "<td id='c1b'>" . ($KeyPrograms2Array[$i+1][1]) . "</td>";
						echo "<td id='c2b'>" . ($KeyPrograms2Array[$i+1][2]) . "</td>";
						echo "<td id='c3b'>" . ($KeyPrograms2Array[$i+1][3]) . "</td>";
						echo "<td id='c4b'>" . ($KeyPrograms2Array[$i+1][4]) . "</td>";
						echo "<td id='c5b'>" . ($KeyPrograms2Array[$i+1][5]) . "</td>";
						echo "<td id='c6b'>" . ($KeyPrograms2Array[$i+1][6]) . "</td>";
						echo "<td id='c7b'>" . ($KeyPrograms2Array[$i+1][7]) . "</td>";
						echo "<td id='c8b'>" . ($KeyPrograms2Array[$i+1][8]) . "</td>";
						echo "<td id='c9b'>" . ($KeyPrograms2Array[$i+1][9]) . "</td>";
					echo "</tr>";
					echo '<tr id="r' . $x . 'c"> ';
						echo "<td id='c1c'>" . ($KeyPrograms2Array[$i+2][1]) . "</td>";
						echo "<td id='c2c'>" . ($KeyPrograms2Array[$i+2][2]) . "</td>";
						echo "<td id='c3c'>" . ($KeyPrograms2Array[$i+2][3]) . "</td>";
						echo "<td id='c4c'>" . ($KeyPrograms2Array[$i+2][4]) . "</td>";
						echo "<td id='c5c'>" . ($KeyPrograms2Array[$i+2][5]) . "</td>";
						echo "<td id='c6c'>" . ($KeyPrograms2Array[$i+2][6]) . "</td>";
						echo "<td id='c7c'>" . ($KeyPrograms2Array[$i+2][7]) . "</td>";
						echo "<td id='c8c'>" . ($KeyPrograms2Array[$i+2][8]) . "</td>";
						echo "<td id='c9c'>" . ($KeyPrograms2Array[$i+2][9]) . "</td>";
					echo "</tr>";
					++$x;
				}
				echo "</table>";
				?>
		</div>
	</article>

		<div id="divLegend">
			<table style="width: 100%;margin-left:auto;margin-right:auto">
				<caption>This is the legend for the colors that are used above:</caption>

				<tr>
					<td style="width: 50%;margin-left:auto;margin-right:auto" id="L1L" bgcolor="#42A5F5">Face to Face & Distance Education</td>
					<td style="width: 50%;margin-left:auto;margin-right:auto" id="L1R" bgcolor="#4CAF50">Face to Face</td>
				</tr>
				<tr>
					<td style="width: 50%;margin-left:auto;margin-right:auto" id="L2L" bgcolor="FFEE58">Distance Education Only</td>
					<td style="width: 50%;margin-left:auto;margin-right:auto" id="L2R" bgcolor="9E9E9E">Not Offered</td>
				</tr>
			</table>
		</div>


	<?php
	
		// Get PHP files data for use in JS Script Below
		$CampusestoProgramsArray = file("data/tblCampusestoPrograms2.txt");
		$CampusestoProgramsCount = count($CampusestoProgramsArray);
		foreach ($CampusestoProgramsArray as $CampusestoPrograms) {
			$CurrCampusestoPrograms = explode(",", $CampusestoPrograms);
			$KeyCampusestoProgramsArray[] = $CurrCampusestoPrograms;
		}

		$ColorChartArray = file("data/tblColorChart.txt");
		$ColorChartArray = str_replace('"', "", $ColorChartArray);
		$ColorChartCount = count($ColorChartArray);
		foreach ($ColorChartArray as $ColorChart) {
			$CurrColorChart = explode(",", $ColorChart);
			$KeyColorChartArray[] = $CurrColorChart;
		}

		$ProgramsArray = file("data/tblPrograms.txt");
		$ProgramsArray = str_replace('"', "", $ProgramsArray);
		$ProgramsCount = count($ProgramsArray);
		foreach ($ProgramsArray as $Programs) {
			$CurrPrograms = explode(",", $Programs);
			$KeyProgramsArray[] = $CurrPrograms;
		}

	?>

	<script>
		"use strict";

		// Declare global variables
		// Transfers all data from PHP files (this way we only do this once - instead of every time colorize is called)
		var KeyCampusesArray = <?php echo json_encode($KeyCampusesArray); ?>;
		var KeyCampusestoProgramsArray = <?php echo json_encode($KeyCampusestoProgramsArray); ?>;
		var KeyProgramsArray = <?php echo json_encode($KeyProgramsArray); ?>;
		var KeyColorChartArray = <?php echo json_encode($KeyColorChartArray); ?>;

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
	</script>
	
<!-- *********** Footer of Web Page ************* -->

<?php include 'includes/footer.php'; ?>

<!-- *********************************************** -->
</body>
</html>