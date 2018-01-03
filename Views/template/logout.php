<?php
     session_start();
      $_SESSION = array();
      $_SESSION['User_id'] = null;
      $_SESSION['Firs_Name'] = null;
      $_SESSION['Username'] = null;
      $_SESSION['Password'] = null;
	header("Location: ../../login.php" );
?>
