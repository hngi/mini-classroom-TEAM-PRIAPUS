<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?>public/assets/css/resetpassword.css">

  </head>

  <body>
    <div class="form-gap"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-xl-offset-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-center">
                <h3><i class="fa fa-lock fa-4x"></i></h3>
                <h2 class="text-center">New Password</h2>
                <p>Enter New Password.</p>
                <div class="panel-body">

                  <form id="register-form" role="form" autocomplete="off" class="form" method="post">
                    <?php if (isset($_SESSION["success"])) { ?>
                        <?php echo $_SESSION["success"]; ?>
                        <?php } ?>

                        <?php if (isset($_SESSION['error'])) { ?>
                            <?php echo $_SESSION['error']; ?>
                        <?php } ?>
            <center> <strong><p style="color:red;"> <?php echo validation_errors(); ?> </p> </strong> </center>
                  
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                        <input id="password" class="form-control" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.cpassword.pattern = this.value;" placeholder="Password" required>
                      </div> <br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                        <input id="cpassword" class="form-control" name="cpassword" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <input name="submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                    </div>

                    <input type="hidden" class="hide" name="token" id="token" value="">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

</html>