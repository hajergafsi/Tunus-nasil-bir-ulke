<?php

session_start();	


?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>iletişim</title>
        <link rel="stylesheet" type="text/css" href="css/iletisim.css">
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet'>
        <script type="text/javascript" src="javascript/homepage.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <style>
        body{
            font-family: 'Montez';
        }
        .baslik {
            font-family: 'Amita'; text-shadow: 4px 4px 4px #aaa;
            }
            .text p{
                font-family: 'Bad Script'; font-size: 22px;
            }
        .baslik-kutusu p {
            font-family: 'Sofia';font-size: 22px;color: floralwhite;text-shadow: 4px 4px 4px #aaa;
        }
        </style>
    

    </head>
    <body>

     <header >
        <p class="head-title"><a href="homepage.php"> My website </a></p>
     </header>
    
     <div  class="head">
         <div class="baslik-kutusu">
          <h2 class="baslik">My Minimalistic Website</h2>
          <p>Turkiye'de Bilgisayar Muhendisligi okuyan bir uluslararasi ogrenci tarafindan yapilan basit bir site.<br>
             Siteme Hos geldiniz !
          </p>
         </div>
         <table style="padding: 50px 0 0 50px;color:white;">
             <th><img src="images/whatsapp.png">+21696098764</th>
             <th><img src="images/phone.png">+905523058950</th>
             <th><img src="images/instagram.png">Hajer Gafsi</th>
             <th><img src="images/gmail.png">hajer.gafsi@ogr.sakarya.edu.tr</th>
             <th><img src="images/facebook.png">Hajer Gafsi</th>
         </table>
     </div> 
        
    <div class="navbar" id="myNavbar">
        <a href="homepage.php" target="_blank">Anasayfa    </a>
        <a href="hakkinda.html" target="_blank">Hakkinda    </a>
        <a href="ozgecmis.html" target="_blank">özgeçmiş   </a>
        <a href="sehrim.html" target="_blank"> Şehrim    </a>
        <a href="mirasimiz.html" target="_blank"> mirasimiz    </a>
        <a href="login.php" target="_blank">login   </a>
        <a href="iletisim.php" target="_blank">iletisim   </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div >
    
    <!---------Iletisim sayfasi------------------->

    <div class="container">
    <div class="contact-us" >
        <div class="title" >
            <p><img src="images/email.png" style="max-width:50px; margin-right:10px;"> Bize ulaşın</p>
        </div>
        <form name="myForm" id="frm1" class="form-contact" action="includes/iletisim-formu.php" method="post" onsubmit="return validateForm()">
           <p style="font-size : 30px">Ad ve Soyad<input type="text" name="ad" placeholder="ad" style="margin-left:20px">
               <input type="text" name="soyad" placeholder="soyad"></p>
           <p style="font-size : 30px">
                Doğum Tarihi <input type="date" name="b_date" id="myDate">
           </p>
        <table style="margin-top:0;">
            <td>
           <p style="font-size : 30px">
               Ülke </p></td>
            <td>
             <div class="country-list"  >
               <select id="country" name="country">
               <option value="Afganistan">Afghanistan</option>
               <option value="Albania">Albania</option>
               <option value="Algeria">Algeria</option>
               <option value="American Samoa">American Samoa</option>
               <option value="Andorra">Andorra</option>
               <option value="Angola">Angola</option>
               <option value="Anguilla">Anguilla</option>
               <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
               <option value="Bonaire">Bonaire</option>
               <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
               <option value="Botswana">Botswana</option>
               <option value="Brazil">Brazil</option>
               <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
               <option value="Brunei">Brunei</option>
               <option value="Bulgaria">Bulgaria</option>
               <option value="Burkina Faso">Burkina Faso</option>
               <option value="Burundi">Burundi</option>
               <option value="Cambodia">Cambodia</option>
               <option value="Cameroon">Cameroon</option>
               <option value="Canada">Canada</option>
               <option value="Canary Islands">Canary Islands</option>
               <option value="Cape Verde">Cape Verde</option>
               <option value="Cayman Islands">Cayman Islands</option>
               <option value="Central African Republic">Central African Republic</option>
               <option value="Chad">Chad</option>
               <option value="Channel Islands">Channel Islands</option>
               <option value="Chile">Chile</option>
               <option value="China">China</option>
               <option value="Christmas Island">Christmas Island</option>
               <option value="Cocos Island">Cocos Island</option>
               <option value="Colombia">Colombia</option>
               <option value="Comoros">Comoros</option>
               <option value="Congo">Congo</option>
               <option value="Cook Islands">Cook Islands</option>
               <option value="Costa Rica">Costa Rica</option>
               <option value="Cote DIvoire">Cote DIvoire</option>
               <option value="Croatia">Croatia</option>
               <option value="Cuba">Cuba</option>
               <option value="Curaco">Curacao</option>
               <option value="Cyprus">Cyprus</option>
               <option value="Czech Republic">Czech Republic</option>
               <option value="Denmark">Denmark</option>
               <option value="Djibouti">Djibouti</option>
               <option value="Dominica">Dominica</option>
               <option value="Dominican Republic">Dominican Republic</option>
               <option value="East Timor">East Timor</option>
               <option value="Ecuador">Ecuador</option>
               <option value="Egypt">Egypt</option>
               <option value="El Salvador">El Salvador</option>
               <option value="Equatorial Guinea">Equatorial Guinea</option>
               <option value="Eritrea">Eritrea</option>
               <option value="Estonia">Estonia</option>
               <option value="Ethiopia">Ethiopia</option>
               <option value="Falkland Islands">Falkland Islands</option>
               <option value="Faroe Islands">Faroe Islands</option>
               <option value="Fiji">Fiji</option>
               <option value="Finland">Finland</option>
               <option value="France">France</option>
               <option value="French Guiana">French Guiana</option>
               <option value="French Polynesia">French Polynesia</option>
               <option value="French Southern Ter">French Southern Ter</option>
               <option value="Gabon">Gabon</option>
               <option value="Gambia">Gambia</option>
               <option value="Georgia">Georgia</option>
               <option value="Germany">Germany</option>
               <option value="Ghana">Ghana</option>
               <option value="Gibraltar">Gibraltar</option>
               <option value="Great Britain">Great Britain</option>
               <option value="Greece">Greece</option>
               <option value="Greenland">Greenland</option>
               <option value="Grenada">Grenada</option>
               <option value="Guadeloupe">Guadeloupe</option>
               <option value="Guam">Guam</option>
               <option value="Guatemala">Guatemala</option>
               <option value="Guinea">Guinea</option>
               <option value="Guyana">Guyana</option>
               <option value="Haiti">Haiti</option>
               <option value="Hawaii">Hawaii</option>
               <option value="Honduras">Honduras</option>
               <option value="Hong Kong">Hong Kong</option>
               <option value="Hungary">Hungary</option>
               <option value="Iceland">Iceland</option>
               <option value="Indonesia">Indonesia</option>
               <option value="India">India</option>
               <option value="Iran">Iran</option>
               <option value="Iraq">Iraq</option>
               <option value="Ireland">Ireland</option>
               <option value="Isle of Man">Isle of Man</option>
               <option value="Israel">Israel</option>
               <option value="Italy">Italy</option>
               <option value="Jamaica">Jamaica</option>
               <option value="Japan">Japan</option>
               <option value="Jordan">Jordan</option>
               <option value="Kazakhstan">Kazakhstan</option>
               <option value="Kenya">Kenya</option>
               <option value="Kiribati">Kiribati</option>
               <option value="Korea North">Korea North</option>
               <option value="Korea Sout">Korea South</option>
               <option value="Kuwait">Kuwait</option>
               <option value="Kyrgyzstan">Kyrgyzstan</option>
               <option value="Laos">Laos</option>
               <option value="Latvia">Latvia</option>
               <option value="Lebanon">Lebanon</option>
               <option value="Lesotho">Lesotho</option>
               <option value="Liberia">Liberia</option>
               <option value="Libya">Libya</option>
               <option value="Liechtenstein">Liechtenstein</option>
               <option value="Lithuania">Lithuania</option>
               <option value="Luxembourg">Luxembourg</option>
               <option value="Macau">Macau</option>
               <option value="Macedonia">Macedonia</option>
               <option value="Madagascar">Madagascar</option>
               <option value="Malaysia">Malaysia</option>
               <option value="Malawi">Malawi</option>
               <option value="Maldives">Maldives</option>
               <option value="Mali">Mali</option>
               <option value="Malta">Malta</option>
               <option value="Marshall Islands">Marshall Islands</option>
               <option value="Martinique">Martinique</option>
               <option value="Mauritania">Mauritania</option>
               <option value="Mauritius">Mauritius</option>
               <option value="Mayotte">Mayotte</option>
               <option value="Mexico">Mexico</option>
               <option value="Midway Islands">Midway Islands</option>
               <option value="Moldova">Moldova</option>
               <option value="Monaco">Monaco</option>
               <option value="Mongolia">Mongolia</option>
               <option value="Montserrat">Montserrat</option>
               <option value="Morocco">Morocco</option>
               <option value="Mozambique">Mozambique</option>
               <option value="Myanmar">Myanmar</option>
               <option value="Nambia">Nambia</option>
               <option value="Nauru">Nauru</option>
               <option value="Nepal">Nepal</option>
               <option value="Netherland Antilles">Netherland Antilles</option>
               <option value="Netherlands">Netherlands (Holland, Europe)</option>
               <option value="Nevis">Nevis</option>
               <option value="New Caledonia">New Caledonia</option>
               <option value="New Zealand">New Zealand</option>
               <option value="Nicaragua">Nicaragua</option>
               <option value="Niger">Niger</option>
               <option value="Nigeria">Nigeria</option>
               <option value="Niue">Niue</option>
               <option value="Norfolk Island">Norfolk Island</option>
               <option value="Norway">Norway</option>
               <option value="Oman">Oman</option>
               <option value="Pakistan">Pakistan</option>
               <option value="Palau Island">Palau Island</option>
               <option value="Palestine">Palestine</option>
               <option value="Panama">Panama</option>
               <option value="Papua New Guinea">Papua New Guinea</option>
               <option value="Paraguay">Paraguay</option>
               <option value="Peru">Peru</option>
               <option value="Phillipines">Philippines</option>
               <option value="Pitcairn Island">Pitcairn Island</option>
               <option value="Poland">Poland</option>
               <option value="Portugal">Portugal</option>
               <option value="Puerto Rico">Puerto Rico</option>
               <option value="Qatar">Qatar</option>
               <option value="Republic of Montenegro">Republic of Montenegro</option>
               <option value="Republic of Serbia">Republic of Serbia</option>
               <option value="Reunion">Reunion</option>
               <option value="Romania">Romania</option>
               <option value="Russia">Russia</option>
               <option value="Rwanda">Rwanda</option>
               <option value="St Barthelemy">St Barthelemy</option>
               <option value="St Eustatius">St Eustatius</option>
               <option value="St Helena">St Helena</option>
               <option value="St Kitts-Nevis">St Kitts-Nevis</option>
               <option value="St Lucia">St Lucia</option>
               <option value="St Maarten">St Maarten</option>
               <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
               <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
               <option value="Saipan">Saipan</option>
               <option value="Samoa">Samoa</option>
               <option value="Samoa American">Samoa American</option>
               <option value="San Marino">San Marino</option>
               <option value="Sao Tome & Principe">Sao Tome & Principe</option>
               <option value="Saudi Arabia">Saudi Arabia</option>
               <option value="Senegal">Senegal</option>
               <option value="Seychelles">Seychelles</option>
               <option value="Sierra Leone">Sierra Leone</option>
               <option value="Singapore">Singapore</option>
               <option value="Slovakia">Slovakia</option>
               <option value="Slovenia">Slovenia</option>
               <option value="Solomon Islands">Solomon Islands</option>
               <option value="Somalia">Somalia</option>
               <option value="South Africa">South Africa</option>
               <option value="Spain">Spain</option>
               <option value="Sri Lanka">Sri Lanka</option>
               <option value="Sudan">Sudan</option>
               <option value="Suriname">Suriname</option>
               <option value="Swaziland">Swaziland</option>
               <option value="Sweden">Sweden</option>
               <option value="Switzerland">Switzerland</option>
               <option value="Syria">Syria</option>
               <option value="Tahiti">Tahiti</option>
               <option value="Taiwan">Taiwan</option>
               <option value="Tajikistan">Tajikistan</option>
               <option value="Tanzania">Tanzania</option>
               <option value="Thailand">Thailand</option>
               <option value="Togo">Togo</option>
               <option value="Tokelau">Tokelau</option>
               <option value="Tonga">Tonga</option>
               <option value="Trinidad & Tobago">Trinidad & Tobago</option>
               <option value="Tunisia">Tunisia</option>
               <option value="Turkey">Turkey</option>
               <option value="Turkmenistan">Turkmenistan</option>
               <option value="Turks & Caicos Is">Turks & Caicos Is</option>
               <option value="Tuvalu">Tuvalu</option>
               <option value="Uganda">Uganda</option>
               <option value="United Kingdom">United Kingdom</option>
               <option value="Ukraine">Ukraine</option>
               <option value="United Arab Erimates">United Arab Emirates</option>
               <option value="United States of America">United States of America</option>
               <option value="Uraguay">Uruguay</option>
               <option value="Uzbekistan">Uzbekistan</option>
               <option value="Vanuatu">Vanuatu</option>
               <option value="Vatican City State">Vatican City State</option>
               <option value="Venezuela">Venezuela</option>
               <option value="Vietnam">Vietnam</option>
               <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
               <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
               <option value="Wake Island">Wake Island</option>
               <option value="Wallis & Futana Is">Wallis & Futana Is</option>
               <option value="Yemen">Yemen</option>
               <option value="Zaire">Zaire</option>
               <option value="Zambia">Zambia</option>
               <option value="Zimbabwe">Zimbabwe</option>
            </select>
           </div>
         </td>
        </table>
           <p style="font-size : 30px">
                Cinsiyet <input type="radio" name="cinsiyet" style="background:none; margin-left:70px; margin-right:5px;" value="kadın"> kadın 
                         <input type="radio" name="cinsiyet" style="background:none; margin-left:20px;margin-right:5px;" value="erkek">erkek  
           </p>
           <p style="font-size : 30px">
                E-posta <input type="email" name="e-mail" style="margin-right:0;margin-left:0" placeholder="E-mail"> 
                Cep Telefonu <input type="number" name="telefon" placeholder="Telefon">
           </p>
           <table>
           <td style="padding-top:0;vertical-align:top;">
           <p style="font-size : 30px;padding-top:0;vertical-align:top;"  valign="top">
                    Mesajiniz</p></td> 
               <td><textarea name="message" id="message" rows="10" cols="30"></textarea> </td>
           
           </table>
           <p style="font-size : 20px">
           <input type="checkbox" name="yeni" class="check" value="E-posta adresinize yeni yayınlar ve içerikler hakkında bildirim almak istiyorsunuz.">E-posta adresime yeni yayınlar ve içerikler hakkında bildirim almak istiyorum
           </p>
           <p style="font-size : 20px">
            <input type="checkbox" name="kabul" class="check" value="Yukarıda belirtilen kişisel bilgilerinizi bu web sitesinin sahibiyle paylaşmayı kabul ediyorsunuz.">Yukarıda belirtilen kişisel bilgilerimi bu web sitesinin sahibiyle paylaşmayı kabul ediyorum
           </p>
            <button type="submit" name="gonder" onclick="return validateForm()">Gönder</button>
            <button type="button" name="gonder" onclick="Temizle()">Temizle</button>
        </form>
    </div>
        <script>
        function validateForm() {
              var x = document.forms["myForm"]["ad"].value;
              var y = document.forms["myForm"]["soyad"].value;
              var d = document.getElementById("myDate").value;
              var e = document.forms["myForm"]["e-mail"].value;
              var c = document.forms["myForm"]["cinsiyet"].value;
              var t = document.forms["myForm"]["telefon"].value;
              var m = document.getElementById("message").value;
              if (x == "") {
                alert("ad boş bırakmayın");
                return false;
              }
              else if(y == "") {
                alert("soyad boş bırakmayın");
                return false;
              }
             else if(d == ""){
                alert("lütfen doğum tarihinizi belirtin");
                return false;
            } 
            else if(e == ""){
                alert("lütfen E-posta adresinizi belirtin");
                return false;
            } 
            else if(t == ""){
                alert("lütfen telefon numaramanızı belirtin");
                return false;
            } 
            else if(c == ""){
                alert("lütfen cinsiyetinizi belirtin");
                return false;
            } 
            else if(m == ""){
                alert("lütfen mesaj kısmını boş bırakmayınız");
                return false;
            } 
            else return true ;
        }
        
        function Temizle() {
          document.getElementById("frm1").reset();
        }
        
    </script>
        
    <footer>
          <p style="font-size: 25px; text-align: center; padding-bottom:30px; "> Posted by: Hajer Gafsi<br>   Contact information: 
              <a href="hajergafsi15@yahoo.fr" style="color: blueviolet;">  hajergafsi15@yahoo.fr</a>.
          </p>   
    </footer> 
    </div>
    </body>
