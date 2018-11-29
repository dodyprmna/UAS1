<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

        function __construct(){
        parent::__construct();
            if($this->session->userdata('logged') <> 1){
                redirect(site_url('auth'));
            }
        $this->load->library('form_validation');
        }

    public function admin() {
        $data = array(
            'title' => 'DASHBOARD',
            'content' => 'home'
        );
        $this->load->view('layout', $data);
    }

    public function supplier(){
        $data = array(
            'title' => 'DASHBOARD',
            'content' => 'home'
        );
    }
}
?>