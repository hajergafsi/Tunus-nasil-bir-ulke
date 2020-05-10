<?php 

if(isset($_POST['login-submit'])){
require 'dbh.inc.php'    ;
$mailuid =  $_POST['mailuid'] ;
$password =  $_POST['pwd'] ;
    
    if(empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
     else {
     $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;" ;
     $stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../login.php?error=sqlerror");
			exit();
		}
		else{
		     mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid) ;
			 mysqli_stmt_execute($stmt) ;
			 $result= mysqli_stmt_get_result($stmt);
			 if($row = mysqli_fetch_assoc($result)){				 
				 $pwdcheck= ($password===$row['pwdUsers']);
				 if($pwdcheck == false){
					header("Location: ../login.php?error=wrongPassword");
					exit();
				 }
				 else if($pwdcheck == true){
					session_start();
					$_SESSION['userid']=$row['idUsers'];
					$_SESSION['userUid']=$row['uidUsers'];
					
					header("Location: ../homepage.php?login=succes");
					exit();
				 }
				 else{
					header("Location: ../login.php?error=wrongPassword");
					exit();					 
				 }
			 }
			 else{
				header("Location: ../login.php?error=noUser");
				exit();
			 }
		}
	 }
    }   
else {
    header("Location: ../login.php");
    exit();
}



