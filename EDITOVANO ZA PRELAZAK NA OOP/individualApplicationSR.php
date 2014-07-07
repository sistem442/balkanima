
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Evropski festival animiranog filma Balkanima</title>
<link href="thrColFixHdr.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://www.balkanima.org/favicon.ico" type="image/x-icon" />
<script src="../../jquery-1.9.1.min.js"></script>
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
.warning {
	color: #F00;
}
.tdLeft {
	text-align: left;
}
.tdRight {
	text-align: right;
}
<!--
p.MsoNormal {
	margin-top: 0cm;
	margin-right: 0cm;
	margin-bottom: 10.0pt;
	margin-left: 0cm;
	line-height: 115%;
	font-size: 11.0pt;
	font-family: "Calibri", "sans-serif";
}
.v {
	text-transform: uppercase;
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
$(document).ready(function(){
  $("#tehnikeRealizacije").change(function(){
	  	var tehnika = $("#tehnikeRealizacije option:selected").text();
		if (tehnika=="Druge tehnike"){
			$("#hidden").css("visibility","visible");
			}
		else 
		$("#hidden").css("visibility","hidden");
	});
});
</script>
</head>
<body class="thrColFixHdr">
<div id="container">
  <div id="mainContent" style="height:2200px">
    <form action="individualApplicationResultSR.php"  method="post" enctype="multipart/form-data" name="applicationForm">
      <table border="0" cellspacing="10px" width="569px" align="left" >
        <tbody>
          <tr>
            <td align="center" colspan="2" style="background-color:#000; height:40px"><span style="color:#FFF; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:24px">Prijava</span></td>
          </tr>
          <tr>
            <td width="150px" class="tdRight">Kategorija filma</td>
            <td class="tdLeft"><select name="kategorijaFilma" style="width:300px;" class="tdLeft" id="kategorijaFilma">
                <br />
                <option value="autorska">Autorska konkurencija</option>
                <option value="studentska">Studentska konkurencija</option>
              </select></td>
          </tr>
          <tr>
            <td width="150px" class="tdRight">Originalni naziv</td>
            <td class="tdLeft"><input name="originalniNaziv" type="text" style="width:300px;" class="tdLeft" id="originalniNaziv" onblur="ckeckIfEmty(this.value)" />
              <div id="txtHint1" class="warning"></div></td>
          </tr>
          <tr>
            <td class="tdRight">Engleski naziv</td>
            <td class="tdLeft"><input name="engleskiNaziv" type="text" style="width:300px;" class="tdLeft" id="engleskiNaziv" onblur="ckeckIfEmty(this.value)" /></td>
          </tr>
          <tr>
            <td class="tdRight">Trajanje</td>
            <td class="tdLeft"><select name="minuti">
   <option>0</option>        
   <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
                <option>32</option>
                <option>33</option>
                <option>34</option>
                <option>35</option>
              </select>
              minuta
              <select name="sekunde">
        <option>0</option>
<option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
                <option>32</option>
                <option>33</option>
                <option>34</option>
                <option>35</option>
                <option>36</option>
                <option>37</option>
                <option>38</option>
                <option>39</option>
                <option>40</option>
                <option>41</option>
                <option>42</option>
                <option>43</option>
                <option>44</option>
                <option>45</option>
                <option>46</option>
                <option>47</option>
                <option>48</option>
                <option>49</option>
                <option>50</option>
                <option>51</option>
                <option>52</option>
                <option>53</option>
                <option>54</option>
                <option>55</option>
                <option>56</option>
                <option>57</option>
                <option>58</option>
                <option>59</option>
              </select>
              sekundi</td>
          </tr>
          <tr>
            <td class="tdRight">Godina Produkcije</td>
            <td class="tdLeft"><select name="godina" id="godina" >
                <option>2018</option>
                <option>2017</option>
                <option>2016</option>
                <option>2015</option>
                <option>2014</option>
                <option selected="selected">2013</option>
                <option>2012</option>
                <option>2011</option>
                <option>2010</option>
                <option>2009</option>
                <option>2008</option>
                <option>2007</option>
                <option>2006</option>
                <option>2005</option>
                <option>2004</option>
                <option>2003</option>
                <option>2002</option>
                <option>2001</option>
                <option>2000</option>
                <option>1999</option>
                <option>1998</option>
                <option>1997</option>
                <option>1996</option>
                <option>1995</option>
                <option>1994</option>
                <option>1993</option>
                <option>1992</option>
                <option>1991</option>
                <option>1990</option>
                <option>1989</option>
                <option>1988</option>
                <option>1987</option>
                <option>1986</option>
                <option>1985</option>
                <option>1984</option>
                <option>1983</option>
                <option>1982</option>
                <option>1981</option>
                <option>1980</option>
                <option>1979</option>
                <option>1978</option>
                <option>1977</option>
                <option>1976</option>
                <option>1975</option>
                <option>1974</option>
                <option>1973</option>
                <option>1972</option>
                <option>1971</option>
                <option>1970</option>
                <option>1969</option>
                <option>1968</option>
                <option>1967</option>
                <option>1966</option>
                <option>1965</option>
                <option>1964</option>
                <option>1963</option>
                <option>1962</option>
                <option>1961</option>
              </select></td>
          </tr>
          <tr>
            <td class="tdRight"> Kratak sadržaj filma</td>
            <td class="tdLeft"><textarea cols="34" rows="10"   id="sinopsis" name="sinopsis" onblur="ckeckIfEmty(this.value)">
        </textarea>
              <div id="txtHint3" class="warning"></div></td>
          </tr>
          <tr>
            <td colspan="2"><br />
              Podaci o autoru:<br />
              <br /></td>
          </tr>
          <tr>
            <td class="tdRight">Režiser</td>
            <td class="tdLeft"><input type="text" style="width:300px;" id="reziser" name="reziser" onblur="ckeckIfEmty(this.value)" /></td>
          </tr>
          <tr>
            <td class="tdRight">Biografija režisera</td>
            <td class="tdLeft"><textarea cols="34" rows="10"   id="biografija" name="biografija" onblur="ckeckIfEmty(this.value)">
        </textarea></td>
          </tr>
          <tr>
            <td class="tdRight">Adresa</td>
            <td class="tdLeft"><input type="text" style="width:300px;" id="adresaRezisera" name="adresaRezisera" onblur="ckeckIfEmty(this.value)"/></td>
          </tr>
          <tr>
            <td class="tdRight">Telefon</td>
            <td class="tdLeft"><input type="text" style="width:300px;" id="telefonRezisera" name="telefonRezisera" onblur="ckeckIfEmty(this.value)"/></td>
          </tr>
          <tr>
            <td class="tdRight">E-mail</td>
            <td class="tdLeft"><input type="text" style="width:300px;" id="emailRezisera" name="emailRezisera" , onblur="ckeckIfEmty(this.value) validateEmail(this.value)"/></td>
          </tr>
          <tr>
            <td class="tdRight" width="146">Tehnike realizacije</td>
            <td class="tdLeft"><select name="tehnikeRealizacije" id="tehnikeRealizacije">
                <option value="Crtež na papiru / Drawing On Cell">Crtež na papiru</option>
                <option value="Lutka / Puppets">Lutka</option>
                <option value="Plastelin / Plasticine">Plastelin</option>
                <option value="Kolaž / Cut-Out">Kolaž</option>
                <option value="Piksilacija / Pixilation">Piksilacija</option>
                <option value="2D kompjuter / 2D Computer">2D kompjuter</option>
                <option value="3D kompjuter / 3D Computer">3D kompjuter</option>
                <option value="Druge tehnike / Other techniques">Druge tehnike</option>
              </select></td>
          </tr>
          <tr id="hidden" style="visibility:hidden;">
            <td class="tdRight">Unesite ostale tehnike</td>
            <td class="tdLeft"><input type="text" style="width:300px;" id="ostaleTehnike" name="ostaleTehnike"/></td>
          </tr>
        <tr style="height:50px;">
          <td colspan="2"><hr style="color:#666; float:right" size="2px" width="550px" /></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><input type="checkbox" id="dozvola1" name="dozvola1" /></td>
          <td>Dozvoljavam da se 10 % trajanja filma mogu prikazati na televiziji radi informacije i promocije festivala.
            <hr style="color:#666" size="2px" /></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><input type="checkbox" id="dozvola2" name="dozvola2" /></td>
          <td align="left">Slažem se sa prikazivanjem mog filma na javnim nekomercijalnim projekcijama kojima se promoviše festival Balkanima kroz škole, kulturne institucije, festivale i filmska udruženja.
            <hr style="color:#666" size="2px" /></td>
        </tr>
        <tr>
          <td align="right" valign="middle"><input type="checkbox" id="dozvola3" name="dozvola3" /></td>
          <td align="left"><!--/td>
      <td--> 
            Slažem se da se fotografije i crteži iz filma mogu koristiti i na internetu za promociju festivala.
            <hr style="color:#666" size="2px" /></td>
        </tr>
        <tr>
          <td> Slika Režisera<br />
            (maksimalna veličina: 1MB) </td>
          <td bgcolor="#999999"><input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input  name="ufile[]" type="file" id="ufile[]" size="20" /></td>
        </tr>
        <tr style="height:20px;">
          <td colspan="2"><hr style="color:#666; float:right" size="2px" width="550px" /></td>
        </tr>
        <tr>
          <td>Slika iz filma 1<br />
            (maksimalna veličina: 1MB)</td>
          <td bgcolor="#999999"><input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input name="ufile[]" type="file" id="ufile[]" size="20" /></td>
        </tr>
        <tr style="height:20px;">
          <td colspan="2"><hr style="color:#666; float:right" size="2px" width="550px" /></td>
        </tr>
        <tr>
          <td>Slika iz filma 2<br />
            (maksimalna veličina: 1MB)</td>
          <td  bgcolor="#999999"><input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input name="ufile[]" type="file" id="ufile[]" size="20" /></td>
        </tr>
        <tr>
          <td></td>
          <td align="left"><p>DVD kopiju filma poslati na sledeću adresu:<br />
              <br />
              <strong>Balkanima Festival<br />
              Dom kulture Studentski grad<br />
              Bulevar Zorana Đinđića 179<br />
              11070 Novi Beograd<br />
              Srbija</strong></p>
            <p>Poslednji rok za slanje kopija je 30. maj 2012. (datum poštanskog pečata)</p></td>
        </tr>
        <tr>
          <td></td>
          <td><br />
            Molimo Vas da unesete broje sa slike u polje:<br />
            <div style="padding:12px; "><img src="captcha.php"></div>
            &nbsp;&nbsp;&nbsp;
            <input type="text" style="width:100px;" name="vercode" />
            <br />
            <div style="padding:12px">
              <input type="submit" name="Submit" value="Prijava" style="padding:5px" />
            </div>
            <br />
            <br /></td>
        </tr>
          </tbody>
        
      </table>
      <br/>
      <br/>
      <br/>
    </form>
    
    <!-- end #mainContent --> 
  </div>
  <br class="clearfloat" />
</div>
</body>
</html>