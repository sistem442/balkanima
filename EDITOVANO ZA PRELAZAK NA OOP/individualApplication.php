
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Balkanima 9th. European Animated Film Festival</title>


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
  <div id="mainContent" style="height:2200px">
    <form action="individualApplicationResult.php"  method="post" enctype="multipart/form-data" name="applicationForm">
    <table border="0" cellspacing="10px" width="569px" align="left" >
      <tbody>
      <tr>
        <td align="center" colspan="2" style="background-color:#000; height:40px"><span style="color:#FFF; font-family:Arial, Helvetica, sans-serif; font-weight:bold; font-size:24px">Application Form </span></td>
      </tr>
      <tr>
        <td width="150px" class="tdRight">Original title</td>
        <td class="tdLeft"><input name="originalniNaziv" type="text" style="width:300px;" class="tdLeft" id="originalniNaziv" onblur="ckeckIfEmty(this.value)" />
          <div id="txtHint1" class="warning"></div></td>
      </tr>
      <tr>
        <td class="tdRight">Title in English</td>
        <td class="tdLeft"><input name="engleskiNaziv" type="text" style="width:300px;" class="tdLeft" id="engleskiNaziv" onblur="ckeckIfEmty(this.value)" /></td>
      </tr>
      <tr>
        <td class="tdRight">Director/Author</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="reziser" name="reziser" onblur="ckeckIfEmty(this.value)" /></td>
      </tr>
      <tr>
        <td class="tdRight">Address</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="adresaRezisera" name="adresaRezisera" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight">Telephone</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="telefonRezisera" name="telefonRezisera" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight">E-mail</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="emailRezisera" name="emailRezisera" , onblur="ckeckIfEmty(this.value) validateEmail(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight">Directors Biography</td>
        <td class="tdLeft"><textarea cols="34" rows="10"   id="biografija" name="biografija" onblur="ckeckIfEmty(this.value)">
        </textarea></td>
      </tr>
      <tr>
        <td class="tdRight"> Production </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="producent" name="producent" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Production Address </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="adresaProducenta" name="adresaProducenta" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Production Telephone </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="telefonProducenta" name="telefonProducenta"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Production E-mail </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="emailProducenta" name="emailProducenta" onblur="ckeckIfEmty(this.value), validateEmail(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight">Duration</td>
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
          minutes
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
          seconds </td>
      </tr>
      <tr>
        <td class="tdRight">Format for screening</td>
        <td class="tdLeft">
        <select name="format" >
        <option>DVD</option>
        <option>Blu-Ray Disc</option>
        <option>Beta Sp</option>
        <option>DV Cam</option>
        <option>35mm</option>
        </select>
        </td>
      </tr>
      <tr>
        <td class="tdRight"> Production date </td>
        <td class="tdLeft"> Month
        <select name="mesecProizvodnje">
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
        </select> Year
        <select name="godinaProizvodnje" onblur="ckeckIfEmty(this.value)">
          <option>2012</option>
          <option>2011</option>
          <option>2010</option>
        </select></td>
      </tr>
      <tr>
        <td class="tdRight"> Distributor</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="distribucija" name="distribucija" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Script</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="scenario" name="scenario" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Animation </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="animacija" name="animacija" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Drawing </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="crtez" name="crtez" onblur="ckeckIfEmty(this.value)"/>
          <div id="txtHint2" class="warning"></div></td>
      </tr>
      <tr>
        <td class="tdRight"> Background</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="scenografija" name="scenografija" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Camera </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="trikKamera" name="trikKamera" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Music </td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="muzika" name="muzika" onblur="ckeckIfEmty(this.value)"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Sound</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="zvucniEfekti" name="zvucniEfekti"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Editing</td>
        <td class="tdLeft"><input type="text" style="width:300px;" id="montaza" name="montaza"/></td>
      </tr>
      <tr>
        <td class="tdRight"> Film Synopsis </td>
        <td class="tdLeft"><textarea cols="34" rows="10"   id="sinopsis" name="sinopsis" onblur="ckeckIfEmty(this.value)">
        </textarea>
          <div id="txtHint3" class="warning"></div></td>
      </tr>
      <tr>
        <td class="tdRight" width="146">Technique(s)</td>
        <td class="tdLeft"><input type="text" style="width:300px;" name="tehnikeRealizacije" id="tehnikeRealizacije" /></td>
      </tr>
      <tr>
        <td class="tdRight">Competition</td>
        <td style="float:left"><input type="radio" name="konkurencija" id="konkurencija" value="studentska"/>
          Student Individual Competition
            <input type="radio" name="konkurencija" id="konkurencija" value="autorska" />
          Author`s Competition </td>
      </tr>
      <tr>
        <td class="tdRight">Film categories</td>
        <td><select name="kategorija" id="kategorija">
        <option>Short animation film</option>
        <option>Experimental film</option>
        <option>Advertising film</option>
        <option>Film for children</option>
        <option>Music video</option>
        </select></td>
      </tr>
      <tr style="height:50px;">
        <td colspan="2"><hr style="color:#666; float:right" size="2px" width="550px" /></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><input type="checkbox" id="dozvola1" name="dozvola1" /></td>
        <td>I authorize the screening of my film till 10 % of its length on television for information purposes.
          <hr style="color:#666" size="2px" /></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><input type="checkbox" id="dozvola2" name="dozvola2" /></td>
        <td align="left">I agree with the public screening of my film in special programmes promoted by Balkanima with no commercial purposes, and that are included in cultural activites organized by Schools, Cultural Associations, Film Societies and Festivals.
          <hr style="color:#666" size="2px" /></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><input type="checkbox" id="dozvola3" name="dozvola3" /></td>
        <td align="left"><!--/td>
      <td-->
          I agree to the use of photos of the film on internet for promotion purposes.
          <hr style="color:#666" size="2px" /></td>
      </tr>
      <tr>
        <td> Photo of a director<br />
(max size 1MB): </td>
        <td bgcolor="#999999"><input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
          <input name="ufile[]" type="file" id="ufile[]" size="20" /></td>
      </tr>
      <tr style="height:20px;">
        <td colspan="2"><hr style="color:#666; float:right" size="2px" width="550px" /></td>
      </tr>
      <tr>
        <td>Still from film 1<br />
(max size 1MB):</td>
        <td bgcolor="#999999"><input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
          <input name="ufile[]" type="file" id="ufile[]" size="20" /></td>
      </tr>
      <tr style="height:20px;">
        <td colspan="2"><hr style="color:#666; float:right" size="2px" width="550px" /></td>
      </tr>
      <tr>
        <td>Still from film 2<br />
(max size 1MB):</td>
        <td  bgcolor="#999999"><input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
          <input name="ufile[]" type="file" id="ufile[]" size="20" /></td>
      </tr>
      <tr>
        <td></td>
        <td align="left"><p>Send your films to the following address: <br /><br />

          <strong>Balkanima Festival<br />
            Students' City Cultural Center  <br />
            Bulevar Zorana Đinđića 179<br />
            11070 Novi Beograd<br />
            Serbia</strong></p>
          <p>Application Deadline: May 30th, 2012 (date of postmark)</p></td>
      </tr>
    <tr>
      <td></td><td><br />
        Please enter the code from the image: <br />
        <div style="padding:12px; "><img src="captcha.php"></div>
&nbsp;&nbsp;&nbsp;<input type="text" style="width:100px;" name="vercode" /><br />
        <div style="padding:12px"><input type="submit" name="Submit" value="Submit" style="padding:5px" /></div>
        <br />
        <br />
      </td></tr>
</tbody>
</table>
  <br/>
  <br/>  
  <br/>
</form>


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