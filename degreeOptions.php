<?php
/*  
	Author: 	Roger Oakley
	Date:   	December 23, 2017
	Description: Degree options page for the web tool
	Filename: 	degreeOptions.php
*/
include 'includes/db.php';
include 'includes/header.php';
include 'includes/sidenav.php';
include 'includes/functions.php';

if (isset($_POST['program']))
{
  $program = $_POST['program'];
}



/* -----------------Displays A Program Option to Choose From-----*/

echo "<div style=\"width: 100%\">";
    echo "<fieldset style=\"border-color:#157c4e;border-radius: 20px;width: 100%\">";
        echo "<legend style=\"text-align: center\"><h2 style=\"padding:0; margin:0; color:#157c4e\">$program Program Options</h2></legend>";
            program_option($program);
        echo "</fieldset>";
include'includes/footer.php';
?>