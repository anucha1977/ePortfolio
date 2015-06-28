<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class English extends CI_Controller {

    public function index() {
        $this->load->model('wordmodel');
        $result = $this->wordmodel->randomWord(1);
        $data['word'] = $result;
        $this->load->view('English/ShowWord', $data);
    }

}

?>
