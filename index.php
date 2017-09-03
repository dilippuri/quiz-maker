<!DOCTYPE html>
<html>

<head>
  <title>Quiz Maker</title>
  <meta charset="utf-8">
</head>
<center><h1>Quiz Maker</h1></center>
<body>



<form action="send_to_questionbank.php" method="post" style="display:inline">
Year: <input type="radio" name="year1" value="1">2001
<input type="radio" name="year1" value="1">2002
<input type="radio" name="year1" value="1">2003
<input type="radio" name="year1" value="1">2004
<input type="radio" name="year1" value="1">2005
<input type="radio" name="year1" value="1">2006
<input type="radio" name="year1" value="1">2007
<input type="radio" name="year1" value="1">2008
<input type="radio" name="year1" value="1">2009
<input type="radio" name="year1" value="1">2010<br>
<input type="radio" name="year1" value="1">2011
<input type="radio" name="year1" value="1">2012
<input type="radio" name="year1" value="1">2013
<input type="radio" name="year1" value="1">2014
<input type="radio" name="year1" value="1">2015
<input type="radio" name="year1" value="1">2016
<input type="radio" name="year1" value="1">2017
<br><br>
SetNo: <input type="radio" name="setno" value="1">1
<input type="radio" name="setno" value="2">2
<input type="radio" name="setno" value="3">3<br><br>
QuesNo: <input type="text" name="quesno" required data-fv-notempty-message="" /><br><br>
Topics: <input type="text" name="topics" required data-fv-notempty-message="" /><br><br>
Category: <input type="radio" name="category" value="easy">easy
<input type="radio" name="category" value="medium">medium
<input type="radio" name="category" value="hard">hard<br><br>
Question: <input type="text" name="question" required data-fv-notempty-message="" /><br><br>
Option A: <input type="text" name="option1"  required data-fv-notempty-message="" /><br>
Option B: <input type="text" name="option2"  required data-fv-notempty-message="" /><br>
Option C: <input type="text" name="option3"  required data-fv-notempty-message="" /><br>
Option D: <input type="text" name="option4"  required data-fv-notempty-message="" /><br><br>
Answer: <input type="radio" name="answer" value="1">1
<input type="radio" name="answer" value="2">2
<input type="radio" name="answer" value="3">3
<input type="radio" name="answer" value="4">4<br><br>
Marks: <input type="radio" name="marks" value="1">1
<input type="radio" name="marks" value="2">2
<input type="radio" name="marks" value="3">3
<br><br>
Description: <input type="text" name="description" /><br><br>
<input type="submit" value="Add Question"/>
</form>
<hr />

<form action="fetch_to_questionbank.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Create txt file!" onclick="window.location(index.php)">
  <input type="submit" value="Download!" onclick="window.open('questionbank.txt')">
</form>
</body>

</html>

