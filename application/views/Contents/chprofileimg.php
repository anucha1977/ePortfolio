<!-- Load data -->
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>assets/css/imgareaselect-default.css" />
  <!--<script type="text/javascript" src="<?php echo $this->config->item('base_url'); ?>assets/js/jquery.min.js"></script>-->
  <script type="text/javascript" src="<?php echo $this->config->item('base_url'); ?>assets/js/jquery.imgareaselect.pack.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function () {
    $('#myimg').imgAreaSelect({
        handles: true,
        onSelectEnd: someFunction
    });
});
</script>
<img id="myimg" src="<?php echo $this->config->item('base_url'); ?>assets/img/malecostume-512.png">
<!-- Jquery Validate Form-->
<script>
         $(document).on('change', '.btn-file :file', function () {
             var input = $(this),
                     numFiles = input.get(0).files ? input.get(0).files.length : 1,
                     label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
             input.trigger('fileselect', [numFiles, label]);
         });

         $(document).ready(function () {
             $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

                 var input = $(this).parents('.input-group').find(':text'),
                         log = numFiles > 1 ? numFiles + ' files selected' : label;

                 if (input.length) {
                     input.val(log);
                 } else {

                     var formData = $("#profile_editform").serializeArray();
                     var URL = $("#profile_editform").attr("action");
                     $.ajax({
                         type: "POST",
                         url: URL,
                         data: formData,
                         beforeSend: function (data) {
                         },
                         success: function (data) {
                             obj = JSON.parse(data);
                             if (obj.result) {

                                 $('#boxform3').load($('#boxform3').attr('alt')).ajaxStart(function () {
                                     alert("jghjgh")
                                 });

                                 setTimeout(function () {
                                     $('#pagealert').removeClass('hidden');
                                     $('#pagealert').addClass('alert-success');
                                     $('#pagealert').html("Update Success");
                                     $('#myModal').modal('hide');


                                     setTimeout(function () {
                                         $('#pagealert').addClass('hidden');
                                         $('#pagealert').removeClass('alert-success');

                                     }, 5000);

                                 }, 1000);
                             } else {
                                 alert(data);
                             }
                         },
                         error: function (xhr, ajaxOptions, thrownError) {
                             alert(xhr.status);
                             alert(thrownError);
                         }
                     });
                 }

             });
         });
</script>                                                                        
<style>
         .btn-file {
             position: relative;
             overflow: hidden;
         }
         .btn-file input[type=file] {
             position: absolute;
             top: 0;
             right: 0;
             min-width: 100%;
             min-height: 100%;
             font-size: 100px;
             text-align: right;
             filter: alpha(opacity=0);
             opacity: 0;
             background: red;
             cursor: inherit;
             display: block;
         }
         input[readonly] {
             background-color: white !important;
             cursor: text !important;
         }
</style>
<?php
$sql = "SELECT * FROM user ";
$sql.=" WHERE ";
$sql.=" userid='" . $this->session->userdata('userlogin')->userid . "'";
//echo $sql;
$query = $this->db->query($sql);

if ($query->num_rows() > 0) {
         $row = $query->row_array();
         //var_dump($row);
}
?>
<!-- #########################################-->
<!-- Form -->
<fieldset>
         <div id="modalalert" class="alert  hidden" role="alert">
                  <a href="#" class="alert-link"> Default text</a>
         </div>

         <?php echo form_open('contents/changewebsite', array('id' => 'profile_editform')); ?>
         <input name="_action" type="hidden" value="cname">


         <!-- Button trigger modal --> 
         <div class="col-lg-12 col-sm-12 col-12">

                           <div class="input-group">                           
                                    <input type="text" class="form-control" readonly>
                                    <span class="input-group-btn">
                                             <span class="btn btn-primary btn-file">
                                                      Browse&hellip; <input type="file" multiple>
                                             </span>
                                    </span>
                           </div>


         </div>
         <div class="col-lg-12 col-sm-12 col-12">
                  <div class="form-group">

                                             <script src="<?php echo $this->config->item('base_url'); ?>assets/js/holder.js"></script>
                                             <div id="imgprofile">
                                                      <img data-src="holder.js/540x360" class="img-thumbnail" alt="A generic square p"><div style="width:100%;" >                                                                        

                                                      </div>
                                             </div>
                  </div>
         </div>

         <?php echo form_close(); ?>   
</fieldset>


<!-- Jquery Validate Form-->
<script>
         $('#profile_editform').validate({
             errorContainer: $("#modalalert"),
             rules: {
                 altemail: {
                     email: true,
                     required: false
                 },
                 setpublic: {
                 }
             },
             messages: {
                 altemail: {
                     minlength: jQuery.format("Enter at least {0} characters"),
                     remote: jQuery.format("{0} is already in use")
                 }
             },
             highlight: function (element) {
                 $(element).closest('.form-group').addClass('has-error');
             },
             unhighlight: function (element) {
                 $(element).closest('.form-group').removeClass('has-error');
             },
             errorElement: 'span',
             errorClass: 'help-block',
             errorPlacement: function (error, element) {

                 if (element.parent('.input-group').length) {
                     error.insertAfter(element.parent());
                 } else {
                     error.insertAfter(element);
                 }

             }
         });
</script>
<script>

         $('#myModal').on('hidden.bs.modal', function () {
             //$('#boxform3').load($('#boxform3').attr('alt'));
         });

         $('#myModal').on('shown.bs.modal', function () {
             $('#myModal').modal({backdrop: 'static'});
             $('.modal-title').html('<?php echo $_POST['title']; ?>');
             //alert('<?php echo $_POST['title']; ?>');
         });

</script> 
<script>


         $('#myModal :submit').click(function (ev) {
             if ($('#profile_editform').valid()) {
                 var formData = $("#profile_editform").serializeArray();
                 var URL = $("#profile_editform").attr("action");
                 $.ajax({
                     type: "POST",
                     url: URL,
                     data: formData,
                     beforeSend: function (data) {
                     },
                     success: function (data) {
                         obj = JSON.parse(data);
                         if (obj.result) {

                             $('#boxform3').load($('#boxform3').attr('alt')).ajaxStart(function () {
                                 alert("jghjgh")
                             });

                             setTimeout(function () {
                                 $('#pagealert').removeClass('hidden');
                                 $('#pagealert').addClass('alert-success');
                                 $('#pagealert').html("Update Success".concat(obj.sql));
                                 $('#myModal').modal('hide');


                                 setTimeout(function () {
                                     $('#pagealert').addClass('hidden');
                                     $('#pagealert').removeClass('alert-success');

                                 }, 5000);

                             }, 1000);
                         } else {
                             alert(data);
                         }
                     },
                     error: function (xhr, ajaxOptions, thrownError) {
                         alert(xhr.status);
                         alert(thrownError);
                     }
                 });
             } else {
                 alert(test);
                 $('#modalalert').removeClass('hidden');
                 $('#modalalert').addClass('alert-danger');
                 $('#modalalert').html(data.sql.toString());

                 setTimeout(function () {
                     $('#modalalert').addClass('hidden');
                     $('#modalalert').removeClass('alert-danger');

                 }, 5000);
             }
         });
         $(':password').val('');
</script>



