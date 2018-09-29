<!DOCTYPE html>
<html>
<head>

<!--
    Author:     Roger Oakley, Matthew Napper, Evan Rothi
    Date:       November 28, 2016
    Revision: Roger Oakley on March 10, 2018
    Description:    Shows related jobs and transfer information
    Filename:   ITJobsAndTransfer.php
-->
<?php
include 'includes/db.php';
include 'includes/header.php';
include 'includes/sidenav.php';
include 'includes/functions.php';
    
echo "<div style=\"text-align: center\">"; 
  
$program = query_programName();

            echo "<div style=\"color:#157c4e;\"><h3>Transfer Information For $program[1] </h3>";
            echo "</div>"; 
            echo "<div style=\"color:#157c4e;\"><h3>Degree to Job Information For $program[1]</h3>";
            echo "</div>"; 
            echo "</br>";
            echo "</br>";
    
transfer($program[0]);
jobs($program[0]);

    echo "</div>";
?>

<!-- footer -->
<!------------------------------------------------------------------->
<?php 
    include('includes/footer.php');
?>
    
</body>
</html>