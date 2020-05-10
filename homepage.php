<?php

session_start();
		if(isset($_GET['login'])){	
			if ($_GET['login']== "succes"){
					echo '<script type="text/javascript">alert("Hos Geldiniz '.$_SESSION['userUid'].' !");</script>';
				}
			}


?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anasayfa</title>
        <link rel="stylesheet" type="text/css" href="css/style-home.css">
        <script type="text/javascript" src="javascript/homepage.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
        <style>
        body{
            font-family: 'Montez';font-size: 35px;
        }
        .baslik {
            font-family: 'Amita';    
            }
        </style>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <style>
        .baslik-kutusu p {
            font-family: 'Sofia';font-size: 22px;
        }
        </style>
    </head>
    <body>
    <div class="Container">
     <header>
     <table>
        <td class="website">
            <p class="head-title"><a href="homepage.php"> My website </a></p>
        </td>
        <td>
            <div  class="kullanici">
            <?php if (isset($_SESSION['userid'])){
                echo '<p> Hoş geldiniz '. $_SESSION['userUid']. ' </p>' ;
            }?>
            </div>
        </td>
    </table>  
     </header>
    
     <div  class="head">
         <div class="baslik-kutusu">
          <h2 class="baslik">My Minimalistic Website</h2>
          <p>Turkiye'de Bilgisayar Muhendisligi okuyan bir uluslararasi ogrenci tarafinden yapilan basit bir site.<br>
             Siteme Hos geldiniz !
          </p>
         </div>
     </div> 
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
        
 <table class="icons" cellspacing="20">
  <tr>
      <th><a href="hakkinda.html" target="_blank"><img src="images/woman.png"  ></a> </th>
      <th><a href="ozgecmis.html" target="_blank"><img src="images/resume1.png"></a></th>
      <th><a href="sehrim.html" target="_blank"> <img src="images/tunisia.png"></a></th>
      <th><a href="mirasimiz.html" target="_blank"><img src="images/column.png"></a></th>
      <th><a href="login.php" target="_blank"><img src="images/login.png"></a></th>
      <th><a href="iletisim.php" target="_blank"><img src="images/contact.png"></a></th>
  </tr>
  <tr>
    <td>Hakkinda</td>
    <td>özgeçmiş</td>
    <td>Şehrim  </td>
    <td> Mirasimiz </td>
    <td>Login </td>
    <td>Iletisim</td>
  </tr>
</table>
    
    
<footer>
          <p style="font-size: 25px; text-align: center; padding-bottom:30px; "> Posted by: Hajer Gafsi<br>   Contact information: 
              <a href="hajergafsi15@yahoo.fr" style="color: blueviolet;">  hajergafsi15@yahoo.fr</a>.
          </p>   
</footer> 

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>