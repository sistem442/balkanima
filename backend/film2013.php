<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
else{
	
	// Database Connection  
require_once("../DB_connect.php");
$id = $_GET['id'];	
$year = $_GET['godinaSkola'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/backEnd.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Prikaz filmova skola Balkanima festivala</title>
<!-- InstanceEndEditable -->
<link href="backendCSS.css" rel="stylesheet" type="text/css" />
<script src="../../jquery-1.9.1.min.js"></script>
<link rel="shortcut icon" href="http://www.balkanima.org/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="JS.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="container">
  <div class="sidebar1"> 
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1></h1>
    <!-- InstanceBeginEditable name="EditRegion3" -->
    <h3>Prikaz prijavljenog filma u konkurenciji filmskih škola Balkanima festivala</h3>
    <br />
	<a href="film2013print.php?id=<?php echo $id;?>&godinaSkola=<?php echo $year;?>">Prikaži verziju za štampu</a>    <br /><br />
    <a style="color:#000" href="search.php">Nazad na pretragu</a><br />
<br />
<br />

    <?php
//podaci o filmu	
$query = ("SELECT * FROM filmskola2013 where id=$id AND year = $year ");
$result = mysql_query($query);  
$row = mysql_fetch_array($result);
// nadji ime skole
$idSkole = $row['idskole'];
$query2 = ("SELECT ime FROM school2014 where id=$idSkole AND year = $year");
$result2 = mysql_query($query2);  
$row2 = mysql_fetch_array($result2);
//prikaz podataka
 	echo '<input type="hidden" value="'.$row['id'].'" id="p4" />';
	echo'<table cellpadding="10px" cellspacing="0px">';
    echo '<tr><td>Ime škole</td><td>'.$row2['ime']."</td></tr>"; 
   	echo '<tr><td>ID broj škole</td><td>'.$row['idskole']."</td></tr>"; 
	echo '<tr><td>ID broj filma</td><td>'.$row['id']."</td></tr>"; 
    echo '<tr><td>Originalni naziv </td><td>'.$row['originalniNaziv']."</td></tr>";  
    echo '<tr><td>Naziv na engleskom </td><td>'.$row['engleskiNaziv']."</td></tr>";
	echo '<tr><td>Link na video </td><td>'.$row['preview_link']."</td></tr>";  
    echo '<tr><td>Reziser </td><td>'.$row['reziser']."</td></tr>";  
    echo '<tr><td>Datum prijave filma</td><td>'.$row['datum']."</td></tr>";  
    echo '<tr><td>Scenario</td><td>'.$row['scenario']."</td></tr>";  
    echo '<tr><td>Animacija </td><td>'.$row['animacija']."</td></tr>";  
    echo '<tr><td>Crtež </td><td>'.$row['crtez']."</td></tr>"; 
    echo '<tr><td>Muzika</td><td>'.$row['muzika']."</td></tr>";  
    echo '<tr><td>zvucni efekti</td><td>'.$row['zvucniEfekti']."</td></tr>";    echo '<tr><td>Montaza</td><td>'.$row['montaza']."</td></tr>";        
	echo '<tr><td>Tehnike realizacije</td><td>'.$row['tehnikeRealizacije']."</td></tr>";        
   	echo "</table>";	  
?>
    <br />
    <br />
    <a style="color:#000" href="search.php">Nazad na pretragu</a>
    
    <br />
    <br />
    <br />
    <br />
    <!-- InstanceEndEditable --> 
    <!-- end .content --></div>
  <div class="sidebar2">
    <h4>&nbsp;</h4>
    <!-- end .sidebar2 --></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd -->
</html>
<?php } ?>