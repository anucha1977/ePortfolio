<?php
$this->load->view('include/header');
?>

<!-- Page Content -->
<div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                        
                             <div class="row">
                                    <h1 class="page-header">Login</h1>  
                               <div class="col-md-4 col-md-offset-4">
                     
                                        <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Please Sign In</h3>
                                            </div>
                                            <div class="panel-body">
                                                <?php echo validation_errors(); ?>
                                                <?php echo form_open('user/login'); ?>
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <label>Email address:</label>
                                                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                                            <p class="help-block">Example block-level help text here.</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password:</label>
                                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                                        </div>

                                                        <!-- Change this to a button or input when using this as a form -->
                                                        <input type="submit" value="Login" class="btn btn-lg btn-success btn-block"/>
                                                    </fieldset>
                                                <?php echo form_close(); ?>

                                                Sign in with 
                                                <div class="text-center">
                                                    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                                    <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                                </div>
                                                <hr>
                                                New Member?

                                                <a href="registerform" class="btn btn-lg btn-warning btn-block">New! Join</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</div>




<?php
$this->load->view('include/footer');
?>