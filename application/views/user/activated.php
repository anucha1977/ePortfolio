<?php
$this->load->view('include/header');
?>
    <!-- /.row -->
    <div class="container">
        <div class="row clearfix">


<?php 
var_dump($this->input->get());
$sql="SELECT * FROM user WHERE activatecode='".$this->input->get('code')."'";
echo $sql;
$query = $this->db->query($sql);
echo "Numrows=".$query->num_rows();

if($query->num_rows()>0){
    $data = array(
                   'activated' => 1,
                );

    $this->db->where('activatecode', $this->input->get('code'));
    $this->db->update('user', $data); 

    if ($this->db->trans_status() === FALSE){
        $this->db->trans_rollback();
        echo "Activated error";
    }else{
        $this->db->trans_commit();
        echo "Activated completed";
        
        //redirect('user/loginform', 'location', 301);
        $this->output->set_header('refresh:5;url=loginform');
    }
}else{
    echo "no record";
}


?>
        </div>
    </div>
<?php
$this->load->view('include/footer');
?>