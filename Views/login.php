<?php require_once __dir__ . "/template/header.phtml"
?>
    <body>
      <div class="cover">
          <div class="bg">
          </div>
        </div>

      <div class="login animated fadeInDown">
        <div class="container">
            <div class="row align-middle">
                <div class="col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default" style="background-color: rgba(220, 220, 233, 0.3);">
                        <div class="panel-heading">Login</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="">

                                <div class="form-group">
                                    <label for="email" class="col-sm-4 col-xs-4 control-label">E-Mail Address</label>

                                    <div class="col-sm-4 col-xs-8">
                                        <input id="email" type="email" class="form-control" name="email" value="">
                                            <span class="help-block">
                                                <strong></strong>
                                            </span>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-sm-4 col-xs-4 control-label">Password</label>

                                    <div class=" col-sm-4 col-xs-8">
                                        <input id="password" type="password" class="form-control" name="password">
                                            <span class="help-block">
                                                <strong></strong>
                                            </span>

                                    </div>
                                </div>





                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn Brown">
                                            <i class="fa fa-sign-in"></i> Login
                                        </button>
                                        <button type="submit" class="btn Brown">
                                            <i class="fa fa-sign-in"></i> Sign Up !
                                        </button>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-6 col-md-offset">
                                        <label >
                                          In a rush?
                                          <button type="button" name="button" class="btn Brown" width="500px">View locations</button>
                                        </label>
                                </div>
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
