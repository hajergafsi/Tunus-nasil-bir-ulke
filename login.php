<?php

session_start();	


?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script type="text/javascript" src="javascript/homepage.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet'>
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
            button{
                font-family: 'Bad Script'; font-size: 18px; 
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
          <p>Turkiye'de Bilgisayar Muhendisligi okuyan bir uluslararasi ogrenci tarafinden yapilan basit bir site.<br>
             Siteme Hos geldiniz !
          </p>
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
        
    <main>
	   <div class="wrapper-main">
       <section class="section-default"  >
	    <div class="title-box">
			<h1>Login</h1> 
        </div>
			<?php 

		if(isset($_SESSION['userUid'])){
			echo'<form action="includes/logout.inc.php" method="post">
			    <div  class="button" >
				<button type="submit" name="logout-submit">çikis yap</button>	
                </div>				
			 </form>';
			
		}
		else {
			if(isset($_GET['error'])){
				if($_GET['error']== "emptyfields" ){
					echo'<p class="login-hatasi">kullanıcı adı ve şifre alanlarını boş bırakmayınız ! </p>';
				}
				else if($_GET['error']== "noUser" ){
					echo'<p class="login-hatasi">kullanıcı adı veya E-mail hatalı ! </p>';
				}
				else if($_GET['error']== "wrongPassword" ){
					echo'<p class="login-hatasi">Girdiğiniz şifre hatalı ! </p>';
				}

			}

		 echo '<form class="form-login" action="includes/login.inc.php" method="post"><br>
           <!--<input type="text" name="uid" placeholder="kullanici adi"><br>-->
			<div class="email-box">
			   <img src="images/social%20(1).png">
			   <input type="text" name="mailuid" placeholder="E-mail"><br>
			</div>
			<div class="pwd-box">
			   <img src="images/lock%20(1).png">
			   <input type="password" name="pwd" placeholder="Password"><br>
			</div>
			  <div  class="button" >
			   <button type="submit" name="login-submit" onclick="mesaj()">Giriş yap</button>
			  </div>
			</form>';
		}
		?>




       </section>
        
        
      </div>
        
        
        
        
    </main>    
   
        
    <footer>
          <p style="font-size: 25px; text-align: center; padding-bottom:30px; "> Posted by: Hajer Gafsi<br>   Contact information: 
              <a href="hajergafsi15@yahoo.fr" style="color: blueviolet;">  hajergafsi15@yahoo.fr</a>.
          </p>   
    </footer>   
    </body>