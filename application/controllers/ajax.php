<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ajax extends CI_Controller {

    public function index() {
        
    }

    public function get() {
        $arr[0]["CustomerID"] = "C001";
        $arr[0]["Name"] = "Weerachai Nukitram";
        $arr[0]["Email"] = "win.weerachai@thaicreate.com";
        $arr[0]["CountryCode"] = "TH";
        $arr[0]["Budget"] = "1000000";
        $arr[0]["Used"] = "600000";

        $arr[1]["CustomerID"] = "C001";
        $arr[1]["Name"] = "Weerachai Nukitram";
        $arr[1]["Email"] = "win.weerachai@thaicreate.com";
        $arr[1]["CountryCode"] = "TH";
        $arr[1]["Budget"] = "1000000";
        $arr[1]["Used"] = "600000";

        echo json_encode($arr);
    }

}

?>
