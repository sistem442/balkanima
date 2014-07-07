<?php
session_start(); 

//Ako nije prosla verifikacija captcha
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
     die(  "<span ><strong>Incorrect verification code.</strong><br />
<a href='javascript: history.go(-1)'>Back</a> </span>");
} 

// ako je u redu captcha
else {      
// ako su slike uspesno uplodovane
if(($_FILES['ufile']['size'][0] > 0)&&($_FILES['ufile']['size'][1] > 0)&&($_FILES['ufile']['size'][2] > 0))
{

//konekcija sa bazom
include_once"DB_connect.php";
include_once"class_lib.php";

$table_id = new id($mysqli,"prijavestudenti2013");
$id = $table_id->get_id();
	
//citanje unetih podatka
$zemlja = mysql_real_escape_string(trim($_POST["zemlja"]));
$originalniNaziv = mysql_real_escape_string(trim($_POST["originalniNaziv"]));
$reziser = mysql_real_escape_string(trim($_POST["reziser"]));
$engleskiNaziv= mysql_real_escape_string(trim($_POST["engleskiNaziv"]));
$adresaRezisera= mysql_real_escape_string(trim($_POST["adresaRezisera"]));
$telefonRezisera = mysql_real_escape_string(trim($_POST["telefonRezisera"]));
$emailRezisera = mysql_real_escape_string(trim($_POST["emailRezisera"]));
$preview_link = mysql_real_escape_string(trim($_POST["preview_link"]));
$biografija = mysql_real_escape_string(trim($_POST["biografija"]));
$school = mysql_real_escape_string(trim($_POST["school"]));
$schoolAddress= mysql_real_escape_string(trim($_POST["schoolAddress"]));
$schoolEmail= mysql_real_escape_string(trim($_POST["schoolEmail"]));
$schoolTelephone= mysql_real_escape_string(trim($_POST["schoolTelephone"]));
$minuti = mysql_real_escape_string(trim($_POST["minuti"]));
$sekunde = mysql_real_escape_string(trim($_POST["sekunde"]));
$mesecProizvodnje = mysql_real_escape_string(trim($_POST["mesecProizvodnje"]));
$godinaProizvodnje = mysql_real_escape_string(trim($_POST["godinaProizvodnje"]));
$scenario = mysql_real_escape_string(trim($_POST["scenario"]));
$animacija = mysql_real_escape_string(trim($_POST["animacija"]));
$crtez = mysql_real_escape_string(trim($_POST["crtez"]));
$scenografija = mysql_real_escape_string(trim($_POST["scenografija"]));
$trikKamera = mysql_real_escape_string(trim($_POST["trikKamera"]));
$muzika = mysql_real_escape_string(trim($_POST["muzika"]));
$zvucniEfekti = mysql_real_escape_string(trim($_POST["zvucniEfekti"]));
$montaza = mysql_real_escape_string(trim($_POST["montaza"]));
$format = mysql_real_escape_string(trim($_POST["format"]));
$tehnikaRealizacije = mysql_real_escape_string(trim($_POST["tehnikeRealizacije"]));
//echo "prva tehnika realizacije: ".$tehnikaRealizacije;
if($tehnikaRealizacije == "Druge tehnike / Other techniques"){	
       $tehnikaRealizacije = mysql_real_escape_string(trim($_POST["ostaleTehnike"]));
		}
//echo "druga tehnika realizacije: ".$tehnikaRealizacije;
$sinopsis = mysql_real_escape_string(trim($_POST["sinopsis"]));
$dozvola1 = 'ne';
if(isset($_POST['dozvola1'])){
    $dozvola1 = 'da';
}
$dozvola2 = 'ne';
if(isset($_POST['dozvola2'])){
    $dozvola2 = 'da';
}
$dozvola3 = 'ne';
if(isset($_POST['dozvola3'])){
    $dozvola3 = 'da';
}
$dozvola4 = 'ne';

$datum = date("d").". ".date("m").". ".date("Y");
$year = date("Y");

//Upload folder
$uploadFolder = "prijave/2013/";

//set where you want to store files
// make a unique filename for the uploaded file and check it is not already 
// taken... if it is already taken keep trying until we find a vacant one
$now = time();
$now = $now + rand(10000,99999); 
//Uzimam zadnjih 6 karaktera od image/jpeg, secem bele karaktere i dobijam tip slike
$imageType = rtrim(substr( $_FILES['ufile']['type'][0],6,6));
//ako se koristi tupavi IE za upload umesto jpeg bice pjpeg!?! Zato mora ovo
if($imageType == "pjpeg")$imageType = "jpeg";
$path = $uploadFolder.$now.".".$imageType;
$now++; 
$imageType = rtrim(substr( $_FILES['ufile']['type'][1],6,6));
//ako se koristi tupavi IE za upload umesto jpeg bice pjpeg!?! Zato mora ovo
if($imageType == "pjpeg")$imageType = "jpeg";
$path1 = $uploadFolder.$now.".".$imageType; 
$now++;
$imageType = rtrim(substr( $_FILES['ufile']['type'][2],6,6));
//ako se koristi tupavi IE za upload umesto jpeg bice pjpeg!?! Zato mora ovo
if($imageType == "pjpeg")$imageType = "jpeg";
$path2 = $uploadFolder.$now.".".$imageType; 
//copy file to where you want to store file
$copy = copy($_FILES['ufile']['tmp_name'][0], $path);
 // prompt if successfully copied
 if($copy){
 $autorSlika = "<span >Author image was uploaded sucessfully!</span><br>";
 }else{
  die ("<span >Author image could not be uploaded!</span><br><a href='javascript: history.go(-1)'>Back</a>");
 }
//copy file to where you want to store file
$copy = copy($_FILES['ufile']['tmp_name'][1], $path1);
 // prompt if successfully copied
 if($copy){
 $still1 = "<span >Still 1 image was uploaded sucessfully!</span><br>";
 }else{
 die ( "<span >Still 1 image could not be uploaded!</span><a href='javascript: history.go(-1)'>Back</a><br>");
 }
 //copy file to where you want to store file
$copy = copy($_FILES['ufile']['tmp_name'][2], $path2);
 // prompt if successfully copied
 if($copy){
 $still2 = "<span>Still 2 image was uploaded sucessfully!</span><br>";
 }else{
 die ( "<span >Still 2 image could not be uploaded!</span><a href='javascript: history.go(-1)'>Back</a><br>");
 }
$query2 = "
INSERT INTO prijavestudenti2013 (
`zemlja` ,
`originalniNaziv` ,
`engleskiNaziv` ,
`reziser` ,
`id` ,
`adresaRezisera` ,
`telefonRezisera` ,
`emailRezisera` ,
`biografija` ,
`school` ,
`schoolAddress` ,
`schoolEmail` ,
`schoolTelephone` ,
`minuti` ,
`sekunde` ,
`mesecProizvodnje` ,
`godinaProizvodnje` ,
`scenario` ,
`animacija` ,
`crtez` ,
`scenografija` ,
`trikKamera` ,
`muzika` ,
`zvucniEfekti` ,
`montaza` ,
`format` ,
`sinopsis` ,
`slika1` ,
`slika2` ,
`slikaRezisera` ,
`dozvola1` ,
`dozvola2` ,
`dozvola3` ,
`datum` ,
`tehnike`,
`year`,
`preview_link`
) VALUES ('$zemlja','$originalniNaziv','$engleskiNaziv','$reziser',$id,'$adresaRezisera','$telefonRezisera','$emailRezisera','$biografija','$school','$schoolAddress','$schoolEmail','$schoolTelephone',$minuti,$sekunde,$mesecProizvodnje,$godinaProizvodnje,'$scenario','$animacija','$crtez','$scenografija','$trikKamera','$muzika','$zvucniEfekti','$montaza','$format','$sinopsis','$path1','$path2','$path','$dozvola1','$dozvola2','$dozvola3','$datum','$tehnikaRealizacije','$year','$preview_link')";
//echo $query2;
$result2 = mysql_query($query2);
if(!$result2){
	die("
	  <span><br />
      <br />
     Eror code:1.1. <br />
Please contact support <a href='mailto:it@dksg.rs'>it@dksg.rs</a></span>");
}



//ispis html stranice

}//ako su slike uspesno uploudovane
//ako slike nisu selektovane ili su prevelike
else{
	die("<span>You didn't selected images or you selected images over 1MB. <br />
         <br />
         <a href='javascript: history.go(-1)'>Back</a>.</span>");
	}
}// ako je u redu captcha
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Balkanima Evropski  Festival Animiranog Filma</title>
<link href="backendCSS.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://www.balkanima.org/favicon.ico" type="image/x-icon" />

</head>
<body>
<div class="container">
    <br />
<br />
Your application was successfully submited.<br />
<br />
If you didn't submited preview or download link send us DVD with this ID number: S<span style="font-size:14px; font-weight:bold"><?php echo $id?></span> to the following address:<br />
<br />
<p><strong>Balkanima Festival<br />
  Students' City Cultural Center <br />
  Bulevar Zorana Djindjica 179<br />
  11070 Novi Beograd<br />
  Serbia</strong></p>
<p>Application Deadline: July 30th, 2014 (date of postmark)<br />
<br />
<br />
<br />
</p>
  <!-- end #container -->
</div>
</body>
</html>