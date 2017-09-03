<?php
$dbhost  = 'localhost';
$dbname  = 'search_engine';
$dbuser  = 'root';
$dbpass  = 'password'; 

$con = mysql_connect($dbhost, $dbuser, $dbpass);

if($con == FALSE){
    echo 'Cannot connect to database' . mysql_error();
}

mysql_select_db($dbname, $con);

$sql="INSERT INTO `gate` (`year1`,`setno`,`quesno`,`topics`,`category`,`description`,`question`,`option1`,`option2`,`option3`,`option4`,`answer`,`marks`)  VALUES ('{$_POST['year1']}','{$_POST['setno']}','{$_POST['quesno']}','{$_POST['category']}','{$_POST['description']}','{$_POST['description']}','{$_POST['question']}','{$_POST['option1']}','{$_POST['option2']}','{$_POST['option3']}','{$_POST['option4']}','{$_POST['answer']}','{$_POST['marks']}')";

if (!mysql_query($sql, $con)){
    die('Error: ' . mysql_error());
}

mysql_close($con);

 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='index.php';
    </SCRIPT>");
?>
