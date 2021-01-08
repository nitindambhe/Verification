<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/autoload.php';
class Email extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');        
    }

    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->view('index');
    }

    public function email_verification() {
        $this->load->helper(array('form', 'url'));
        $this->form_validation->set_rules('username', 'email', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo '<div class="" style="text-align:center; color:red;">
                    <b>Enter valid Email</b>
                </div>';
        } else {
			$email = $this->input->post('username');
			$client = new QuickEmailVerification\Client('4bc9df64f0d21e83136626aa142ee225e00337dcfb971470d2609ed0cf78'); // Replace API_KEY with your API Key
			$quickemailverification = $client->quickemailverification();
			$response = (array)$quickemailverification->verify($email); // Email address which need to be verified
			if($response['body']['result'] == 'invalid'){
				echo '<div class="" style="text-align:center; color:red;">
                    <b>This Email is Invalid </b>
                </div>';
			}else{
				echo '<div class="" style="text-align:center; color:green;">
                    <b>This Email is Valid </b> 
                </div>';
			}

		}
    }
}
