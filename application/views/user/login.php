<!-- Page Content -->
<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

<?php 
//var_dump($this->input->post());
$sql="SELECT * FROM user ";
$sql.=" WHERE ";
$sql.=" userid='".$this->input->post('email')."'";
$sql.=" and password='".$this->input->post('password')."'";
//echo $sql;
$query = $this->db->query($sql);
//echo "Numrows=".$query->num_rows();

if($query->num_rows()>0){
     // get existing array from session var (returns false if first time called)
    $username = $this->input->post('email');
    $this->session->set_userdata('username',$username);
    $var = $this->session->userdata;
    //echo $var['username'];

    //****************************************

    $userlogin = $this->session->userdata('userlogin');

    // add new $key=>$val to array
    $userlogin['userid'] = $this->input->post('email');
    $userlogin['username'] = $this->input->post('name');

    // pass it back to the session var
    $this->session->set_userdata('userlogin',$userlogin);  

    //var_dump($this->session->userdata('userlogin'));
    //echo "Login completed ...";
    $this->output->set_header('refresh:5;url=../eportfolio/home');
?>
    <div class="alert alert-success">
        Login completed. <a href="#" class="alert-link">Alert Link</a>.
    </div>
<?php
}else{
    echo "Login error";
    $this->output->set_header('refresh:5;url=../user/loginform');
}
?>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


