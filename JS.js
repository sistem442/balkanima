var id;
var m1='School data successfully submited! You can now enter data for all films.';
var m2='Film successfully submited!';
var m3='Not a valid e-mail address!';
$(document).ready(function(){
	if($("#lang").val()=="sr"){
		 m1='Podaci skole su uspesno upisani u bazu! Sada mozete upisati podatke o filmovima';
		 m2='Podaci o filmu su uspesno upisani!';
		 m3='E-mail adresa nije dobro upisana!';
		}
	$(function(){
	    $("#submit").click(function(){   
	    	$.post("test6.php",{
				'schoolName':$('#schoolName').val(),
				'schoolAddress':$('#schoolAddress').val(),
				'schoolEmail':$('#schoolEmail').val(),
				'schoolTelephone':$('#schoolTelephone').val(),
				'country':$('#country option:selected').text(),
				'numberOfFilms':$('#numberOfFilms').val(),
				'productionDate':$('#productionDate').val(),
				'schoolWebsite':$('#schoolWebsite').val(),
				'dozvola1':$('#dozvola1').prop('checked'),
				'dozvola2':$('#dozvola2').prop('checked'),
				'dozvola3':$('#dozvola3').prop('checked')
				},function(data){
					id = (data.id);        
	        }, "json");
	    	
	    alert(m1);
		$('#schoolFilmApplicationForm').css("display","block");
		$('#schoolApplicationForm').css("display","none");
		$('#choice').css("display","block");	
	    });
	 
	});		
	function submitFilm()
		//if #tehnikeRealizacije is other send to database value of #ostaleTehnike input
		{
			if ($("#tehnikeRealizacije option:selected").val()=="Druge tehnike / Other techniques")
		{
			var tehnika = $("#ostaleTehnike").val();
		}
		else
		{
			var tehnika = $("#tehnikeRealizacije option:selected").val();
		}
		// send data to database
		$.post('test7.php', {
			'schoolID': id,
			'originalniNaziv':$('#originalniNaziv').val(),
			'engleskiNaziv':$('#engleskiNaziv').val(),
			'preview_link':$('#preview_link').val(),
			'minuti':$('#minuti').val(),
			'sekunde':$('#sekunde').val(),
			'reziser':$('#reziser').val(),
			'emailRezisera':$('#emailRezisera').val(),
			'scenario':$('#scenario').val(),
			'animacija':$('#animacija').val(),
			'crtez':$('#crtez').val(),
			'muzika':$('#muzika').val(),
			'zvucniEfekti':$('#zvucniEfekti').val(),
			'montaza':$('#montaza').val(),
			'tehnikeRealizacije':tehnika
			},function(data){
				$('#aaa').text(data.id);
				},"json");
		//clear all elements
		$('#schoolFilmApplicationForm').find("input[type=text], textarea").val("");
		alert(m2);
	}		
	$('#submitFilm').click(function(){
		submitFilm();
		$('#schoolFilmApplicationForm').css("display","none");
		$('#choice').css("display","block");
	});
	$('#submitAnotherFilm').click(function(){
		submitFilm();
		//$('#choice').css("display","none");
		//$('#schoolFilmApplicationForm').css("display","block");
	});
	$('#finish').click(function(){
		submitFilm();
		$('#schoolFilmApplicationForm').css("display","none");
		$('#choice').css("display","none");
		$('#information').css("display","block");
		//$('#aaa').text(schoolID);
	});
	$("#tehnikeRealizacije").change(function(){
	  	var tehnika = $("#tehnikeRealizacije option:selected").val();
		if (tehnika=="Druge tehnike / Other techniques"){
			$("#otherTehniques").css("display","block");
			}
	});
	

		
});
function validateEmail(str){
	/*if($("#lang").val()=="sr"){
	    m3='E-mail adresa nije dobro upisana!';
		}*/
	var x=str;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	  {
	  alert(m3);
	  return false;
	  }
	}
$("schoolEmail").blur(function(){
   	validateEmail($this.val());
   	});
