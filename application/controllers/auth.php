<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

        // function __construct(){
        // parent::__construct();
        // }
//cobaaaa
    public function index() {
            $data = array(
                'title' => 'Login Page',
                // 'action' => site_url('auth/login'),
                // 'error' => $error
            );
        $this->load->view('login',$data);
    }
}
?>