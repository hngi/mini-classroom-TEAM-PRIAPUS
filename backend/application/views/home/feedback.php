<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Feedback &mdash; PRIAPUS</title>   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url()?>public/assets/css/feedback.css">
</head>
<body>
  <div class="container-full" id="login-box">
      <div class="left-box">
          <div class="reg">
            <h2>Did you enjoy our service?</h2>
            <h3>What did you like?. Tell us how we can improve to serve you better</h3>
          </div>  
      </div>
        
      <div class="right-box align-items-center">
          <div class="login-container d-flex align-items-center justify-content-center">
            <form class="login-form text center" id="gform" action="https://script.google.com/macros/s/AKfycbzVEqiy7_ff_crknxwU3c6ijDtFg_ohshdxsqBfbbi_MuO251c/exec" method="post">

                <?php if (isset($_SESSION["success"])) { ?>
                        <?php echo $_SESSION["success"]; ?>
                        <?php } ?>

                        <?php if (isset($_SESSION['error'])) { ?>
                            <?php echo $_SESSION['error']; ?>
                        <?php } ?>

                <h1 class="mb-5 ">Your Feedback <i class="fa fa-smile-o"></i></h1>
                <div class="form-group">
                    <input name="email" type="email" class="form-control form-control-lg" placeholder="Email Address" required>
                </div>       
                <div class="form-group">
                    <textarea name="message" id="msg" class="form-control" placeholder="Your message" required></textarea>
                </div>
              <button type="submit" class="submit-btn mt-3">Submit</button>
            </form>
      </div>
    </div>
    <script data-cfasync="false" type="text/javascript" src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
</body>    
</html>
