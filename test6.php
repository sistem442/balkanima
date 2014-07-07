<?php
require_once("DB_connect.php");
$error = "no error";
$flag = "ok";
// *****************************************************************nadji najveci id u tabeli event i uvecaj ga za jedan
include_once"class_lib.php";

$table_id = new id($mysqli,"school2014");
$id = $table_id->get_id();
//citanje unetih podatka
$ime = mysql_real_escape_string(trim($_POST["schoolName"]));
$adresa = mysql_real_escape_string(trim($_POST["schoolAddress"]));
$telefon = mysql_real_escape_string(trim($_POST["schoolTelephone"]));
$email = mysql_real_escape_string(trim($_POST["schoolEmail"]));
$sajt = mysql_real_escape_string(trim($_POST["schoolWebsite"]));
$country = mysql_real_escape_string(trim($_POST["country"]));
$numberOfFilms = mysql_real_escape_string(trim($_POST["numberOfFilms"]));
$productionDate = mysql_real_escape_string(trim($_POST["productionDate"]));
$dozvola1 = 'ne';
$year = date("Y");
if($_POST['dozvola1'] == 'true'){
    $dozvola1 = 'da';
}
$dozvola2 = 'ne';
if($_POST['dozvola2'] == 'true'){
    $dozvola2 = 'da';
}
$dozvola3 = 'ne';
if($_POST['dozvola3'] == 'true'){
    $dozvola3 = 'da';
}
$datum = date("d").". ".date("m").". ".date("Y");
//Upis skole 
$query2 = "
INSERT INTO  school2014
(`ime` ,`adresa` ,`telefon` ,`email` ,`sajt`,`id`,`dozvola1`,`dozvola2`,`dozvola3`,`numberOfFilms`,`productionDate`,`country`,`year`) 
VALUES 
('$ime','$adresa','$telefon','$email','$sajt',$id,'$dozvola1','$dozvola2',
'$dozvola3','$numberOfFilms','$productionDate','$country','$year')";
//echo $query2; Upozorenje ovaj fajl mora da ispise samo return id da bi ajax mogao raditi, ovaj echo se koristi samo za debagovanje
if (!mysql_query($query2)){$error = 'submit film query error: '.mysql_error(); $flag = 'error';}
if($flag == 'error'){
	$returnID = '{"switch":"error" , "query":"'.$query2.'", "error":"'.$error.'"}';
	echo $returnID;
}
else{
	$returnID = '{"switch":"ok" , "id":"'.$id.'"}';
	echo $returnID;
}