<?php
require_once __dir__ . "/Views/template/included_functions.php";
confirm_logged_in ();
require_once __dir__ . "/Views/template/header.phtml";
if(isset($_SESSION['User_id']))
{
    require_once __dir__ . "/Views/template/nav.phtml";
}
?>
<script src="./lib/JS/jquery-3.2.1.min.js"></script>
<script src="./lib/JS/chat.js"></script>
<form action="POST" id="userArea" class="col-sm-8 col-sm-offset-2">
    <div class="form-group">
    <label>Message</label>
    <input type="text" class="form-control" name="messages" id="chattxt" required/>
    <input type="hidden"  name="User_id" value="<?php $_SESSION['User_id'] ?>"/>
    <input type="submit" class="btn Brown" value="Post Message"/>
    </div>
</form>
<div id="messages" class="col-sm-8 col-sm-offset-2">
</div>
<?php require_once __dir__ . "/Views/template/footer.phtml"
?>