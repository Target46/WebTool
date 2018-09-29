<?php
/*  
	Author: 	Roger Oakley
	Date:   	December 23, 2017
	Description: Course page for the web tool
	Filename: 	courses.php
*/
include 'includes/db.php';
include 'includes/header.php';
include 'includes/sidenav.php';
include 'includes/functions.php';


if (isset($_GET['programID']))
{
  $program = $_GET['programID'];
    echo "<h3 style=\"text-align: center\">$program</h3>";
}
if (isset($_POST['option']))
{
  $option2 = $_POST['option'];
    echo "<h3 style=\"text-align: center\">$option2</h3>";
}

if (isset($_POST['id']))
{
  $id = $_POST['id'];
}

echo "
  <div style=\"text-align: center;\">
  <a style=\"text-decoration:none; color:black;\" href=\"ITJobsAndTransfer.php?degree=$program&degreeOption=$option2\">
  <h3 style=\"text-align: center\">Courses</h3>
  </br>
  </br>
  <span style=\"padding: 10px; border-radius: 5px; background-color:#157c4e;word-wrap: normal;\">Jobs and Transfer Information</span></a>
  </div>";
echo "</br>";
echo "</br>";
echo "</br>";
        

display_courses($program,$option2,$id);


include'includes/footer.php';
?>