<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class scoremodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertNewScore($data) {
        $this->db->insert('score', $data);
    }

    public function updateScore() {
        $this->db->where('Id_user', $data['Id_user']);
        $this->db->update('score', $data);
    }

    public function selectScore($Id_user) {
        $this->db->where('Id_user', $Id_user);
        $query = $this->db->get('score');
        return $query->result();
    }

    public function resetScore() {
        
    }

}

?>
