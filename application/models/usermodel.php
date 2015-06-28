<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class usermodel extends CI_Model {

    public $Id_user = '';
    public $Username = '';
    public $Password = '';

    public function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function checkUser($Username = Null, $Password = NULL) {

        $this->db->where('Username', $Username);
        $query = $this->db->get('User');
        foreach ($query->result() as $rows) {
            if ($rows->Username == $Username && $rows->Password == md5($Password)) {
                $this->setInitialValue($rows);
                return true;
            }
        }
        return false;
    }

    /**
     * Set initial value of user data
     * @param type $data
     */
    public function setInitialValue($data) {
        $this->Id_user = $data->Id_user;
        $this->Password = $data->Password;
        $this->Username = $data->Username;
    }

}

?>
