<?php

if (!empty($_GET['act'])) {
mysql_connect("localhost", "root", "password");
mysql_select_db("search_engine");
		
		$keys = "SELECT * FROM gate ";
		$keys = mysql_query($keys);
		$numrows = mysql_num_rows($keys);
	
		$myfile = fopen("questionbank.txt", "r+") or die("Unable to open file!");

	if($numrows > 0){
			$gap = "\n";
			while($row = mysql_fetch_assoc($keys)){
				$year1 = $row['year1'];
				$setno = $row['setno'];
				$quesno = $row['quesno'];
				$topics = $row['topics'];
				$category = $row['category'];
				$description = $row['description'];
				$question = $row['question'];
				$option1 = $row['option1'];
				$option2 = $row['option2']; 
				$option3 = $row['option3']; 
				$option4 = $row['option4']; 
				$answer = strtoupper($row['answer']);
				$marks = $row['marks'];


		fwrite($myfile,$year1);			fwrite($myfile,",");
		fwrite($myfile,$setno);			fwrite($myfile,",");
		fwrite($myfile,$quesno);		fwrite($myfile,",\"");
		fwrite($myfile,$topics);		fwrite($myfile,"\",");
		fwrite($myfile,$category);		fwrite($myfile,",");
		fwrite($myfile,$description);	fwrite($myfile,",");
		fwrite($myfile,$question);		fwrite($myfile,",");
		fwrite($myfile,$option1);		fwrite($myfile,",");
		fwrite($myfile,$option2);		fwrite($myfile,",");
		fwrite($myfile,$option3);		fwrite($myfile,",");
		fwrite($myfile,$option4);		fwrite($myfile,",");
		fwrite($myfile,$answer);		fwrite($myfile,",");
		fwrite($myfile,$marks);			
			fwrite($myfile,$gap);

			}			
		}
		else{echo "No result found!";}

	fclose($myfile);

// disconnect
mysql_close();
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='index.php';
    </SCRIPT>");
  }
?>
