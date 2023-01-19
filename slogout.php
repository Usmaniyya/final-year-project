<?php 
	session_start();
      session_destroy();

      header("refresh:1; url=login.php");
      echo "<center><b>You have Signout Successfully...</center";

 ?>