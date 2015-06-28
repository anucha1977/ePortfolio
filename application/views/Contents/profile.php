<style>

         .bt{
             margin: 0px 10px 0px 10px;
             position: absolute;
             right:0px;
         }
 
</style>

<h1 class="page-header">การตั้งค่าบัญชีผู้ใช้ทั่วไป</h1>

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

<?php // Update Database   ?>

<div class="row">
         <div class="col-lg-12">


                  <!-- Panel -->
                  <div class="panel panel-default">
                           <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> General Account Settings
                                    <div class="pull-right">
                                             <div class="btn-group">

                                             </div>
                                    </div>
                           </div>

                           <!-- /.panel-heading -->
                           <div class="panel-body">

                                    <div id="pagealert" class="alert  hidden" role="alert">
                                             <a href="#" class="alert-link">Completed</a>
                                    </div>


                                    <div class="row">



                                             <div class="col-xs-12 col-md-3">
                                                      <center>
                                                               
                                                                        <script src="<?php echo $this->config->item('base_url'); ?>assets/js/holder.js"></script>
                                                                        <div id="imgprofile">
                                                                                 <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square p">
                                                                        </div>
                                                                        <div style="width:100%;" >                                                                        
                                                                                 <!-- Button trigger modal --> 
                                                                                 <button class="btn btn-sm btn-success btn-block" data-toggle="modal" data-target="#myModal" data-backdrop="static" onclick="$('#myModal').find('.modal-body').load('loadmodal', {title: 'Profile Image', page: 'chprofileimg'});">
                                                                                          <i class="fa  fa-pencil  fa-fw"></i> Change
                                                                                 </button>
                                                                        </div>
                                                                        
                                                                        


                                                      </center>
                                             </div>
                                             <div class="col-xs-12 col-md-9">

                                                      <div class="table-responsive">
                                                               <h4>General Account Settings</h4>
                                                               <table class="table table-hover">

                                                                        <tbody>


                                                                                 <tr>
                                                                                          <td >      

                                                                                                   <div class="col-lg-12 col-md-12"  > 



                                                                                                            <div class="col-xs-12 col-md-3"><b>Name</b></div>


                                                                                                            <div class="col-xs-12 col-md-9">  
                                                                                                                     <div class="col-xs-12 col-md-12">Firstname : <span id="usernametext" ><?php echo $row['username']; ?></span></div>
                                                                                                                     <div class="col-xs-12 col-md-12">Lastname : <span id="surnametext"><?php echo $row['surname']; ?></span></div>
                                                                                                                     <div class="col-xs-12  col-md-12">Display name : <span id="surnametext"><?php echo $row['displayname']; ?></span></div>
                                                                                                            </div>
                                                                                                            <!-- Button trigger modal --> 
                                                                                                            <div class="bt">
                                                                                                                     <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-backdrop="static" onclick="$('#myModal').find('.modal-body').load('loadmodal', {title: 'Name', page: 'chname'});">
                                                                                                                              <i class="fa  fa-pencil  fa-fw"></i> Change
                                                                                                                     </button>
                                                                                                            </div>


                                                                                                   </div> 


                                                                                                   </div> 
                                                                                          </td>

                                                                                 </tr>


                                                                                 <tr>
                                                                                          <td>
                                                                                                   <div class="col-lg-12 col-md-12" > 
                                                                                                            <div class="col-xs-12 col-md-3"><b>System Password</b></div>

                                                                                                            <div class="col-xs-12 col-md-9">
                                                                                                                     <div class="col-xs-12 col-md-12">Password : *********</div>
                                                                                                            </div>
                                                                                                            <!-- Button trigger modal --> 
                                                                                                            <div class="bt">
                                                                                                                     <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-backdrop="static" onclick="$('#myModal').find('.modal-body').load('loadmodal', {title: 'Password', page: 'chpassword'});">
                                                                                                                              <i class="fa  fa-pencil  fa-fw"></i> Change
                                                                                                                     </button>
                                                                                                            </div>



                                                                                                   </div>
                                                                                          </td>

                                                                                 </tr>

                                                                                 <tr>
                                                                                          <td>
                                                                                                   <div class="col-lg-12 col-md-12" > 
                                                                                                            <div class="col-xs-12 col-md-3"><b>E-mail</b></div>


                                                                                                            <div class="col-xs-9 col-md-9">
                                                                                                                     <div class="col-xs-12 col-md-9">
                                                                                                                              Primary : <?php echo $row['userid']; ?><br>
                                                                                                                              Seccordary : <?php echo ($row['pwebsite'] == '' ? $row['altemail'] : "-"); ?><br>
                                                                                                                              Public : <?php echo ($row['setpublic'] == TRUE ? "Yes" : "No"); ?>
                                                                                                                     </div>
                                                                                                            </div>
                                                                                                            <!-- Button trigger modal --> 
                                                                                                            <div class="bt">
                                                                                                                     <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-backdrop="static" onclick="$('#myModal').find('.modal-body').load('loadmodal', {title: 'Email Address', page: 'chemail'});">
                                                                                                                              <i class="fa  fa-pencil  fa-fw"></i> Change
                                                                                                                     </button>
                                                                                                            </div>


                                                                                                   </div>
                                                                                          </td>

                                                                                 </tr>
                                                                                 <tr>
                                                                                          <td>
                                                                                                   <div class="col-lg-12 col-md-12" > 
                                                                                                            <div class="col-xs-12 col-md-3"><b>Website</b></div>

                                                                                                            <div class="col-xs-9 col-md-9">
                                                                                                                     <div class="col-xs-9 col-md-9">
                                                                                                                              Personal : <?php echo ($row['pwebsite'] == '' ? $row['pwebsite'] : "-"); ?><br>
                                                                                                                              Office : <?php echo ($row['pwebsite'] == '' ? $row['owebsite'] : "-"); ?><br>
                                                                                                                     </div>
                                                                                                            </div>
                                                                                                            <!-- Button trigger modal --> 
                                                                                                            <div class="bt">
                                                                                                                     <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-backdrop="static" onclick="$('#myModal').find('.modal-body').load('loadmodal', {title: 'Website', page: 'chwebsite'});">
                                                                                                                              <i class="fa  fa-pencil  fa-fw"></i> Change
                                                                                                                     </button>
                                                                                                            </div>

                                                                                                   </div>
                                                                                          </td>

                                                                                 </tr>
                                                                                 <tr>
                                                                                          <td>
                                                                                                   <div class="col-lg-12 col-md-12" > 


                                                                                                            <div class="col-xs-12 col-md-3"><b>Personal Setting</b></div>
                                                                                                            <div class="col-xs-9 col-md-9">
                                                                                                                     <div class="col-xs-9 col-md-12">Personal ID : <?php echo $row['personalid'] ?></div>
                                                                                                            </div>

                                                                                                            <!-- Button trigger modal --> 
                                                                                                            <div class="bt">
                                                                                                                     <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"  onclick="$('#myModal').find('.modal-body').load('loadmodal', {title: 'Change Personal Data', page: 'chpersonalid'});">
                                                                                                                              <i class="fa  fa-pencil  fa-fw"></i> Change
                                                                                                                     </button>
                                                                                                            </div>
                                                                                                   </div>


                                                                                          </td>                                            
                                                                                 </tr>
                                                                                 <tr>
                                                                                          <td>
                                                                                                   <div class="col-lg-12 col-md-12" > 

                                                                                                            <div class="col-xs-12 col-md-3"><b>Academic Setting</b></div>


                                                                                                            <div class="col-xs-9 col-md-9">
                                                                                                                     <div class="col-xs-9 col-md-9">Username : Anucha</div>
                                                                                                                     <div class="col-xs-9 col-md-9">Password : *********</div>
                                                                                                            </div>

                                                                                                            <!-- Button trigger modal --> 
                                                                                                            <div class="bt">
                                                                                                                     <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                                                                                                                              <i class="fa  fa-pencil  fa-fw"></i> Change
                                                                                                                     </button>
                                                                                                            </div>



                                                                                                   </div>
                                                                                          </td>

                                                                                 </tr>
                                                                        </tbody>
                                                               </table>

                                                      </div>  
                                             </div>


                                    </div>

                           </div>
                  </div>    
         </div>

</div>










