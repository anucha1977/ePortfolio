<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class dashboard extends CI_Controller {

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
        $pagetitle="Dashboard";
        $data['mainmenu'] = 'Dashboard';
        $data['submenu'] = 'index';
        $data['button'] = "<li role='presentation'><a href='#'>New Content xxx</a></li>";
        $data['titlepage'] = "<li role='presentation' style='margin-top: -20px; margin-right: 30px;'><h2 >| ".$pagetitle."</h2></li>";
        
        //$this->load->view('include/header');
       // $this->load->view('include/eportfoliomenu',$data);
        //$this->load->view('include/Notifications');
        //$this->load->view('include/Notifications');
        //$this->load->view('include/eport-sidebar');
        $this->load->view('dashboard/index');
        //$this->load->view('include/footer');
    }
    
    public function home() {
          $this->load->view('dashboard/home');
    }



   

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */