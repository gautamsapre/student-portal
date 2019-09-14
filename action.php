<?php
 $path = 'data.txt';
 if (isset($_POST['name']) && isset($_POST['topic'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['name'].' - '.$_POST['topix'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>