<?php

	
   ini_set("SMTP","localhost");
   ini_set("smtp_port","25");
   $sub=$_POST["email"];
   $msg_txt=$_POST["message"];
   $to="";
   $mail = mail($to,$sub,$msg_txt);
   if($mail === TRUE){
	   echo"message sent";
   }
   else{
	   echo"failed";
   }
   
   

?>