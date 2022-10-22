<?php
defined('BASEPATH') or exit('No direct script access allowed');


require APPPATH . 'core/Admin_controller.php';

class Dashboard extends Admin_Controller
{


    public function __construct()
    {

        parent::__construct();
        parent::valid_admin();
        //$this->load->model('user_model');

    }

    public function index()
    {
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');

    }
}
