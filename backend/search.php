<?php
session_start();
if (!isset($_SESSION['user'])) {
	echo "Niste prijavljeni!<br />
 <a href='login.php'>Prijava</a>
<br />";
}
include 'class_select_year.php';
$select1 = new select_year(2012);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pretraga Balkanima baze</title>
<link href="backendCSS.css" rel="stylesheet" type="text/css" />
<script src="../../jquery-1.9.1.min.js"></script>
<link rel="shortcut icon" href="http://www.balkanima.org/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="JS.js"></script>
</head>

<body>
<div class="container">
  <div class="content">
    <div class="title">Pretraga prijava za festival Balkanima</div>
    <div class="row">
        Prikazivanje filma iz autorske konkurencije<br />
        Unesite ID broj:
        <input style="width:50px; margin: 0 10px 0 10px" type="text" id="idAutor" name="idAutor" /><br />
        Unesite godinu:
        <select id="godinaAutor" name="godinaAutor" /><?php echo $select1->get_select_year_from();?></select><br />
        
        <a href="#" id="autorView">Prikaži film</a> <br />
		<a href="#" id="autorPrint">Prikaži verziju za štampu</a><br />
		<a href="#" id="autorTable">Prikaži tabelu</a>	
    </div>
    <div class="row">
        Prikazivanje filma iz studentske konkurencije<br />
        Unesite ID broj:
        <input style="width:50px; margin: 0 10px 0 10px" type="text" id="idStudent" /><br />
        Unesite godinu:
        <select id="yearStudent" name="yearStudent" /><?php echo $select1->get_select_year_from();?></select> <br />
        <br />
        <a href="#" id="studentView">Prikaži film</a><br />
		<a href="#" id="studentPrint">Prikaži verziju za štampu</a><br />
		<a href="#" id="studentTable">Prikaži tabelu</a>	
    </div>
    <div class="row">
      <form action="schollTable2013.php" method="get" >
        Prikazivanje spiska filmskih škola<br />
		Unesite godinu:
        <select id="godinaSkola" name="godinaSkola" /><?php echo $select1->get_select_year_from();?></form><br />
        
        <input type="submit" value="Prikaži tabelu"/>
      </form>
    </div>
    <!-- end .content --></div>
  <!-- end .container --></div>
</body>
</html>