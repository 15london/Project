<style type="text/css">
<!--
.style13 {font-family: Arial, "Arial Black", "Times New Roman";
	font-size: 12px;
}
.border {
	border: 1px solid #999;
	height: 25px;
	width: 200px;
}

.bordertxtarea {
	border: 1px solid #999;
	height: 70px;
	width: 200px;
}
.txtbutton {
	background-color: #900;
	height: 30px;
	width: 90px;
	color: #FFF;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<form action="view.php" method="post" name="addtrack">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td width="47%"><span class="style13">Country Name</span></td>
      <td width="53%"><span class="tablestype">
        <select name="country" class="border" id="country">
          <option value="Select Country" selected>Select Country</option>
          <option value="Afghanistan">Afghanistan </option>
          <option value="Albania">Albania </option>
          <option value="Algeria">Algeria </option>
          <option value="American Samoa">American Samoa </option>
          <option value="Andorra">Andorra </option>
          <option value="Angola">Angola </option>
          <option value="Anguilla">Angular </option>
          <option value="Antarctica">Antarctica </option>
          <option value="Antigua And Barbuda">Antigua And Barbuda </option>
          <option value="Argentina">Argentina </option>
          <option value="Armenia">Armenia </option>
          <option value="Aruba">Aruba </option>
          <option value="Australia">Australia </option>
          <option value="Austria">Austria </option>
          <option value="Azerbaijan">Azerbaijan </option>
          <option value="Bahamas">Bahamas </option>
          <option value="Bahrain">Bahrain </option>
          <option value="Bangladesh">Bangladesh </option>
          <option value="Barbados">Barbados </option>
          <option value="Belarus">Belarus </option>
          <option value="Belgium">Belgium </option>
          <option value="Belize">Belize </option>
          <option value="Benin">Benin </option>
          <option value="Bermuda">Bermuda </option>
          <option value="Bhutan">Bhutan </option>
          <option value="Bolivia">Bolivia </option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina </option>
          <option value="Botswana">Botswana </option>
          <option value="Bouvet Island">Above Island </option>
          <option value="Brazil">Brazil </option>
          <option value="Br. Indian Ocean Ter.">Br. Indian Ocean Ter.</option>
          <option value="Brunei">Brunei </option>
          <option value="Bulgaria">Bulgaria </option>
          <option value="Burkina Faso">Burkina Faso </option>
          <option value="Burundi">Burundi </option>
          <option value="Cambodia">Cambodia </option>
          <option value="Cameroon">Cameroon </option>
          <option value="Canada">Canada </option>
          <option value="Cape Verde">Cape Verde </option>
          <option value="Cayman Islands">Cayman Islands </option>
          <option value="Central African Rep">Central African Rep</option>
          <option value="Chad">Chad </option>
          <option value="Chile">Chile </option>
          <option value="China">China </option>
          <option value="China (Hong Kong)">China (Hong Kong) </option>
          <option value="Christmas Island">Christmas Island </option>
          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
          <option value="Colombia">Colombia </option>
          <option value="Comoros">Comoros </option>
          <option value="Congo">Congo </option>
          <option value="Cook Islands">Cook Islands </option>
          <option value="Costa Rica">Costa Rica </option>
          <option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast) </option>
          <option value="Croatia (Hrvatska)">Croatia (Hrvatska) </option>
          <option value="Cuba">Cuba </option>
          <option value="Cyprus">Cyprus </option>
          <option value="Czech Republic">Czech Republic </option>
          <option value="Dem Rep of Congo (Zaire)">Dem Rep of Congo (Zaire) </option>
          <option value="Denmark">Denmark </option>
          <option value="Djibouti">Djibouti </option>
          <option value="Dominica">Dominica </option>
          <option value="Dominican Republic">Dominican Republic </option>
          <option value="East Timor">East Timor </option>
          <option value="Ecuador">Ecuador </option>
          <option value="Egypt">Egypt </option>
          <option value="El Salvador">El Salvador </option>
          <option value="Equatorial Guinea">Equatorial Guinea </option>
          <option value="Eritrea">Eritrea </option>
          <option value="Estonia">Estonia </option>
          <option value="Ethiopia">Ethiopia </option>
          <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas) </option>
          <option value="Faroe Islands">Faroe Islands </option>
          <option value="Fiji">Fiji </option>
          <option value="Finland">Finland </option>
          <option value="France">France </option>
          <option value="French Guiana">French Guiana </option>
          <option value="French Polynesia">French Polynesia </option>
          <option value="French Southern Ter.">French Southern Ter.</option>
          <option value="Gabon">Gabon </option>
          <option value="Gambia">Gambia </option>
          <option value="Georgia">Georgia </option>
          <option value="Germany">Germany </option>
          <option value="Ghana">Ghana </option>
          <option value="Gibraltar">Gibraltar </option>
          <option value="Greece">Greece </option>
          <option value="Greenland">Greenland </option>
          <option value="Grenada">Grenada </option>
          <option value="Guadeloupe">Guadeloupe </option>
          <option value="Guam">Guam </option>
          <option value="Guatemala">Guatemala </option>
          <option value="Guinea">Guinea </option>
          <option value="Guinea-Bissau">Guinea-Bissau </option>
          <option value="Guyana">Guyana </option>
          <option value="Haiti">Haiti </option>
          <option value="Heard and McDonald Isl.">Heard and McDonald Isl.</option>
          <option value="Honduras">Honduras </option>
          <option value="Hungary">Hungary </option>
          <option value="Iceland">Iceland </option>
          <option value="India">India </option>
          <option value="Indonesia">Indonesia </option>
          <option value="Iran">Iran </option>
          <option value="Iraq">Iraq </option>
          <option value="Ireland">Ireland </option>
          <option value="Israel">Israel </option>
          <option value="Italy">Italy </option>
          <option value="Jamaica">Jamaica </option>
          <option value="Japan">Japan </option>
          <option value="Jordan">Jordan </option>
          <option value="Kazakhstan">Kazakhstan </option>
          <option value="Kenya">Kenya </option>
          <option value="Kiribati">Kiribati </option>
          <option value="Korea (North)">Korea (North)</option>
          <option value="Korea (South)">Korea (South) </option>
          <option value="Kuwait">Kuwait </option>
          <option value="Kyrgyzstan">Kyrgyzstan </option>
          <option value="Lao">Lao </option>
          <option value="Latvia">Latvia </option>
          <option value="Lebanon">Lebanon </option>
          <option value="Lesotho">Lesotho </option>
          <option value="Liberia">Liberia </option>
          <option value="Libya">Libya </option>
          <option value="Liechtenstein">Liechtenstein </option>
          <option value="Lithuania">Lithuania </option>
          <option value="Luxembourg">Luxembourg </option>
          <option value="Macao">Macao </option>
          <option value="Macedonia">Macedonia </option>
          <option value="Madagascar">Madagascar </option>
          <option value="Malawi">Malawi </option>
          <option value="Malaysia">Malaysia </option>
          <option value="Maldives">Maldives </option>
          <option value="Mali">Mali </option>
          <option value="Malta">Malta </option>
          <option value="Marshall Islands">Marshall Islands </option>
          <option value="Martinique">Martinique </option>
          <option value="Mauritania">Mauritania </option>
          <option value="Mauritius">Mauritius </option>
          <option value="Mayotte">Mayotte </option>
          <option value="Mexico">Mexico </option>
          <option value="Micronesia">Micronesia </option>
          <option value="Moldova">Moldova </option>
          <option value="Monaco">Monaco </option>
          <option value="Mongolia">Mongolia </option>
          <option value="Montserrat">Montserrat </option>
          <option value="Morocco">Morocco </option>
          <option value="Mozambique">Mozambique </option>
          <option value="Myanmar">Myanmar </option>
          <option value="Namibia">Namibia </option>
          <option value="Nauru">Nauru </option>
          <option value="Nepal">Nepal </option>
          <option value="Netherlands">Netherlands </option>
          <option value="Netherlands Antilles">Netherlands Antilles </option>
          <option value="New Caledonia">New Caledonia </option>
          <option value="New Zealand">New Zealand </option>
          <option value="Nicaragua">Nicaragua </option>
          <option value="Niger">Niger </option>
          <option value="Nigeria">Nigeria </option>
          <option value="Niue">Niue </option>
          <option value="Norfolk Island">Norfolk Island </option>
          <option value="Northern Mariana Islands">Northern Mariana Islands </option>
          <option value="Norway">Norway </option>
          <option value="Oman">Oman </option>
          <option value="Pakistan">Pakistan </option>
          <option value="Palau">Palau </option>
          <option value="Panama">Panama </option>
          <option value="Papua new Guinea">Papua new Guinea </option>
          <option value="Paraguay">Paraguay </option>
          <option value="Peru">Peru </option>
          <option value="Philippines">Philippines </option>
          <option value="Pitcairn">Pitcairn </option>
          <option value="Poland">Poland </option>
          <option value="Portugal">Portugal </option>
          <option value="Puerto Rico">Puerto Rico </option>
          <option value="Qatar">Qatar </option>
          <option value="Reunion">Reunion </option>
          <option value="Romania">Romania </option>
          <option value="Russia">Russia </option>
          <option value="Rwanda">Rwanda </option>
          <option value="Saint Kitts And Nevis">Saint Kitts And Nevis </option>
          <option value="Saint Lucia">Saint Lucia </option>
          <option value="St Vincent and Grenadines">St Vincent &amp; Grenadines </option>
          <option value="Samoa">Samoa </option>
          <option value="San Marino">San Marino </option>
          <option value="Sao Tome and Principe">Sao Tome and Principe </option>
          <option value="Saudi Arabia">Saudi Arabia </option>
          <option value="Senegal">Senegal </option>
          <option value="Seychelles">Seychelles </option>
          <option value="Sierra Leone">Sierra Leone </option>
          <option value="Singapore">Singapore </option>
          <option value="Slovak Republic">Slovak Republic </option>
          <option value="Slovenia">Slovenia </option>
          <option value="Solomon Islands">Solomon Islands </option>
          <option value="Somalia">Somalia </option>
          <option value="South Africa">South Africa </option>
          <option value="Sth Georgia and Sandwich Isl.">Sth Georgia &amp; Sandwich Isl.</option>
          <option value="Spain">Spain </option>
          <option value="Sri Lanka">Sri Lanka </option>
          <option value="St Helena">St Helena </option>
          <option value="St Pierre and Miquelon">St Pierre and Miquelon </option>
          <option value="Sudan">Sudan </option>
          <option value="Suriname">Suriname </option>
          <option value="Svalbard and Jan Mayen Isl.">Svalbard &amp; Jan Mayen Isl.</option>
          <option value="Swaziland">Swaziland </option>
          <option value="Sweden">Sweden </option>
          <option value="Switzerland">Switzerland </option>
          <option value="Syria">Syria </option>
          <option value="Taiwan">Taiwan </option>
          <option value="Tajikistan">Tajikistan </option>
          <option value="Tanzania">Tanzania </option>
          <option value="Thailand">Thailand </option>
          <option value="Togo">Togo </option>
          <option value="Tokelau">Tokelau </option>
          <option value="Tonga">Tonga </option>
          <option value="Trinidad And Tobago">Trinidad And Tobago </option>
          <option value="Tunisia">Tunisia </option>
          <option value="Turkey">Turkey </option>
          <option value="Turkmenistan">Turkmenistan </option>
          <option value="Turks And Caicos Islands">Turks And Caicos Islands </option>
          <option value="Tuvalu">Tuvalu </option>
          <option value="Uganda">Uganda </option>
          <option value="Ukraine">Ukraine </option>
          <option value="United Arab Emirates">United Arab Emirates </option>
          <option value="United Kingdom">United Kingdom </option>
          <option value="United States">United States </option>
          <option value="US Minor Outlying Isl.">US Minor Outlying Isl.</option>
          <option value="Uruguay">Uruguay </option>
          <option value="Uzbekistan">Uzbekistan </option>
          <option value="Vanuatu">Vanuatu </option>
          <option value="Vatican City State">Vatican City State</option>
          <option value="Venezuela">Venezuela </option>
          <option value="Vietnam">Vietnam </option>
          <option value="Virgin Islands (British)">Virgin Islands (British) </option>
          <option value="Virgin Islands (US)">Virgin Islands (US) </option>
          <option value="Wallis And Futuna Islands">Wallis And Futuna Islands </option>
          <option value="Western Sahara">Western Sahara </option>
          <option value="Yemen">Yemen </option>
          <option value="Yugoslavia">Yugoslavia </option>
          <option value="Zaire (Dem Rep of Congo)">Zaire (Dem Rep of Congo)</option>
          <option value="Zambia">Zambia </option>
          <option value="Zimbabwe">Zimbabwe </option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td valign="top"><span class="style13"> Address:</span></td>
      <td><label>
        <textarea name="address" rows="4" class="bordertxtarea" id="address"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><span class="style13">Telephone 1</span></td>
      <td><input name="tele1" type="text" class="border" id="tele1" size="25"></td>
    </tr>
    <tr>
      <td><span class="style13">Telephone 2</span></td>
      <td><input name="tele2" type="text" class="border" id="tele2" size="25"></td>
    </tr>
    <tr>
      <td class="style13">Email Adress</td>
      <td><input name="email" type="text" class="border" id="email" size="25" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="addcontactbtn" type="submit" class="txtbutton" id="addcontactbtn" onclick="MM_validateForm('num','','R','shipdate','','R','estdate','','R','shiptype','','R','content','','R','recname','','R','tele','','R','status','','R','address','','R');return document.MM_returnValue" value="Add Contact">
      </label></td>
    </tr>
  </table>
</form>

<?php
if(isset($_REQUEST['addcontactbtn'])){
	//Include database connection details
require_once('Connection/conn.php');

     
	 $country = $_POST['country'];
	 $address = $_POST['address'];
	 $tele1 = $_POST['tele1'];
	 $tele2 = $_POST['tele2'];
	 $email = $_POST['email'];
	
	 
	 
	 $enter = mysql_query("INSERT INTO contactdetails SET 
	 country='$country',
	 address='$address',
	 tele1='$tele1',
	 tele2='$tele2',
	 email ='$email'
	 ");
	 
	 if(!$enter){
	 die("query error" . mysql_error());
	 }else if($enter){
	 echo("<center> Contact Added successful </center>");
	 }
	 
}
?>
