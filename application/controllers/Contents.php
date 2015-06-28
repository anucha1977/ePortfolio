<?php

if (!defined('BASEPATH'))
         exit('No direct script access allowed');

class Contents extends CI_Controller {

         /**
          * Index Page for this controller.
          *
          * Maps to the following URL
          * 		http://example.com/index.php/welcome
          * 	- or -  
          * 		http://example.com/index.php/welcome/index
          * 	- or -
          * Since this controller is set as the default controller in 
          * config/routes.php, it's displayed at http://example.com/
          *
          * So any other public methods not prefixed with an underscore will
          * map to /index.php/welcome/<method_name>
          * @see http://codeigniter.com/user_guide/general/urls.html
          */
         public function index() {

                  $this->load->view('include/header');                  
                  $this->load->view('Contents/index');
                  $this->load->view('include/footer');
         }
         public function loadmodal() {
                 $this->load->view('Contents/'.$_POST['page'],$_POST);
         }
public function changeprofileimg() {
}
public function changewebsite() {

                  $sql = "UPDATE user ";
                  $sql.="SET pwebsite='" . $this->input->post('pwebsite') . "'";
                  $sql.=", owebsite='".$this->input->post('owebsite')."'";
                  $sql.=" WHERE ";
                  $sql.=" userid='" . $this->session->userdata('userlogin')->userid . "'";


                  if ($this->db->query($sql)) {
                           echo '{"result":true,"row":{"username":"' . $this->input->post('username') . '","surname":"' . $this->input->post('surname') . '"},"sql":"' . $sql . '"}';
                  } else {
                           echo '{"result":false,"sql":"' . $sql . '"}';
                  }
         }
          public function changeemail() {

                  $sql = "UPDATE user ";
                  $sql.="SET altemail='" . $this->input->post('altemail') . "'";
                  $sql.=", setpublic=".($this->input->post('setpublic')=='on'?'TRUE':'FALSE')."  ";
                  $sql.=" WHERE ";
                  $sql.=" userid='" . $this->session->userdata('userlogin')->userid . "'";


                  if ($this->db->query($sql)) {
                           echo '{"result":true,"row":{"username":"' . $this->input->post('username') . '","surname":"' . $this->input->post('surname') . '"},"sql":"' . $sql . '"}';
                  } else {
                           echo '{"result":false,"sql":"' . $sql . '"}';
                  }
         }
         public function changepassword() {

                  $sql = "UPDATE user ";
                  $sql.="SET password='" . $this->input->post('npassword') . "'";
                  $sql.=" WHERE ";
                  $sql.=" userid='" . $this->session->userdata('userlogin')->userid . "'";


                  if ($this->db->query($sql)) {
                           echo '{"result":true,"row":{"username":"' . $this->input->post('username') . '","surname":"' . $this->input->post('surname') . '"},"sql":"' . $sql . '"}';
                  } else {
                           echo '{"result":false,"sql":"' . $sql . '"}';
                  }
         }
         
         public function changename() {

                  $sql = "UPDATE user ";
                  $sql.="SET username='" . $this->input->post('username') . "'";
                  $sql.=", surname='" . $this->input->post('surname') . "'  ";
                  $sql.=", displayname='" . $this->input->post('displayname') . "'  ";
                  $sql.=" WHERE ";
                  $sql.=" userid='" . $this->session->userdata('userlogin')->userid . "'";


                  if ($this->db->query($sql)) {
                           echo '{"result":true,"row":{"username":"' . $this->input->post('username') . '","surname":"' . $this->input->post('surname') . '"},"sql":"' . $sql . '"}';
                  } else {
                           echo '{"result":false,"sql":"' . $sql . '"}';
                  }
         }
         public function changepersonalid() {

                  $sql = "UPDATE user ";
                  $sql.="SET personalid='" . $this->input->post('personalid') . "'";
                  $sql.=" WHERE ";
                  $sql.=" userid='" . $this->session->userdata('userlogin')->userid . "'";


                  if ($this->db->query($sql)) {
                           echo '{"result":true,"row":{"username":"' . $this->input->post('username') . '","surname":"' . $this->input->post('surname') . '"},"sql":"' . $sql . '"}';
                  } else {
                           echo '{"result":false,"sql":"' . $sql . '"}';
                  }
         }

         public function home() {
                  $this->load->view('Contents/home');
         }

         public function profile() {
                  $this->load->view('Contents/profile');
         }

         public function profiles() {
                  $this->load->view('Contents/profiles');
         }

         public function education() {
                  $this->load->view('Contents/education');
         }

         public function skill() {
                  $this->load->view('Contents/skill');
         }

         public function personal() {
                  $this->load->view('Contents/personal');
         }
         public function works() {
                  $this->load->view('Contents/works');
         }


         public function experience() {
                  $this->load->view('Contents/experience');
         }

         public function referances() {
                  $this->load->view('Contents/referances');
         }

         public function setting() {
                  $this->load->view('Contents/setting');
         }

         public function teach() {
                  $this->load->view('Contents/teach');
         }

         public function research() {
                  $this->load->view('Contents/research');
         }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */