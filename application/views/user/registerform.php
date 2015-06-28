<!DOCTYPE html>
<?php
    $obj =& get_instance();
    $base_url = $obj->config->item('base_url');
    $asset_location = $base_url.'assets/bower/';
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

 <!-- Bootstrap Core CSS -->
    <link href="<?php echo $asset_location;?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $asset_location;?>/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo $asset_location;?>/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $asset_location;?>/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $asset_location;?>/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $asset_location;?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Social Buttons CSS -->
    <link href="<?php echo $asset_location;?>/bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Create a New Account</h3>
            </div>
            <div class="panel-body">
            <h5>Sign up for an account using your social account.</h5>
            <a class="btn btn-block btn-social btn-facebook ">
                <i class="fa fa-facebook"></i> Sign in with Facebook
            </a>
            <a class="btn btn-block btn-social btn-google-plus">
                <i class="fa fa-google-plus"></i> Sign in with Google
            </a>
            <hr>

            <h5>Or sign up for an account using your email address.</h5>

            <?php echo validation_errors(); ?>
            <?php echo form_open('user/register'); ?>
                    <fieldset>
                    <div class="form-group">
                        <label>Email address:</label>
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                        <p class="help-block">Example block-level help text here.</p>
                    </div>

                    <div class="form-group">
                        <label>Name:</label>
                        <input class="form-control" placeholder="Name" name="Name" type="Name" autofocus>
                    </div>

                    <div class="form-group">
                        <label>Create password:</label>
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="form-group">
                        <label>Confirm your password:</label>
                        <input class="form-control" placeholder="Confirm password" name="cpassword" type="password" value="">
                    </div>

                    <!-- Change this to a button or input when using this as a form -->
                    <input type="submit" class="btn btn-lg btn-success btn-block"/>
                </fieldset>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

</body>
</html>
