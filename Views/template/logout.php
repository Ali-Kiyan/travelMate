<?php
  $_SESSION = array();
  session_destroy();
  $_SESSION['Password'] = "";
	header("Location: ../../login.php" );
?>
