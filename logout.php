<?php 
	session_start();
      session_destroy();

      header("refresh:2; url=index.php");
      echo "<center><b>You have Log Out Successfully...<br> Bye!</b></center";

 ?>