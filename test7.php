<?php
require_once("DB_connect.php");
$error = "no error";
$flag = "ok";
include_once "class_lib.php";

$table_id = new id($mysqli,"filmskola2013");
$id = $table_id->get_id();
$idskole = mysql_real_escape_string(trim($_POST["schoolID"]));
$originalniNaziv = mysql_real_escape_string(trim($_POST["originalniNaziv"]));
$reziser = mysql_real_escape_string(trim($_POST["reziser"]));
$engleskiNaziv= mysql_real_escape_string(trim($_POST["engleskiNaziv"]));
$preview_link= mysql_real_escape_string(trim($_POST["preview_link"]));
$emailRezisera = mysql_real_escape_string(trim($_POST["emailRezisera"]));
$minuti = mysql_real_escape_string(trim($_POST["minuti"]));
$sekunde = mysql_real_escape_string(trim($_POST["sekunde"]));
$scenario = mysql_real_escape_string(trim($_POST["scenario"]));
$animacija = mysql_real_escape_string(trim($_POST["animacija"]));
$crtez = mysql_real_escape_string(trim($_POST["crtez"]));
$muzika = mysql_real_escape_string(trim($_POST["muzika"]));
$zvucniEfekti = mysql_real_escape_string(trim($_POST["zvucniEfekti"]));
$montaza = mysql_real_escape_string(trim($_POST["montaza"]));
$tehnikaRealizacije = mysql_real_escape_string(trim($_POST["tehnikeRealizacije"]));
$datum = date("d").". ".date("m").". ".date("Y");
$year = date("Y");
$query2 = "
INSERT INTO  filmskola2013 (
`originalniNaziv` ,
`engleskiNaziv` ,
`preview_link`,
`reziser` ,
`id` ,
`emailRezisera` ,
`minuti` ,
`sekunde` ,
`scenario` ,
`animacija` ,
`crtez` ,
`muzika` ,
`zvucniEfekti` ,
`montaza` ,
`tehnikeRealizacije` ,
`datum`,
`idSkole`,
`year`
) VALUES (
'$originalniNaziv',
'$engleskiNaziv',
'$preview_link',
'$reziser',
$id,
'$emailRezisera' ,
$minuti,
$sekunde,
'$scenario',
'$animacija',
'$crtez',
'$muzika',
'$zvucniEfekti',
'$montaza',
'$tehnikaRealizacije',
'$datum',
$idskole,
$year
)";
//Upozorenje ovaj fajl mora da ispise samo return id da bi ajax mogao raditi.
if (!mysql_query($query2)){$error = 'submit film query error: '.mysql_error(); $flag = 'error';}
if($flag == 'error'){
	$return = '{"switch":"error" , "film query":"'.$query2.'" , "error":"'.$error.'"}';
	echo $return;
}
else{
	$return = '{"switch":"ok","id":"'.$idskole.'"}';
	echo $return;
}