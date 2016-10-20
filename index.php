<!DOCTYPE html>
<html>

<head>
  <title>Quiz Maker</title>
  <meta charset="utf-8">
</head>
<center><h1>Quiz Maker</h1></center>
<body>



<form action="./index.php" method="post">

Question: <input type="text" name="question" size='100' required data-fv-notempty-message="" /><br><br>
Option A: <input type="text" name="option1"  required data-fv-notempty-message="" /><br>
Option B: <input type="text" name="option2"  required data-fv-notempty-message="" /><br>
Option C: <input type="text" name="option3"  required data-fv-notempty-message="" /><br>
Option D: <input type="text" name="option4"  required data-fv-notempty-message="" /><br><br>
Answer: <input type="text" name="answer"  required data-fv-notempty-message="" /><br>

<br>
<input type="submit" value="Add Question"/>
</form>

<hr />
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

$sql="INSERT INTO `quiz` (`question`,`opt1`,`opt2`,`opt3`,`opt4`,`answer`)  VALUES ('{$_POST['question']}','{$_POST['option1']}','{$_POST['option2']}','{$_POST['option3']}','{$_POST['option4']}','{$_POST['answer']}')";

if (!mysql_query($sql, $con)){
    die('Error: ' . mysql_error());
}

mysql_close($con)

?>

<?php
  if (!empty($_GET['act'])) {

mysql_connect("localhost", "root", "password");
mysql_select_db("search_engine");
		$kk = "DELETE FROM quiz WHERE question = ''";
		$kk = mysql_query($kk);
		$keys = "SELECT * FROM quiz ";
		$keys = mysql_query($keys);
		$numrows = mysql_num_rows($keys);
$myfile = fopen("quiz.txt", "w") or die("Unable to open file!");
		if($numrows > 0){
	$gap = "\n";
			while($row = mysql_fetch_assoc($keys)){

				$questionno = $row['questionno'];
				$question = $row['question'];
				$option1 = $row['opt1'];
				$option2 = $row['opt2']; 
				$option3 = $row['opt3']; 
				$option4 = $row['opt4']; 
				$answer = strtoupper($row['answer']);
			
		fwrite($myfile,$question);fwrite($myfile,$gap);

		fwrite($myfile,"A. ");fwrite($myfile,$option1);fwrite($myfile,$gap);

		fwrite($myfile,"B. ");fwrite($myfile,$option2);fwrite($myfile,$gap);

		fwrite($myfile,"C. ");fwrite($myfile,$option3);fwrite($myfile,$gap);

		fwrite($myfile,"D. ");fwrite($myfile,$option4);fwrite($myfile,$gap);

		fwrite($myfile,"ANSWER: ");fwrite($myfile,$answer);fwrite($myfile,$gap);fwrite($myfile,$gap);

			}			
		}
		else{echo "No result found!";}

	fclose($myfile);


// disconnect
mysql_close();
	echo "txt file created to download click here.";
  } else {
?>

<form action="index.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Create txt file!">
</form>
<?php
  }
?>
<button type="submit" onclick="window.open('quiz.txt')">Download!</button>
</body>

</html>

