<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
else{
	$id = $_GET['id'];	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="file:///C|/Users/Sistem/wamp/www/balkanima2011/Templates/backEnd.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Prikazivanje spiska filmova jedne škole Balkanima festivala</title>
<!-- InstanceEndEditable -->
<link href="../backendCSS.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">
function prikazi(id,godina){
	window.location = "film2013.php?id="+id+"&godinaSkola="+godina;
	}
</script>
<!-- InstanceEndEditable -->
</head>

<body>

<div class="container">
  <div class="sidebar1">
    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1></h1>   
    <!-- InstanceBeginEditable name="EditRegion3" -->
	
	
<?php
require_once("../DB_connect.php");
$id = $_GET['id'];
$year = $_GET['godinaSkola'];
$sql = mysql_query("SELECT * FROM filmskola2013 where idskole=$id AND year = $year ORDER BY id ASC");
$nr = mysql_num_rows($sql); 
// Build the Output Section Here
$outputList = '';
while($row2 = mysql_fetch_array($sql)){ 

    $idFilma = $row2["id"];
	//echo ' id broj je'.$id;
    $ime = $row2["originalniNaziv"];

    $outputList .= '<tr>
	<td>'.$ime.'</td>
	<td><input type="button" value="'.$idFilma.'" onclick="prikazi('.$row2['id'].','.$year.')"/></td></tr>';
    
} // close while loop
//ovo daje ime skole
$izraz2 = "SELECT * FROM school2014 where id=$id AND year=$year";
//echo $izraz2;
$imeSkole = mysql_query($izraz2);
$imeSkole2 = mysql_fetch_array($imeSkole);
$imeSkole3 = $imeSkole2["ime"];
?>
<html>
<head>
<title>Adam's Pagination</title>
<style type="text/css">
<!--
.pagNumActive {
    color: #000;
    border:#060 1px solid; background-color: #D2FFD2; padding-left:3px; padding-right:3px;
}
.paginationNumbers a:link {
    color: #000;
    text-decoration: none;
    border:#999 1px solid; background-color:#F0F0F0; padding-left:3px; padding-right:3px;
}
.paginationNumbers a:visited {
    color: #000;
    text-decoration: none;
    border:#999 1px solid; background-color:#F0F0F0; padding-left:3px; padding-right:3px;
}
.paginationNumbers a:hover {
    color: #000;
    text-decoration: none;
    border:#060 1px solid; background-color: #D2FFD2; padding-left:3px; padding-right:3px;
}
.paginationNumbers a:active {
    color: #000;
    text-decoration: none;
    border:#999 1px solid; background-color:#F0F0F0; padding-left:3px; padding-right:3px;
}
td {
	padding:5px
}
-->
</style>
</head>
<body>
   <div style="margin-left:64px; margin-right:64px;">
 Prikaz filmova škole: <?php echo $imeSkole3;?><br />
<br />

   </div> 
      <div style="margin-left:64px; margin-right:64px;">
	  <?php print "<table  border='2px' ><tr><td>Originalni naziv</td><td style='align:center'>ID broj</td></tr>
	  $outputList</table>"; ?></div>
<br />
<a style="color:#000" href="search.php">Nazad na pretragu</a>
<br />

</body>
</html>	
	
	<!-- InstanceEndEditable -->
    <!-- end .content --></div>
  <div class="sidebar2">
    <h4>&nbsp;</h4>
    <!-- end .sidebar2 --></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html><?php } ?>