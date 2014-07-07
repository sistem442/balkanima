<?php 
	include 'class_select_year.php';
	$select1 = new select_year(2012);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.ddiv">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Balkanima European Animated Film Festival</title>
<link href="backendCSS.css" rel="stylesheet" type="text/css" />
<script src="../jquery-1.9.1.min.js"></script>
<link rel="shortcut icon" href="http://www.balkanima.org/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="JS.js"></script>
</head>
<body>
<div class="container"> <img src="images/logoHorizontalSR.jpg" />
  <div class="title">Forma za prijavu</div>
  <form action="individualApplicationResultSR.php" style="width:800px"  method="post" enctype="multipart/form-data" name="applicationForm">
    <div class="left">Originalni naziv</div>
    <div class="right">
      <input name="originalniNaziv" type="text" style="width:500px;" id="originalniNaziv" onblur="ckeckIfEmty(this.value)" />
      <div id="txtHint1" class="warning"></div>
    </div>
    <div class="clearfloat"></div>
    <div class="left">Engleski naziv</div>
    <div class="right">
      <input name="engleskiNaziv" type="text" style="width:500px;" id="engleskiNaziv" onblur="ckeckIfEmty(this.value)" />
    </div>
    <div class="clearfloat"></div>
    <div class="left">Trajanje filma</div>
    <div class="left">
      <select name="minuti">
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
      sekundi </div>
    <div class="clearfloat"></div>
    <div class="left">Zemlja</div>
    <div class="right">
      <select name="zemlja" style="width:500px;"> 
            <option value="" selected="selected">Izaberite državu</option> 
            <option value="United States">United States</option> 
            <option value="United Kingdom">United Kingdom</option> 
            <option value="Afghanistan">Afghanistan</option> 
            <option value="Albania">Albania</option> 
            <option value="Algeria">Algeria</option> 
            <option value="American Samoa">American Samoa</option> 
            <option value="Andorra">Andorra</option> 
            <option value="Angola">Angola</option> 
            <option value="Anguilla">Anguilla</option> 
            <option value="Antarctica">Antarctica</option> 
            <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
            <option value="Argentina">Argentina</option> 
            <option value="Armenia">Armenia</option> 
            <option value="Aruba">Aruba</option> 
            <option value="Australia">Australia</option> 
            <option value="Austria">Austria</option> 
            <option value="Azerbaijan">Azerbaijan</option> 
            <option value="Bahamas">Bahamas</option> 
            <option value="Bahrain">Bahrain</option> 
            <option value="Bangladesh">Bangladesh</option> 
            <option value="Barbados">Barbados</option> 
            <option value="Belarus">Belarus</option> 
            <option value="Belgium">Belgium</option> 
            <option value="Belize">Belize</option> 
            <option value="Benin">Benin</option> 
            <option value="Bermuda">Bermuda</option> 
            <option value="Bhutan">Bhutan</option> 
            <option value="Bolivia">Bolivia</option> 
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
            <option value="Botswana">Botswana</option> 
            <option value="Bouvet Island">Bouvet Island</option> 
            <option value="Brazil">Brazil</option> 
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
            <option value="Brunei Darussalam">Brunei Darussalam</option> 
            <option value="Bulgaria">Bulgaria</option> 
            <option value="Burkina Faso">Burkina Faso</option> 
            <option value="Burundi">Burundi</option> 
            <option value="Cambodia">Cambodia</option> 
            <option value="Cameroon">Cameroon</option> 
            <option value="Canada">Canada</option> 
            <option value="Cape Verde">Cape Verde</option> 
            <option value="Cayman Islands">Cayman Islands</option> 
            <option value="Central African Republic">Central African Republic</option> 
            <option value="Chad">Chad</option> 
            <option value="Chile">Chile</option> 
            <option value="China">China</option> 
            <option value="Christmas Island">Christmas Island</option> 
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
            <option value="Colombia">Colombia</option> 
            <option value="Comoros">Comoros</option> 
            <option value="Congo">Congo</option> 
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
            <option value="Cook Islands">Cook Islands</option> 
            <option value="Costa Rica">Costa Rica</option> 
            <option value="Cote D'ivoire">Cote D'ivoire</option> 
            <option value="Croatia">Croatia</option> 
            <option value="Cuba">Cuba</option> 
            <option value="Cyprus">Cyprus</option> 
            <option value="Czech Republic">Czech Republic</option> 
            <option value="Denmark">Denmark</option> 
            <option value="Djibouti">Djibouti</option> 
            <option value="Dominica">Dominica</option> 
            <option value="Dominican Republic">Dominican Republic</option> 
            <option value="Ecuador">Ecuador</option> 
            <option value="Egypt">Egypt</option> 
            <option value="El Salvador">El Salvador</option> 
            <option value="Equatorial Guinea">Equatorial Guinea</option> 
            <option value="Eritrea">Eritrea</option> 
            <option value="Estonia">Estonia</option> 
            <option value="Ethiopia">Ethiopia</option> 
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
            <option value="Faroe Islands">Faroe Islands</option> 
            <option value="Fiji">Fiji</option> 
            <option value="Finland">Finland</option> 
            <option value="France">France</option> 
            <option value="French Guiana">French Guiana</option> 
            <option value="French Polynesia">French Polynesia</option> 
            <option value="French Southern Territories">French Southern Territories</option> 
            <option value="Gabon">Gabon</option> 
            <option value="Gambia">Gambia</option> 
            <option value="Georgia">Georgia</option> 
            <option value="Germany">Germany</option> 
            <option value="Ghana">Ghana</option> 
            <option value="Gibraltar">Gibraltar</option> 
            <option value="Greece">Greece</option> 
            <option value="Greenland">Greenland</option> 
            <option value="Grenada">Grenada</option> 
            <option value="Guadeloupe">Guadeloupe</option> 
            <option value="Guam">Guam</option> 
            <option value="Guatemala">Guatemala</option> 
            <option value="Guinea">Guinea</option> 
            <option value="Guinea-bissau">Guinea-bissau</option> 
            <option value="Guyana">Guyana</option> 
            <option value="Haiti">Haiti</option> 
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
            <option value="Honduras">Honduras</option> 
            <option value="Hong Kong">Hong Kong</option> 
            <option value="Hungary">Hungary</option> 
            <option value="Iceland">Iceland</option> 
            <option value="India">India</option> 
            <option value="Indonesia">Indonesia</option> 
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
            <option value="Iraq">Iraq</option> 
            <option value="Ireland">Ireland</option> 
            <option value="Israel">Israel</option> 
            <option value="Italy">Italy</option> 
            <option value="Jamaica">Jamaica</option> 
            <option value="Japan">Japan</option> 
            <option value="Jordan">Jordan</option> 
            <option value="Kazakhstan">Kazakhstan</option> 
            <option value="Kenya">Kenya</option> 
            <option value="Kiribati">Kiribati</option> 
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
            <option value="Korea, Republic of">Korea, Republic of</option> 
            <option value="Kuwait">Kuwait</option> 
            <option value="Kyrgyzstan">Kyrgyzstan</option> 
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
            <option value="Latvia">Latvia</option> 
            <option value="Lebanon">Lebanon</option> 
            <option value="Lesotho">Lesotho</option> 
            <option value="Liberia">Liberia</option> 
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
            <option value="Liechtenstein">Liechtenstein</option> 
            <option value="Lithuania">Lithuania</option> 
            <option value="Luxembourg">Luxembourg</option> 
            <option value="Macao">Macao</option> 
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
            <option value="Madagascar">Madagascar</option> 
            <option value="Malawi">Malawi</option> 
            <option value="Malaysia">Malaysia</option> 
            <option value="Maldives">Maldives</option> 
            <option value="Mali">Mali</option> 
            <option value="Malta">Malta</option> 
            <option value="Marshall Islands">Marshall Islands</option> 
            <option value="Martinique">Martinique</option> 
            <option value="Mauritania">Mauritania</option> 
            <option value="Mauritius">Mauritius</option> 
            <option value="Mayotte">Mayotte</option> 
            <option value="Mexico">Mexico</option> 
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
            <option value="Moldova, Republic of">Moldova, Republic of</option> 
            <option value="Monaco">Monaco</option> 
            <option value="Mongolia">Mongolia</option> 
            <option value="Montserrat">Montserrat</option> 
            <option value="Montenegro">Montenegro</option>
            <option value="Morocco">Morocco</option> 
            <option value="Mozambique">Mozambique</option> 
            <option value="Myanmar">Myanmar</option> 
            <option value="Namibia">Namibia</option> 
            <option value="Nauru">Nauru</option> 
            <option value="Nepal">Nepal</option> 
            <option value="Netherlands">Netherlands</option> 
            <option value="Netherlands Antilles">Netherlands Antilles</option> 
            <option value="New Caledonia">New Caledonia</option> 
            <option value="New Zealand">New Zealand</option> 
            <option value="Nicaragua">Nicaragua</option> 
            <option value="Niger">Niger</option> 
            <option value="Nigeria">Nigeria</option> 
            <option value="Niue">Niue</option> 
            <option value="Norfolk Island">Norfolk Island</option> 
            <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
            <option value="Norway">Norway</option> 
            <option value="Oman">Oman</option> 
            <option value="Pakistan">Pakistan</option> 
            <option value="Palau">Palau</option> 
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
            <option value="Panama">Panama</option> 
            <option value="Papua New Guinea">Papua New Guinea</option> 
            <option value="Paraguay">Paraguay</option> 
            <option value="Peru">Peru</option> 
            <option value="Philippines">Philippines</option> 
            <option value="Pitcairn">Pitcairn</option> 
            <option value="Poland">Poland</option> 
            <option value="Portugal">Portugal</option> 
            <option value="Puerto Rico">Puerto Rico</option> 
            <option value="Qatar">Qatar</option> 
            <option value="Reunion">Reunion</option> 
            <option value="Romania">Romania</option> 
            <option value="Russian Federation">Russian Federation</option> 
            <option value="Rwanda">Rwanda</option> 
            <option value="Saint Helena">Saint Helena</option> 
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
            <option value="Saint Lucia">Saint Lucia</option> 
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
            <option value="Samoa">Samoa</option> 
            <option value="San Marino">San Marino</option> 
            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
            <option value="Saudi Arabia">Saudi Arabia</option> 
            <option value="Senegal">Senegal</option> 
            <option value="Serbia">Serbia</option> 
            <option value="Seychelles">Seychelles</option> 
            <option value="Sierra Leone">Sierra Leone</option> 
            <option value="Singapore">Singapore</option> 
            <option value="Slovakia">Slovakia</option> 
            <option value="Slovenia">Slovenia</option> 
            <option value="Solomon Islands">Solomon Islands</option> 
            <option value="Somalia">Somalia</option> 
            <option value="South Africa">South Africa</option> 
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
            <option value="Spain">Spain</option> 
            <option value="Sri Lanka">Sri Lanka</option> 
            <option value="Sudan">Sudan</option> 
            <option value="Suriname">Suriname</option> 
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
            <option value="Swaziland">Swaziland</option> 
            <option value="Sweden">Sweden</option> 
            <option value="Switzerland">Switzerland</option> 
            <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
            <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
            <option value="Tajikistan">Tajikistan</option> 
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
            <option value="Thailand">Thailand</option> 
            <option value="Timor-leste">Timor-leste</option> 
            <option value="Togo">Togo</option> 
            <option value="Tokelau">Tokelau</option> 
            <option value="Tonga">Tonga</option> 
            <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
            <option value="Tunisia">Tunisia</option> 
            <option value="Turkey">Turkey</option> 
            <option value="Turkmenistan">Turkmenistan</option> 
            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
            <option value="Tuvalu">Tuvalu</option> 
            <option value="Uganda">Uganda</option> 
            <option value="Ukraine">Ukraine</option> 
            <option value="United Arab Emirates">United Arab Emirates</option> 
            <option value="United Kingdom">United Kingdom</option> 
            <option value="United States">United States</option> 
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
            <option value="Uruguay">Uruguay</option> 
            <option value="Uzbekistan">Uzbekistan</option> 
            <option value="Vanuatu">Vanuatu</option> 
            <option value="Venezuela">Venezuela</option> 
            <option value="Viet Nam">Viet Nam</option> 
            <option value="Virgin Islands, British">Virgin Islands, British</option> 
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
            <option value="Wallis and Futuna">Wallis and Futuna</option> 
            <option value="Western Sahara">Western Sahara</option> 
            <option value="Yemen">Yemen</option> 
            <option value="Zambia">Zambia</option> 
            <option value="Zimbabwe">Zimbabwe</option>
        </select>       
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Godina proizvodnje</div>
    <div class="right">
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
      </select>
      <select name="godinaProizvodnje" onblur="ckeckIfEmty(this.value)">
        <?php echo $select1->get_select_year_from();?>
      </select>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Sadržaj filma </div>
    <div class="right">
      <textarea cols="60" rows="10"   id="sinopsis" name="sinopsis" onblur="ckeckIfEmty(this.value)">
        </textarea>
      <div id="txtHint3" class="warning"></div>
    </div>
    <div class="clearfloat"></div>
    <div class="spacer">&nbsp;</div>
    <div class="left">Režiser</div>
    <div class="right">
      <input type="text" style="width:500px;" id="reziser" name="reziser" onblur="ckeckIfEmty(this.value)" />
    </div>
    <div class="clearfloat"></div>
    <div class="left">Biografija režisera</div>
    <div class="right">
      <textarea cols="60" rows="10"   id="biografija" name="biografija" onblur="ckeckIfEmty(this.value)">
        </textarea>
    </div>
    <div class="clearfloat"></div>
    <div class="left">Adresa</div>
    <div class="right">
      <input type="text" style="width:500px;" id="adresaRezisera" name="adresaRezisera" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left">Telefon</div>
    <div class="right">
      <input type="text" style="width:500px;" id="telefonRezisera" name="telefonRezisera" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left">E-mail</div>
    <div class="right">
      <input type="text" style="width:500px;" id="emailRezisera" name="emailRezisera" , onblur="ckeckIfEmty(this.value) validateEmail(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="spacer">&nbsp;</div>
    <div class="left"> Producent</div>
    <div class="right">
      <input type="text" style="width:500px;" id="producent" name="producent" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Adresa </div>
    <div class="right">
      <input type="text" style="width:500px;" id="adresaProducenta" name="adresaProducenta" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Telefon</div>
    <div class="right">
      <input type="text" style="width:500px;" id="telefon" name="telefon"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> E-mail </div>
    <div class="right">
      <input type="text" style="width:500px;" id="emailProducenta" name="emailProducenta" onblur="ckeckIfEmty(this.value), validateEmail(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="spacer">&nbsp;</div>
    <div class="left">Format filma za prikazivanje</div>
    <div class="right">
      <select name="format" >
        <option>DVD</option>
        <option>Blu-Ray Disc</option>
        <option>Beta Sp</option>
        <option>DV Cam</option>
        <option>35mm</option>
      </select>
    </div>
    <div class="clearfloat"></div>
    <div class="left">Link na video</div>
    <div class="right">
      <input type="text" style="width:500px;" id="preview_link" name="preview_link" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Scenario</div>
    <div class="right">
      <input type="text" style="width:500px;" id="scenario" name="scenario" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Animacija </div>
    <div class="right">
      <input type="text" style="width:500px;" id="animacija" name="animacija" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Crtež</div>
    <div class="right">
      <input type="text" style="width:500px;" id="crtez" name="crtez" onblur="ckeckIfEmty(this.value)"/>
      <div id="txtHint2" class="warning"></div>
    </div>
    <div class="clearfloat"></div>
    <div class="left">Scenografija</div>
    <div class="right">
      <input type="text" style="width:500px;" id="scenografija" name="scenografija" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Kamera</div>
    <div class="right">
      <input type="text" style="width:500px;" id="trikKamera" name="trikKamera" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Muzika </div>
    <div class="right">
      <input type="text" style="width:500px;" id="muzika" name="muzika" onblur="ckeckIfEmty(this.value)"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Dizajn zvuka</div>
    <div class="right">
      <input type="text" style="width:500px;" id="zvucniEfekti" name="zvucniEfekti"/>
    </div>
    <div class="clearfloat"></div>
    <div class="left"> Montaža</div>
    <div class="right">
      <input type="text" style="width:500px;" id="montaza" name="montaza"/>
    </div>
    <div class="spacer">&nbsp;</div>
    <div class="left">Tehnike realizacije</div>
    <div class="right">
      <select name="tehnikeRealizacije" id="tehnikeRealizacije">
         <option value="Crtež na papiru / Drawing On Cell">Crtež na papiru</option>
        <option value="Lutka / Puppets">Lutka</option>
        <option value="Plastelin / Plasticine">Plastelin</option>
        <option value="Kolaž / Cut-Out">Kolaž</option>
        <option value="Piksilacija / Pixilation">Piksilacija</option>
        <option value="2D kompjuter / 2D Computer">2D kompjuter</option>
        <option value="3D kompjuter / 3D Computer">2D kompjuter</option>
        <option value="Druge tehnike / Other techniques">Ostale tehnike</option>
      </select>
    </div>
    <div class="clearfloat"></div>
    <div id="otherTehniques" style="display:none">
      <div class="left"> Unesite ostale tehnike:</div>
      <div class="right">
        <input type="text" style="width:500px;" id="ostaleTehnike" name="ostaleTehnike"/>
      </div>
    </div>
    <div class="clearfloat"></div>
    <div id="prep" class="left">Kategorije Filma</div>
    <div class="right">
      <select name="kategorija" id="kategorija">
        <option>Kratki animirani film</option>
        <option>Eksperimentalni film</option>
        <option>Reklamni film</option>
        <option>Film za decu</option>
        <option>Muzički spot</option>
      </select>
    </div>
    <div class="clearfloat"></div>
    <div>&nbsp;</div>
    <div class="left">
      <input type="checkbox" id="dozvola1" name="dozvola1" />
    </div>
    <div class="right">Dozvoljavam da se 10% trajanja filma mogu prikazati na televiziji radi informacije i promocije festivala.
    <div class="line"></div></div>
    <div class="clearfloat"></div>
    
    <div class="left">
      <input type="checkbox" id="dozvola2" name="dozvola2" />
    </div>
    <div class="right">Slažem se sa prikazivanjem mog filma na javnim nekomercijalnim projekcijama kojima se promoviše festival Balkanima kroz škole, ustanove, festivale i filmska udruženja.
      <div class="line"></div> </div>
    <div class="clearfloat"></div>
    
    <div class="left">
      <input type="checkbox" id="dozvola3" name="dozvola3" />
    </div>
    <div class="right">Slažem se da se fotografije iz filma mogu koristiti na internetu za promociju festivala.
      <div class="line"> </div></div>
    <div class="clearfloat"></div>
    <div class="right"> * Popunjavanjem ove prijave smatra se da ste prihvatili <a
			href="http://localhost/joomlatest/index.php/en/rules">propozicije i pravila festivala</a>.</div>
    <div class="clearfloat"></div>
    <div class="left"> Fotografija režisera<br />
      (max 1MB): </div>
    <div style="background-color:'#999'" class="right">
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
      <input name="ufile[]" type="file" id="ufile[]" size="20" />
    </div>
    <div class="clearfloat"></div>
    <div class="left">Slika iz filma 1<br />
      (max 1MB):</div>
    <div style="background-color:'#999'" class="right">
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
      <input name="ufile[]" type="file" id="ufile[]" size="20" />
    </div>
    <div class="clearfloat"></div>
    <div class="left">Slika iz filma 2<br />
      (max 1MB):</div>
    <div class="right"  style="background-color:'#999'">
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
      <input name="ufile[]" type="file" id="ufile[]" size="20" />
    </div>
    <div class="clearfloat"></div>
    <div class="right">
      	<!-- Molim Vas da obele�ite diskove za selekcionu komisiju 
	  	sa ovi id brojem: <strong>SC<div style="display: inline" id="aaa"></div></strong> -->
		<p>Pošaljite Vaše filmove na sledeću adresu: <br />
		<br />
		<strong>Balkanima Festival<br />
		Dom Kulture Studentski Grad <br />
		Bulevar Zorana Đinđića 179<br />
		11070 Novi Beograd<br />
		Srbija</strong></p>
		<p>
		Poslednji rok za slanje kopije filma je 30. jul 2014. (datum poštanskog pečata)</p>
		<br/>
		Unesite kod sa slike u polje:<br />
 <img src="captcha.php" style="margin:5px"/><br />
<input type="text" style="width:100px; margin:5px" name="vercode" /><br />
		<input type="submit" value="Prijavi film"/>
    </div>
  </form>
  <!-- end #container --> 
</div>
</body>
</html>