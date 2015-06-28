<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class wordmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function randomWord($type = 1) {
        $this->db->from('word_test');
        $this->db->where('Type', $type);
        $query = $this->db->get();
        $rowcount = $query->num_rows();

        // Clear condition table
        $this->db->flush_cache();

        echo $rowcount;
        $number = range(1, $rowcount);
        shuffle($number);

        $result = array();
        for ($i = 0; $i <= 3; $i++) {
            $this->db->from('word_test');
            $this->db->where('ID', $number[$i]);
            $query = $this->db->get();
            $data = $query->result();
            echo $number[$i];
            array_push($result, array(
                'ID' => $data[0]->ID,
                'Word' => $data[0]->Word,
                'Desc' => $data[0]->Desc,
                'Info' => $data[0]->Info
                    )
            );
            $this->db->flush_cache();
        }

        // print_r($result);
        return $result;
    }

    public function randomwordAll($type = 1) {
        $this->db->from('word_test');
        $this->db->where('Type', $type);
        $query = $this->db->get();
        $rowcount = $query->num_rows();

        // Clear condition table
        $this->db->flush_cache();

        echo $rowcount;
        $number = range(1, $rowcount);
        shuffle($number);
    }

}

?>
