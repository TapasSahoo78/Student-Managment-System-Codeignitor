<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'core/Admin_controller.php';

class Admin extends Admin_Controller
{


	public function __construct()
	{

		parent::__construct();
		$this->load->model('admin_model');

	}

	public function index()
	{
		$this->load->view('admin/login');
	}


	// function admin_login()
	// {
	// 	$email_address = $this->input->post('username', true);
	// 	$password = $this->input->post('password', true);

	// 	$this->load->model('admin_model');
	// 	$result = $this->admin_model->admin_model_info($email_address, $password);

	// 	$sdata = array();

	// 	if ($result) {
	// 		$sdata['admin_id'] = $result->id;
	// 		$sdata['username'] = $result->admin_email_id;

	// 		// $session = $this->session->set_userdata($sdata);
	// 		//$this->load->view('dashboard',$session);
	// 		//redirect('dashboard');
	// 		redirect(base_url('dashboard'));
	// 	} else {
	// 		$sdata['message'] = "Email or Password not valid !!";
	// 		// $this->session->set_userdata($sdata);

	// 		redirect('Admin');
	// 	}
	// }



	  public function check_login(){  
     
		//print_r($_POST['name']);
		//die;
		//$data['admin_email_id']=htmlspecialchars($_POST['name']);  
		//$data['admin_password']=htmlspecialchars($_POST['pwd']);
		
		$email_address = $this->input->post('name');
        $password = $this->input->post('pwd');

		//$this->load->model('admin_model');

		$result = $this->admin_model->islogin($email_address, $password); 

		echo json_encode($result);

		// // print_r($result); die;
		// if($result){  
			

		// 	//$_SESSION['admin_data'] =array();
		// 	$_SESSION['admin_data']['token'] = session_id() .'_'. $result['id'];
		// 	$_SESSION['admin_data']['admin_id'] = $result['id'];


		// 	echo 1;
		// 	// print_r($_SESSION);
		// 	// $url = base_url().'dashboard';
        //     // redirect($url);
		// 	// //$this->session->set_userdata('id',$data['username']);   
		//   //echo base_url()."dashboard/"; 

		//   //redirect(base_url('dashboard')); 
		// }  
		// else{  
		//    echo 0; 
		// //    $url = base_url().'admin';
        // //     redirect($url);
		// }   
	}  





	function logout()
	{
		// $this->session->unset_userdata('admin_id');
		// $this->session->unset_userdata('username');
		// $sdata['message'] = "Logout Successfully";
		// $this->session->set_userdata($sdata);

        session_destroy();
		$url = base_url().'admin';
        redirect($url);

		//redirect('admin');
	}
}
