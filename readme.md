Quiz Maker
==========

pre-requisite
-------------

- LAMP(linux, apache, mysql, php)
- phpmyadmin


process
--------

- Here assumed that lamp is already set
- create a database "search_engine"
- create a table "quiz" with 7 attribute(column)
	- questionno(primary key with auto-increment(A_I))[int]
	- question[varchar 1000]
	- opt1[varchar 500]
	- opt2[varchar 500]
	- opt3[varchar 500]
	- opt4[varchar 500]
	- answer[varchar 50]
- change database name in code
- change user-name and password of phpmyadmin[in the code user-name:"root", pass:"password"]
- open the browser
- goto: "localhost/quiz-maker/index.php"

- enter the question data
- click add question
- repeat process
- at the end click create txt file and download.


Usage:
--------
[Aiken Format](https://www.umass.edu/it/support/moodle/import-quiz-questions-moodle-using-aiken-format)
