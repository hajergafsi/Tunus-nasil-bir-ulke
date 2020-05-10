<?php

session_start();	


?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>iletişim</title>
        <link rel="stylesheet" type="text/css" href="../css/iletisim.css">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Thasadith' rel='stylesheet'>
        <style>
        .contact-us h2  {
            font-family: 'Thasadith';font-size: 45px; text-shadow: 4px 4px 4px #aaa;
        }
        </style>
        <style>
        body{
            font-family: 'Montez';font-size: 22px;
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
             <th><img src="../images/whatsapp.png">+21696098764</th>
             <th><img src="../images/phone.png">+905523058950</th>
             <th><img src="../images/instagram.png">Hajer Gafsi</th>
             <th><img src="../images/gmail.png">hajer.gafsi@ogr.sakarya.edu.tr</th>
             <th><img src="../images/facebook.png">Hajer Gafsi</th>
         </table>
     </div> 
        
    <div class="navbar" id="myNavbar">
        <a href="../homepage.php" target="_blank">Anasayfa    </a>
        <a href="../hakkinda.html" target="_blank">Hakkinda    </a>
        <a href="../ozgecmis.html" target="_blank">özgeçmiş   </a>
        <a href="../sehrim.html" target="_blank"> Şehrim    </a>
        <a href="../mirasimiz.html" target="_blank"> mirasimiz    </a>
        <a href="../login.php" target="_blank">login   </a>
        <a href="../iletisim.php" target="_blank">iletisim   </a>
        <a href="../javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div >
	
	<div class="container">
        <div class="contact-us">
        <table class="form">
            <tr>
                <th><img src="../images/clipboard.png" style="max-width:85px;padding : 20px 20px 0 30px"></th>   
                <th><h2>Gönderdiğiniz    Bilgiler </h2></th>
            </tr>
            <tr>
                <td class="titles">Ad : </td>
                <td><?php echo $_POST["ad"]; ?></td>
            </tr>
            <tr>
                <td class="titles">Soyad : </td>
                <td><?php echo $_POST["soyad"]; ?></td>
            </tr>
             <tr>
                <td class="titles">Dogum Tarihi : </td>
                <td><?php echo $_POST["b_date"]; ?></td>
            </tr> 
                <td class="titles">Cinsiyet : </td>
                <td><?php echo ($_POST["cinsiyet"]);?></td>            
             <tr>
                <td class="titles">Ulke : </td>
                <td><?php echo $_POST["country"]; ?></td>
            </tr> 
             <tr>
                <td class="titles">E-posta : </td>
                <td><?php echo $_POST["e-mail"]; ?></td>
            </tr> 
             <tr>
                <td class="titles">Cep Telefonu : </td>
                <td><?php echo $_POST["telefon"]; ?></td>
            </tr> 
             <tr>
                <td class="titles">Mesajiniz : </td>
                <td><?php echo $_POST["message"]; ?></td>
            </tr> 

        </table>
            <div class="sonuc">
                <p style="font-size:20px;">
                   <?php if (isset($_POST["kabul"])) {echo $_POST["kabul"];}?>
                </p>
                <p style="font-size:20px;">
                  <?php if (isset($_POST['yeni'])) {echo $_POST['yeni'];}?>
                </p>
            </div>
        </div>
            <footer>
          <p style="font-size: 25px; text-align: center; padding-bottom:30px; "> Posted by: Hajer Gafsi<br>   Contact information: 
              <a href="hajergafsi15@yahoo.fr" style="color: blueviolet;">  hajergafsi15@yahoo.fr</a>.
          </p>   
    </footer> 
	</div>
    </body>