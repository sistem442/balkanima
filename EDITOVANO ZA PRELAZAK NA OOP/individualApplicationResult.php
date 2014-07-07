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

// *****************************************************************nadji najveci id u tabeli event i uvecaj ga za jedan
$query =("select max(id) maxId from prijavesolo;");
$result = mysql_query($query);
if(!$result){
	die(" <span style='color:white; background-color:black;'><br />
      <br />
     Eror code:1. <br />
Please contact support <a href='mailto:it@dksg.rs'>it@dksg.rs</a></span>");
}
// na najveci ID broj dodajem 1 to je ID broj koji se koristi za upis sledeceg dogadjaja
$id = mysql_result($result,0);
$id++;

	
//citanje unetih podatka
$originalniNaziv = mysql_real_escape_string(trim($_POST["originalniNaziv"]));
$reziser = mysql_real_escape_string(trim($_POST["reziser"]));
$engleskiNaziv= mysql_real_escape_string(trim($_POST["engleskiNaziv"]));
$adresaRezisera= mysql_real_escape_string(trim($_POST["adresaRezisera"]));
$telefonRezisera = mysql_real_escape_string(trim($_POST["telefonRezisera"]));
$emailRezisera = mysql_real_escape_string(trim($_POST["emailRezisera"]));
$biografija = mysql_real_escape_string(trim($_POST["biografija"]));
$minuti = mysql_real_escape_string(trim($_POST["minuti"]));
$sekunde = mysql_real_escape_string(trim($_POST["sekunde"]));
$godinaProizvodnje = mysql_real_escape_string(trim($_POST["godinaProizvodnje"]));
$tehnikaRealizacije = mysql_real_escape_string(trim($_POST["tehnikeRealizacije"]));
$sinopsis = mysql_real_escape_string(trim($_POST["sinopsis"]));
$kategorija= mysql_real_escape_string(trim($_POST["kategorija"]));
if(isset($_POST['ostaleTehnike'])){
       $tehnikeRealizacije = mysql_real_escape_string(trim($_POST["ostaleTehnike"]));	
		}
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
$datum = date("d").". ".date("m").". ".date("Y");

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

/*$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file
echo "File Name :".$_FILES['ufile']['name'][0]."<BR/>";
echo "File Size :".$_FILES['ufile']['size'][0]."<BR/>";
echo "File Type :".$_FILES['ufile']['type'][0]."<BR/>";
echo "<img src="$path" width="150" height="150">";
echo "<P>";

echo "File Name :".$_FILES['ufile']['name'][1]."<BR/>";
echo "File Size :".$_FILES['ufile']['size'][1]."<BR/>";
echo "File Type :".$_FILES['ufile']['type'][1]."<BR/>";
echo "<img src="$path1" width="150" height="150">";
echo "<P>";

echo "File Name :".$_FILES['ufile']['name'][2]."<BR/>";
echo "File Size :".$_FILES['ufile']['size'][2]."<BR/>";
echo "File Type :".$_FILES['ufile']['type'][2]."<BR/>";
echo "<img src="$path2" width="150" height="150">";
*/

//izraz za upis u nove knjige u bazu
$query2 = "
INSERT INTO  `balkanima_3120`.`prijavesolo` (
`originalniNaziv` ,
`engleskiNaziv` ,
`reziser` ,
`id` ,
`adresaRezisera` ,
`telefonRezisera` ,
`emailRezisera` ,
`biografija` ,
`minuti` ,
`sekunde` ,
`godinaProizvodnje` ,
`sinopsis` ,
`slika1` ,
`slika2` ,
`slikaRezisera` ,
`dozvola1` ,
`dozvola2` ,
`dozvola3` ,
`datum` ,
`kategorija`,
`tehnike`
) VALUES ('$originalniNaziv','$engleskiNaziv','$reziser',$id,'$adresaRezisera','$telefonRezisera','$emailRezisera','$biografija',$minuti,$sekunde,$godinaProizvodnje,'$sinopsis','$path1','$path2','$path','$dozvola1','$dozvola2','$dozvola3','$datum','$kategorija','$tehnikaRealizacije')";
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


<link href="thrColFixHdr.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://www.balkanima.org/favicon.ico" type="image/x-icon" />


<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.thrColFixHdr #sidebar1 { width: 180px; }
.thrColFixHdr #sidebar2 { width: 190px; }
</style>
<![endif]-->
<!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.thrColFixHdr #sidebar2, .thrColFixHdr #sidebar1 { padding-top: 30px; }
.thrColFixHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
<style type="text/css">
.warning
{ color:#F00;}
.tdLeft{
	text-align:left;
	}
.tdRight{
	text-align:right;
}
<!--
p.MsoNormal {
margin-top:0cm;
margin-right:0cm;
margin-bottom:10.0pt;
margin-left:0cm;
line-height:115%;
font-size:11.0pt;
font-family:"Calibri","sans-serif";
}
.v {	text-transform: uppercase;
}
-->
</style>
<script type="text/javascript">
function ckeckIfEmty(str)
{
//ako je polje prazno upozori
if (str=="")
  {
  document.getElementById("txtHint1").innerHTML="You must fill all required fields .";
  document.getElementById("txtHint2").innerHTML="You must fill all required fields .";
  document.getElementById("txtHint3").innerHTML="You must fill all required fields .";
  return;
  }
  document.getElementById("txtHint1").innerHTML="";
  document.getElementById("txtHint2").innerHTML="";
  document.getElementById("txtHint3").innerHTML="";
}
function validateEmail(str)
{
var x=str;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
</head>
<body class="thrColFixHdr">
<div id="container">
  <div id="header">
  </div>
  <!-- Obrati paznju na height-->
  <div id="mainContent">
    <br />
<br />
Your application was successfully submited.<br />
<br />
ID number of your film is: A<span style="font-size:14px; font-weight:bold"><?php echo $id?></span>. Please mark DVD for pre-selection with ID number and send it to the following address:<br />
<br />
<p><strong>Balkanima Festival<br />
  Students' City Cultural Center  <br />
  Bulevar Zorana Đinđića 179<br />
  11070 Novi Beograd<br />
  Serbia</strong></p>
<p>Application Deadline: May 30th, 2012 (date of postmark)<br />
<br />
<br />
<br />
</p>

<!-- end #mainContent -->
  </div>
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
  <br class="clearfloat" />
  <div id="footer">   
    
    <!-- end #footer -->
  </div>
  <!-- end #container -->
</div>
</body>
</html>