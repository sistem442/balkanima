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
//izbor baze
$id = $_GET['id'];	
$year = $_GET['yearStudent'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/backEnd.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Prikaz filmova Balkanima festivala</title>
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
    <h3>Prikaz prijavljenog filma u Studentskoj konkurenciji Balkanima festivala</h3>
    <br />
<br />
<br />
<a href="#" id="print3">Prikaži verziju za štampu</a><br />

<br />
<a style="color:#000" href="search.php">Nazad na pretragu</a>
<table width="100%">
      <tr valign="top">
        <td><form action="idResultStudent.php" method="get">
            <input type="hidden" value="<?php $temp =  $id-1; echo $temp?>" name="id" />
            <input type="hidden" name="yearStudent" value="<?php echo $year;?>" id='yearStudent' />
            <input type="submit" style="width:150px" value="Prethodni film">
          </form>
          <form action="idResultStudent.php" method="get">
            <input type="hidden" name="yearStudent" value="<?php echo $year;?>" />
            <input type="hidden" value="<?php $temp2 =  $id+1; echo $temp2?>" name="id" />
            <input type="submit" style="width:150px" value="Sledeci film">
          </form></td>
        <td><form action="idResultStudent.php" method="get">
            Prikaži film iz studentske konkurencije sa id brojem: 
                <input type="text" name="id" />
            <input type="hidden" name="yearStudent" value="<?php echo $year;?>" />
            <input type="submit" value="Prikaži">
          </form></td>
          
      </tr>
    </table>
    <?php
// Perform MySQL query on only the current page number's results  
$query = ("SELECT * FROM prijavestudenti2013 where id=$id and year = $year ");
//echo $query;
$result = mysql_query($query);  
$row = mysql_fetch_array($result);
echo '<input type="hidden" value="'.$row['id'].'" id="p3" />';
echo'<table cellpadding="10px" cellspacing="0px">';
    echo '<tr><td class="tabela">ID broj </td><td>'.$row['id']."</td></tr>"; 
	echo '<tr><td class="tabela">Preview link </td><td>'.$row['preview_link']."</td></tr>";  
    echo '<tr><td class="tabela">Originalni naziv </td><td>'.$row['originalniNaziv']."</td></tr>";  
    echo '<tr><td>Naziv na engleskom </td><td>'.$row['engleskiNaziv']."</td></tr>";  
    echo '<tr><td>Reziser </td><td>'.$row['reziser']."</td></tr>";  
    echo '<tr><td>Adresa rezisera</td><td>'.$row['adresaRezisera']."</td></tr>";  
    echo '<tr><td>Telefon rezisera </td><td>'.$row['telefonRezisera']."</td></tr>";  
    echo '<tr><td>Email rezisera </td><td>'.$row['emailRezisera']."</td></tr>";  
    echo '<tr><td>Biografija </td><td>'.$row['biografija']."</td></tr>";  
    echo '<tr><td>Škola </td><td>'.$row['school']."</td></tr>";  
    echo '<tr><td>Adresa škole </td><td>'.$row['schoolAddress']."</td></tr>";  
    echo '<tr><td>Email škole </td><td>'.$row['schoolEmail']."</td></tr>";  
    echo '<tr><td>Telefon škole</td><td>'.$row['schoolTelephone']."</td></tr>";  
    echo '<tr><td>Trajanje filma</td><td>'.$row['minuti']." minuta i ".$row['sekunde']." sekundi</td></tr>";  
    echo '<tr><td>Datum izrade</td><td>'.$row['mesecProizvodnje'].", ".$row['godinaProizvodnje']."</td></tr>";  
    echo '<tr><td>Scenario</td><td>'.$row['scenario']."</td></tr>";  
    echo '<tr><td>Animacija </td><td>'.$row['animacija']."</td></tr>";  
    echo '<tr><td>Crtež </td><td>'.$row['crtez']."</td></tr>";  
    echo '<tr><td>Scenografija</td><td>'.$row['scenografija']."</td></tr>";  
    echo '<tr><td>Trik kamera</td><td>'.$row['trikKamera']."</td></tr>";  
    echo '<tr><td>Muzika</td><td>'.$row['muzika']."</td></tr>";  
    echo '<tr><td>zvucni efekti</td><td>'.$row['zvucniEfekti']."</td></tr>";  
    echo '<tr><td>Montaza</td><td>'.$row['montaza']."</td></tr>";  
    echo '<tr><td>format</td><td>'.$row['format']."</td></tr>";  
    echo '<tr><td>Sinopsis</td><td>'.$row['sinopsis']."</td></tr>";  
    
    echo '<tr><td>Tehnike</td><td>'.$row['tehnike']."</td></tr>";
    echo '<tr><td>Slika Rezisera</td><td><img width="600px" src="../'.$row['slikaRezisera'].'"></td></tr>';  
    echo '<tr><td>Slika iz filma 1</td><td><img width="600px" src="../'.$row['slika1'].'"></td></tr>';  
    echo '<tr><td>Slika iz filma 2</td><td><img width="600px" src="../'.$row['slika2'].'"></td></tr>';  
	echo "</table>";
	  
?>
    <br />
    <br />
    <a style="color:#000" href="search.php">Nazad na pretragu</a>
<table width="100%">
      <tr valign="top">
        <td><form action="idResultStudent.php" method="get">
            <input type="hidden" value="<?php $temp =  $id-1; echo $temp?>" name="id" />
            <input type="hidden" name="yearStudent" value="<?php echo $year;?>" />
            <input type="submit" style="width:150px" value="Prethodni film">
          </form>
          <form action="idResultStudent.php" method="get">
            <input type="hidden" value="<?php $temp2 =  $id+1; echo $temp2?>" name="id" />
            <input type="hidden" name="yearStudent" value="<?php echo $year;?>" />
            <input type="submit" style="width:150px" value="Sledeci film">
          </form></td>
        <td><form action="idResultStudent.php" method="get">
            Prikaži film iz studentske konkurencije sa id brojem: 
                <input type="text" name="id" />
                <input type="hidden" name="yearStudent" value="<?php echo $year;?>" />
            <input type="submit" value="Prikaži">
          </form></td>
          
      </tr>
    </table>
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