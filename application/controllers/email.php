<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Email extends CI_Controller {
    public function __construct()
   {
        parent::__construct();
        // Your own constructor code
        
        $this->load->library('email');

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'anucha1977@gmail.com';
        $config['smtp_pass']    = '31283128';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 


   }
    public function index()
    {
        $this->email->initialize($config);

        $this->email->from('anucha1977@gmail.com', 'Administrator E-portfolio');
        $this->email->to('anucha1977@gmail.com'); 

        $this->email->subject('Email Test');

        $text="/n Testing the email class.";
        $text="/n Username:";
        $text="/n password:";
        $text="/n ----------------------------------------------------";
        $text="/n You can Activation here <a href=''>Activated Now</a>";
        $this->email->message($text);  

        $this->email->send();

        echo $this->email->print_debugger();

        //$this->load->view('email_view');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */