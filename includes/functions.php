<?php
/*  
	Author: 	Roger Oakley
	Date:   	December 23, 2017
	Description:    Function page for the web tool
	Filename: 	functions.php
*/

/*---- Select a program option ----*/

function program_option($program) {
    
global $connection; 
    
echo "<form action=\"courses.php?programID=$program\" method=\"post\">";  
echo"<h3 style=\"color:#157c4e; text-align: center;\">Choose one to see Courses</h3>";
    $query = "SELECT * FROM program_option_names WHERE optionID = '$program' ";
    $select_program_option_names = mysqli_query($connection,$query);
    $count = mysqli_num_rows($select_program_option_names);

    while($row = mysqli_fetch_assoc($select_program_option_names)){
    $optionName = $row['optionName'];
    echo "<ul style=\"text-align: center; padding: 0;\"><h3>{$optionName}</h3></ul>"; 

    $query = "SELECT * FROM degreeoptions WHERE programID = '$program' AND optionNameID = '$optionName'";
    $select_degreeCertName = mysqli_query($connection,$query);
    $count = mysqli_num_rows($select_degreeCertName);

    while($row = mysqli_fetch_assoc($select_degreeCertName)){
    $degreeCertName = $row['degree_cert_name'];
    $optionNameID = $row['optionNameID'];
    $identifier = $row['identifier'];
echo "<li style=\"margin: auto; font-size: .9em; list-style-type: none; padding: 5px; text-align: center; width: 100%; overflow-wrap: normal\"><input type=\"hidden\" name=\"id\" value=\"$identifier\"><input type=\"submit\" name=\"option\" value=\"$degreeCertName\" class=\"buttonRipplePo\"></li>";           
}
}
echo "</form>";
}


/*---- Select a degree option to display courses ----*/

function display_courses($program,$option2,$id){
    
        $filenameCourses = fopen("./data/$program/$program-$id.txt", "r");
        echo "<table style=\"margin:auto;\">";
            echo"<tr>";
                echo"<td style=\"padding: 5px;border: 1px solid black;width:33.33%;\">Course Name</td>";
                echo"<td style=\"padding: 5px;border: 1px solid black;width:33.33%;\">PRE-REQUISITES</td>";
                echo"<td style=\"padding: 5px;border: 1px solid black;width:33.33%;\">CO-REQUISITES</td>";
            echo"</tr>";
        while (!feof($filenameCourses)) {
        $courses = fgetcsv($filenameCourses, 0, ",");
        $list_courses = array($courses[0],$courses[1],$courses[2],$courses[3],$courses[4],$courses[5]);

            echo"<tr>";
                echo"<td style=\"padding: 5px;border: 1px solid black;width:33.33%;\"><a href=\"$list_courses[4]\"target=\"_blank\" style=\"text-decoration: none;\">$list_courses[5]</a></td>";
                echo"<td style=\"padding: 5px;border: 1px solid black;width:33.33%;\">$list_courses[2]</td>";
                echo"<td style=\"padding: 5px;border: 1px solid black;width:33.33%;\">$list_courses[3]</td>";
            echo"</tr>";
        }
        echo "</table>";
        fclose($filenameCourses);
}


/*---- Transfer txt file open and close ----*/

function transfer($program_id) {

$filenameTransfer = fopen("data/ITJobsAndTransfer/tblProgramTransfers.txt", "r"); //Transfer File

$a = 0;
    while (!feof($filenameTransfer)) {
    $title = fgetcsv($filenameTransfer, 0, ",");
    $transfer = array($title[0],$title[1],$title[2],$title[3],$title[4]);
        if($transfer[3] == $program_id){
        $a++;
        echo"<div>
        <a href=\"$transfer[2]\" target=\"_blank\">$transfer[1] ----- $transfer[4]</a>";
        echo "</div>";
        echo "</br>";
        }
    }
fclose($filenameTransfer);
}

/*---- Job txt file open and close ----*/

function jobs($program_id){
$filenameJobs = fopen("data/ITJobsAndTransfer/tblRelatedJobsToPrograms.txt", "r"); //Jobs File
$a = 0;
    while (!feof($filenameJobs)) {
    $title = fgetcsv($filenameJobs, 0, ",");
    $jobs = array($title[0],$title[1],$title[2],$title[3],$title[4],$title[5]);
        if($jobs[3] == $program_id){
        $a++;
        echo"<div id=\"blue-$a-\">
        <a href=\"$jobs[2]\" target=\"_blank\">$jobs[4] ----- $jobs[1]</a>";
        echo "</div>";
        echo "</br>";
        }
    }
fclose($filenameJobs);
}

/*---- Query program table with program name ----*/

function query_programName(){
    global $connection;
    
    if ($_GET["degree"]){
        
    $program = $_GET["degree"];
        
    $query = "SELECT * FROM programs WHERE programName = '$program' ";
    $select_programs = mysqli_query($connection,$query);
        
    while($row = mysqli_fetch_assoc($select_programs)){
    $program_id = $row['programID'];
    $program_short_name = $row['programName'];
    $program_long_name = $row['programDescription'];
        } 
    }
    return array($program_id,$program);
}
?>