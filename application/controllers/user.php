<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class user extends CI_Controller {

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
   public function __construct()
   {
        parent::__construct();
        // Your own constructor code
        $this->load->library('email');
   }
   public function logingout(){
        $this->session->unset_userdata('userlogin');
        echo '{"result":true}';
   }
    public function loging() {
            
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
                
                $row = $query->row(); 
                //$userid = $row('email');
                //$username = $row('name');
                $this->session->set_userdata('userlogin',$row);
                
                //$var = $this->session->userdata;
                //echo $var['username'];

                //****************************************

                //$userlogin = $row;

                // add new $key=>$val to array
                //$userlogin['userid'] = $this->input->post('email');
                //$userlogin['username'] = $this->input->post('name');

                // pass it back to the session var
                //$this->session->set_userdata('userlogin',$userlogin);  

                echo JSON_encode($row );
                //echo "Login completed ...";
                //$this->output->set_header('refresh:5;url=../eportfolio/home');
               // echo JSON_encode($userlogin);


  
            }else{
                //echo "Login error";
                //$this->output->set_header('refresh:5;url=../user/loginform');
                echo '{"result":true,"count":1}';
            }
         }

 
    

    public function index() {
        $this->load->view('user/index');
    }


    public function loginform() {
        $this->load->view('user/loginform');
    }

    public function login() {
        $this->load->view('include/header');
        $this->load->view('user/login');
        $this->load->view('include/footer');

    }

    public function logout() {
        $this->load->view('include/header');
        $this->load->view('user/logout');
        $this->load->view('include/footer');
    }

    public function registerform() {
        $this->load->view('include/header');
        $this->load->view('user/registerform');
        $this->load->view('include/footer');
    }

    public function register() {
        $this->load->view('include/header');
        $this->load->view('user/register');
        $this->load->view('include/footer');
    }

    public function activated() {
        $this->load->view('include/header');
        $this->load->view('user/activated');
        $this->load->view('include/footer');
    }

    public function profile() {
        $this->load->view('include/header');
        $this->load->view('user/profile');
        $this->load->view('include/footer');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */