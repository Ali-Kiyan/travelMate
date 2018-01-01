<?php require_once __dir__ . "/template/header.phtml"
?>
    <body>
      <div class="cover">
          <div class="bg">
          </div>
        </div>

      <div class="register animated fadeInDown">
        <div class="container">
            <div class="row align-middle">
                <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default" style="background-color: rgba(220, 220, 233, 0.3);">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                                <div class="form-group">
                                    <label for="email" class="col-sm-2 col-xs-4 control-label">User Name</label>
                                    <input type="text" name="" value="" class="form-control half" >
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 col-xs-4 control-label">First Name</label>
                                    <input type="text" name="" value="" class="form-control half" >
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 col-xs-4 control-label">Last Name</label>
                                    <input type="text" name="" value="" class="form-control half" >
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 col-xs-4 control-label">Password</label>
                                    <input type="text" name="" value="" class="form-control half" >
                                </div>
                                <br>
                                <br>

                                                  <button type="submit" name="submit" class="btn btn-info Brown center">Register</button>
                                                  <a href="login.php" class="btn btn-warning Brown center">Login</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </body>
<?php require_once __dir__ . "/template/footer.phtml"
?>
