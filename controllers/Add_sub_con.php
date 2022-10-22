<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_sub_con extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	//$this->load->database();
	
	//load Model
	$this->load->model('sub_model');
	}

	public function savedata()
	{
		
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('sub_name');
		$e=$this->input->post('is_active');
		//$m=$this->input->post('mobile');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$datas =$this->sub_model->saverecords($n,$e);
		if($datas==true){
			redirect('add_sub_con/displaydata');
		}else{
			echo "insert error !";
		} 
		/*if($datas){
		echo "Records Saved Successfully";
		}else{
			redirect('subclass/savedata');
		}*/
	}
	}
	public function displaydata()
	{
		$result['data']=$this->sub_model->display_records();
		//load registration view form
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		//$this->load->view('Admin/dashboard');
		$this->load->view('admin/add_sub',$result);
		$this->load->view('admin/template/footer');
	} 



	public function updatedata($id)
	{
		//$id=$this->input->get('id');
		
		$data['result']=$this->sub_model->displayrecordsById($id);
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/update_subject',$data);
		$this->load->view('admin/template/footer');
	

	}


	public function edit_details()
	{
		//echo "hello";
		$id=$this->input->post('id');
		$subject_name=$this->input->post('subject_name');
		$is_active=$this->input->post('is_active');

		$this->sub_model->insert_edit_info($id,$subject_name,$is_active);
		redirect('add_sub_con/displaydata');
	}
}
?>