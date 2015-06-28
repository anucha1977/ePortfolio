<?php

class Authan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->helper('url');
        // $this->load->model('commonmodel');
        // $this->load->model('usersmodel');
    }

    public function index() {
        $this->load->view('login_1');
    }

//end __construct()
    public function session($sitelogin = NULL) {
        if ($sitelogin == 'email') {//Email
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('usermodel');

            if ($this->usermodel->checkUser($email, $password)) {
                echo "Login Complete";
            } else {
                echo "Login Fail";
            }
        } else {
            $this->load->helper('url_helper');
            $this->ci = & get_instance();
            // get session provider
            if ($sitelogin == NULL) {
                $sitelogin = $this->session->userdata('sitelogin');
            }
            if ($sitelogin == 'facebook') { //facebook 
                $app_id = $this->ci->config->item('api_id', 'facebook');
                $app_secret = $this->ci->config->item('app_secret', 'facebook');
                $provider = $this->oauth2->provider($sitelogin, array('id' => $app_id, 'secret' => $app_secret,));
            } else if ($sitelogin == 'google') {//google 
                $app_id = '153159560831-pm3npc8vkufep78dh4mmmaaovk81rp20.apps.googleusercontent.com'; //$this->config->item('googleplus_appid');
                $app_secret = 'Ze77nLAm4zIUlaR9t0O8MRr_'; //$this->config->item('googleplus_appsecret');
                $provider = $this->oauth2->provider($sitelogin, array('id' => $app_id,
                    'secret' => $app_secret,
                ));
            }

            if (!$this->input->get('code')) {
                $this->session->set_userdata('sitelogin', $sitelogin);
                $provider->authorize(array('redirect_uri' => "http://localhost/netbeanserver/index.php/Authan/session"));
                redirect('social?error');
            } else {

                try {
                    $token = $provider->access($_GET['code']);
                    $user = $provider->get_user_info($token);
                    print_r($user);
                    if ($this->uri->segment(3) == 'google') {
                        
                    } elseif ($this->uri->segment(3) == 'facebook') {
                        
                    } elseif ($this->uri->segment(3) == 'foursquare') {

                        $this->session->set_flashdata('info', $message);
                        redirect('social?tabindex=s&status=sucess');
                    }
                } catch (OAuth2_Exception $e) {
                    show_error('That didnt work: ' . $e);
                }
            }
        }
    }

}
?>



