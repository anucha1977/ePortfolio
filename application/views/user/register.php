<?php
$this->load->view('include/header');
?>

<?php 
var_dump($this->input->post());



// Open Transection
$this->db->trans_start();

$chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
srand((double)microtime()*1000000); 
$i = 1; 
$activatecode = '' ; 

while ($i <= 15) { 
    $num = rand() % 33; 
    $tmp = substr($chars, $num, 1); 
    $activatecode = $activatecode . $tmp; 
    $i++; 
} 

//$this->db->query('AN SQL QUERY...');
$data = array(
   'userid' =>  $this->input->post('email'),
   'password' => $this->input->post('password'),
   'username' => $this->input->post('Name'),
   'activatecode' => $activatecode
);

$this->db->insert('user', $data); 

if ($this->db->trans_status() === FALSE){
        $this->db->trans_rollback();
        echo "Insert error";
}
else{
        $this->db->trans_commit();
        echo "Insert completed ($activatecode)";


        //$this->load->library('email');

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

        $this->email->initialize($config);
	
	    $this->email->from('anucha1977@gmail.com', 'Administrator E-portfolio');
	    $this->email->to('anucha1977@gmail.com'); 

	    $this->email->subject('Email Test');

	    $text="\nTesting the email class.";
	    $text.="\nUsername:".$this->input->post('email');
	    $text.="\npassword:".$this->input->post('password');
	    $text.="\n----------------------------------------------------";
	    $text.="\nYou can Activation here : http://localhost/netbeanserver-master/index.php/user/activated?code=$activatecode";
	    $this->email->message($text);  

	    $this->email->send();

	    //echo $this->email->print_debugger();
}
	

?>

<?php
$this->load->view('include/footer');
?>