<?php
/*  
	Author: 	Roger Oakley
	Date:   	December 23, 2017
	Description:    Program page for the web tool
	Filename: 	programs.php
*/
include 'includes/db.php';
include 'includes/header.php';
include 'includes/sidenav.php';

$query = "SELECT * FROM programs";
$select_programs = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_programs)){
    $program_id = $row['programID'];
    $program_short_name = $row['programName'];
    $program_long_name = $row['programDescription'];

    $programID[] = array($program_id,$program_short_name,$program_long_name);

        }  



echo "<div style=\"width: 90%;margin: auto;\">";
echo "<h2 style=\"text-align:center;color:#157c4e;\">Select A Program</h2>";
       
            echo "<table style=\"width: 94%;background-color: #BDBDBD;font-size: 1.25em;margin-left: auto; margin-right: auto;text-align: center;border-radius: 20px;\">";
                echo "<form action=\"degreeOptions.php\" method=\"post\">";
                echo "<tr>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[0][1]}\">
                    </td>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[1][1]}\">
                    </td>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[2][1]}\">
                    </td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[0][2]}</td>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[1][2]}</td>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[2][2]}</td>";
                echo "</tr>";
    
                echo "<tr>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[3][1]}\">
                    </td>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[4][1]}\">
                    </td>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[5][1]}\">
                    </td>";
                echo "</tr>";
                
                 echo "<tr>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[3][2]}</td>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[4][2]}</td>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[5][2]}</td>";
                echo "</tr>";
    
                echo "<tr>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[6][1]}\">
                    </td>";
                    echo "<td style=\"width: 20%; padding-bottom:30px;padding-top:30px;\">
                    <input type=\"submit\" name=\"program\" class=\"buttonRipple\" value=\"{$programID[7][1]}\">
                    </td>";
                echo "</tr>";
                
                 echo "<tr>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[6][2]}</td>";
                    echo "<td style=\"width: 20%; padding-bottom: 20px;font-size: .6em\">{$programID[7][2]}</td>";
                echo "</tr>";
                echo '</form>';
            echo "</table>";
    
echo "</div>";


include'includes/footer.php';
?>