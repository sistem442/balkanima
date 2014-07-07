<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="file:///C|/Users/Sistem/wamp/www/balkanima2011/Templates/backEnd.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Prikazivanje spiska filmova Balkanima festival</title>
<!-- InstanceEndEditable -->
<link href="backendCSS.css" rel="stylesheet" type="text/css" />
<script src="../../jquery-1.9.1.min.js"></script>
<link rel="shortcut icon" href="http://www.balkanima.org/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="JS.js"></script>
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">
function prikazi(id,year){
	window.location = "idResultAutor.php?id="+id+"&year_individual="+year;
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
$year = $_GET['year_individual'];

$sql = mysql_query("SELECT * FROM prijaveindividual2013 WHERE year = $year ORDER BY id ASC");
$number_of_applications = mysql_num_rows($sql); // Get total of Num rows from the database query



$outputList = '';
while($row2 = mysql_fetch_array($sql)){ 

    $id = $row2["id"];
	//echo ' id broj je'.$id;
    $oriTitle = $row2["originalniNaziv"];

    $outputList .= '<tr>
	<td>'.$oriTitle.'</td>
	<td><input type="button" value="'.$id.'" onclick="prikazi('.$row2['id'].','.$year.')"/></td></tr>';
    
} // close while loop
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
     <h2>Ukupan broj prijava u pojedinačnoj konkurenciji: <?php echo $number_of_applications; ?></h2>
   </div> 
      
      <div style="margin-left:64px; margin-right:64px;">
	  <?php print "<table  border='2px' ><tr><td>Originalni naziv</td><td style='align:center'>ID broj</td></tr>
	  $outputList</table>"; ?></div>
<br />
<a style="color:#000" href="search.php">Nazad na pretragu</a>
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