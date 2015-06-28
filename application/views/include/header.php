<!DOCTYPE html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>E-Portfolio URU</title>


<!-- Bootstrap Core CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/dist/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/morrisjs/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Social Buttons CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/bootstrap-social/bootstrap-social.css" rel="stylesheet">

<!-- Document CSS -->
<link href="<?php echo $this->config->item('base_url'); ?>assets/css/docs.min.css" rel="stylesheet">

<!--
<script src="<?php echo $this->config->item('base_url'); ?>assets/bower/js/morris-data.js"></script>
-->

<!-- Bootstrap Core JavaScript -->    
<script src="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- jQuery -->
<script src="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/jquery/dist/jquery.min.js"></script>

<script src="<?php echo $this->config->item('base_url'); ?>assets/bower/bower_components/bootstrap/dist/js/bootstrap.js"></script>

<script src="<?php echo $this->config->item('base_url'); ?>assets/js/jquery.validate.min.js"></script>




</head>
<body>



         <nav class="navbar navbar-default">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                           </button>
                           <a class="navbar-brand" href="#"><?php echo image_asset("logo2.png", "", array("style" => "margin-top:-7px;")) ?></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



                           <?php
                           //var_dump($this->session->userdata('userlogin')); 
                           $userlogin = $this->session->userdata('userlogin');
                           ?>



                           <?php
                           //var_dump($userlogin);
                           if ($userlogin == null) :
                                    ?>

                                    <ul class="nav navbar-top-links navbar-right">
                                             <li class="dropdown">

                                                      <ul class="dropdown-menu menu" role="menu">
                                                               <li role="presentation" class="dropdown-header">Signed in as ...</li>

                                                               <li><a href="../user/profile"><p class="fa  fa-user "></p> Anucha Ruangsiriwattanakul</a></li>
                                                               <li><a href="../user/profile"><p class="fa  fa-users "></p> Science and Technology Faculty</a></li>
                                                               <li role="presentation" class="divider"></li>

                                                               <li><a href="../eportfolio/setting"><p class="fa  fa-gear "></p> Setting...</a></li>

                                                               <li><a  href="../user/logout"><p class="fa fa-power-off"></p> Logout</a></li>

                                                               <li class="divider"></li>
                                                               <li><a href="../user/logout"><p class="fa  fa-umbrella "></p> Help</a></li>
                                                               <li><a href="../user/logout"><p class="fa   fa-send-o  "></p> Report porblem</a></li>
                                                      </ul>
                                             </li>
                                    </ul>
                           <?php else: ?>

                                    <ul class="nav navbar-nav navbar-right">
                                             <li><a  href="../dashboard/index"><?php echo image_asset("index.png", "", array("style" => "width:20px; margin-top:-7px;")) ?> Anucha Ruangsiriwattanakul</a> </li>
                                             <li><a> |</a></li>


                                             <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
                                                      <ul class="dropdown-menu" role="menu">
                                                               <li role="presentation" class="dropdown-header">คุณใช้จะระบบในนาม</li>  
                                                               <li class="divider"></li>
                                                               <li><a > Anucha Ruangsiriwattanakul</a></li> 

                                                               <li class="divider"></li>
                                                               <li><a href="#">Setting...</a></li>
                                                               <li><a onclick="logingout()"><p class="fa fa-power-off"></p> Logout</a></li>
                                                               <script>
                                                                        function logingout() {
                                                                            //var formData = $("#signinform").serializeArray();
                                                                            //var URL = "User/logingout";
                                                                            //alert("sdsd"); 
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                // URL
                                                                                url: "../User/logingout",
                                                                                data: "{}",
                                                                                success: function (data) {
                                                                                    obj = JSON.parse(data);
                                                                                    if (obj.result) {

                                                                                        //$('#SigninModal').modal('hide');
                                                                                        //alert(obj.username);

                                                                                        //alert("Logout");
                                                                                        // HREF location
                                                                                        setInterval(function () {
                                                                                            $(location).attr('href', "../");
                                                                                        }, 3000);
                                                                                    }

                                                                                    //alert(data);
                                                                                },
                                                                                error: function (xhr, ajaxOptions, thrownError) {
                                                                                    alert(xhr.status);
                                                                                    alert(ajaxOptions);
                                                                                    alert(thrownError);
                                                                                }
                                                                            });
                                                                        }
                                                               </script>
                                                               <li class="divider"></li>
                                                               <li><a href="../contents/index"> Sample</a></li> 
                                                               <li><a href="../contents/index"> Help</a></li> 
                                                      </ul>
                                             </li>
                                    </ul>
                           <?php endif; ?>  
         </nav>

         <!-- Modal -->
         <div class="modal fade" id="SigninModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                           <div class="modal-content">
                                    <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title" id="myModalLabel">Signin</h4>
                                    </div>

                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open('User/loging', array('id' => 'signinform')); ?>

                                    <input name="_action" type="hidden" value="cname">
                                    <div class="modal-body">



                                             <fieldset>


                                                      <div class="alert alert-success alert-dismissable show">                                                  
                                                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                                                      </div>


                                                      <!-- .panel-body -->

                                                      <div class="form-group">
                                                               <label>Email address:</label>
                                                               <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                                               <p class="help-block">Example block-level help text here.</p>
                                                      </div>
                                                      <div class="form-group">
                                                               <label>Password:</label>
                                                               <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                                      </div>
                                                      <div class="form-group">
                                                               <a  data-toggle="modal" data-target="#ForgetModal" onclick="$('#SigninModal').modal('hide');"> Forget password...</a>
                                                      </div>

                                                      <!-- Change this to a button or input when using this as a form -->

                                                      <button  type="button" class="btn btn-lg btn-success btn-block" onclick="testajax();">Login</button>
                                             </fieldset>


                                    </div>
                                    <?php echo form_close(); ?>
                                    <script>
                                             function testajax() {

                                                 var formData = $("#signinform").serializeArray();
                                                 console.log(formData);
                                                 var URL = $("#signinform").attr("action");

                                                 $.ajax({
                                                     type: "POST",
                                                     url: URL,
                                                     data: formData,
                                                     success: function (data) {
                                                         obj = JSON.parse(data);
                                                         if (obj.username) {

                                                             $('#SigninModal').modal('hide');
                                                             //alert(obj.username);
                                                             setInterval(function () {
                                                                 location.replace("../contents/index");
                                                             }, 3000);
                                                         } else {

                                                         }

                                                         alert(data);
                                                     },
                                                     error: function (xhr, ajaxOptions, thrownError) {
                                                         alert(xhr.status);
                                                         alert(thrownError);
                                                     }
                                                 });
                                                 //$.post( URL,
                                                 //         formData,
                                                 //       function (data, textStatus, jqXHR)
                                                 //     {
                                                 //location.reload();
                                                 //   }).fail(function (jqXHR, textStatus, errorThrown){
                                                 //          $('.modal').modal('hide');
                                                 //$('#info_data').addClass("alert alert-danger");
                                                 //$('#info_data').html("Update Fail");
                                                 // $('#info').modal('show');
                                                 //});

                                             }
                                    </script>

                           </div>
                           <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->

         <!-- Modal -->
         <div class="modal fade" id="SignupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                           <div class="modal-content">
                                    <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title" id="myModalLabel">Signup</h4>
                                    </div>


                                    <?php echo validation_errors(); ?>
                                    <?php
                                    $attributes = array('id' => 'myform');
                                    echo form_open('welcome/home', $attributes);
                                    ?>
                                    <input name="_action" type="hidden" value="cname">
                                    <div class="modal-body">

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
                                    </div>
                                    <?php echo form_close(); ?>

                           </div>
                           <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->

         <!-- Modal -->
         <div class="modal fade" id="ForgetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                           <div class="modal-content">
                                    <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title" id="myModalLabel">Forget Password</h4>
                                    </div>

                                    <?php echo form_open('eportfolio/profile'); ?>
                                    <input name="_action" type="hidden" value="cname">
                                    <div class="modal-body">

                                             <fieldset>
                                                      <div class="form-group">
                                                               <label>E-mail:</label>
                                                               <input class="form-control" placeholder="Name" name="username" type="text" value="" autofocus>
                                                               <p class="help-block">Example block-level help text here.</p>
                                                      </div>
                                             </fieldset>                                                
                                    </div>
                                    <div class="modal-footer">
                                             <button type="submit" class="btn btn-primary" data-submit="modal"> Reset Password</input>
                                    </div>
                                    <?php echo form_close(); ?>
                           </div>
                           <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->



         <script>
                  $("document").function logingout(){
                      //var formData = $("#signinform").serializeArray();
                      //var URL = "User/logingout";
                      //alert("sdsd"); 
                      $.ajax({
                          type: "POST",
                          url: "../User/logingout",
                          data: "{}",
                          success: function (data) {
                              obj = JSON.parse(data);
                              if (obj.result) {

                                  //$('#SigninModal').modal('hide');
                                  //alert(obj.username);

                                  alert("Logout");
                                  setInterval(function () {
                                      location.href = "Welcome/index";
                                      location.reload();
                                  }, 3000);
                              }

                              //alert(data);
                          },
                          error: function (xhr, ajaxOptions, thrownError) {
                              alert(xhr.status);
                              alert(ajaxOptions);
                              alert(thrownError);
                          }
                      });
                  }
         </script>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
                  <div class="modal-content">

                           <!-- Modal Header-->
                           <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Signup</h4>
                           </div>
                           <!-- /.modal-header -->


                           <!-- Modal Body-->
                           <div class="modal-body">

                           </div>
                           <!-- /.modal-body -->

                           <!-- Modal Footer-->
                           <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" data-submit="modal"  > Save changes</input>
                           </div>
                           <!-- /.modal-footer -->

                  </div>   
                  <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
</div>
<!-- /.modal -->  


<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('<?php echo $this->config->item('base_url'); ?>assets/img/loading.gif') center no-repeat #fff;
}
</style>
<div id="loader" class="se-pre-con hidden"></div>
<script>
         $(document).ajaxStart(function () {
             $("#loader").removeClass("hidden");  // show Loading Div
         });
         $(document).ajaxComplete(function () {
             $("#loader").addClass("hidden");  // show Loading Div
         });
</script>






















