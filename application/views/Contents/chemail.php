<!-- Load data -->
<!-- Jquery Validate Form-->

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

         <?php echo form_open('contents/changeemail', array('id' => 'profile_editform')); ?>
         <input name="_action" type="hidden" value="cname">


         <div class="form-group">
                  <label>Primary Email :</label>
                  anucha1977@gmail.com
                                    <div class="col-md-12">
                           <p class="text-muted"><b>Please note:</b> can't to change</p>
                  </div>
          
         </div>
          <div class="form-group">         
                  <label>Seccord Email:</label>
                  <input class="form-control" placeholder="Seccord Email" id="altemail" name="altemail" type="text" autofocus value="<?php echo $row['altemail']?>">


         </div>
         <div class="form-group">         
                  <label>Public:          </label>
                  <input   placeholder="Public status" id="setpublic" name="setpublic" type="checkbox" autofocus  <?php echo ($row['setpublic']==TRUE? "checked" : "");?>  data-label="suffix">
                  Allow to include my email address
                  
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
                                 $('#pagealert').html("Update Success".concat( obj.sql));
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



