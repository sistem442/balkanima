// JavaScript Document
$(document).ready(function(){
	//prvi red
	$('#autorView').click(function(){
		window.location.href="idResultAutor.php?id="+$('#idAutor').val()+"&year_individual="+$('#godinaAutor').val();
	});
	$('#autorTable').click(function(){
		window.location.href="tableAutor.php?year_individual="+$('#godinaAutor').val();;
	});
	$('#autorPrint').click(function(){
		window.location.href="idResultAutorPrint.php?id="+$('#idAutor').val()+"&year_individual="+$('#godinaAutor').val();
	});
	
	//drugi red
	$('#studentView').click(function(){
		window.location.href="idResultStudent.php?id="+$('#idStudent').val()+"&yearStudent="+$('#yearStudent').val();
	});
	$('#studentTable').click(function(){
		window.location.href="tableStudent.php?yearStudent="+$('#yearStudent').val();
	});
	$('#studentPrint').click(function(){
		window.location.href="idResultstudentPrint.php?id="+$('#idStudent').val()+"&yearStudent="+$('#yearStudent').val();
	});
	
	//PRINT
	
	//strana idResultAuthor PRINT
		$('#autorPrint2').click(function(){
		window.location.href="idResultAutorPrint.php?id="+$('#idAutor2').val()+"&year_individual="+$('#year_individual').val();
	});
	
	//strana idResultStudent
	$('#print3').click(function(){
		window.location.href="idResultStudentPrint.php?id="+$('#p3').val()+"&yearStudent="+$('#yearStudent').val();
	});	
});
