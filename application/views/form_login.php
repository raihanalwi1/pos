<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Point Of Sale</title>
    <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <script src="<?= base_url();?>assets/js/ie-emulation-modes-warning.js"></script>
    <style type="text/css">
    	.container{
    		position: absolute;
    		top: 25%;
    		width: 28%;
    		left: 35%;
    	}
    	.lg1{
    		margin: 15px 0 15px 0;
    	}
    	.signin{
    		text-align: center;
    	}
    </style>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
              <a class="navbar-brand" href="<?= base_url();?>index.php/dashboard">Point Of Sale</a>
        </div>
    </nav>

    <div class="container">
	<?php echo form_open('auth/login',array('class'=>'form_signin')); ?>
        <h2 class="form-signin-heading signin">Sign in</h2>
        <label for="username" class="sr-only">Email address</label>
        <input type="text" id="username" class="form-control lg1" name="username" placeholder="username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control lg1" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block lg1" type="submit" name="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
