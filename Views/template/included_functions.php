<?php
session_start();
function redirect_to($new_location) {
    header("Location: " .$new_location );
    exit;

}

function confirm_logged_in () {
    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
        redirect_to("./login.php");
    }
}

?>
