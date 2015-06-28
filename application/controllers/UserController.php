<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Facebook');
    }


    public function CheckLogin() {

        $Username = $this->input->post('username');
        $Password = $this->input->post('password');
        $this->load->model('usermodel');
        $result = $this->usermodel->checkUser($Username, $Password);
        if ($result <> NULL) {
            $this->session->set_userdata($result);
            $this->load->view('mainuser');
        } else {
            $this->load->view('login');
        }
    }

    public function googleLogin() {
        
    }

    public function index() {
        if ($this->facebook->get_user()) {
            $method = 'GET';
            $permission = '/me';
            $param = null;
            $response = $this->facebook->get_user_param($method, $permission, $param);
            $graphObject = $response->getGraphObject();
            $logout = base_url() . "index.php/UserController/FBlogout";
            $data['fbinfo'] = $graphObject->asArray();
            $data['logouturl'] = $logout;
            $info = $data;
            $this->session->set_userdata($info);
            $this->load->view('/English/mainViewEnglish', $data);
        } else {
            $this->FBlogin();
        }
    }

    public function FBlogout() {
        $this->facebook->logoutfb();
        $this->FBlogin();
    }

    public function FBlogin() {
        $loginUrl = $this->facebook->get_login_url();
        echo '<a href="' . $loginUrl . '">Login with Facebook</a>';
    }

}

?>
