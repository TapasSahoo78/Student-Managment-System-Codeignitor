<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Add_sec_con extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	//$this->load->database();
	
	//load Model
	$this->load->model('sec_model');
	}

	public function savedata()
	{
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('section_name');
		//$m=$this->input->post('mobile');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$datas =$this->sec_model->saverecords($n);
		
		if($datas==true){
			redirect('add_sec_con/displaydata');
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
		
		$result['data']=$this->sec_model->display_records();
		//load registration view form
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		//$this->load->view('Admin/dashboard');
		$this->load->view('admin/add_section',$result);
		$this->load->view('admin/template/footer');
	} 


	public function updatedata($id)
	{
		//$id=$this->input->get('id');
		
		$data['result']=$this->sec_model->displayrecordsById($id);
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/update_section',$data);
		$this->load->view('admin/template/footer');
	

	}


	public function edit_details()
	{
		$id=$this->input->post('id');
		$section_name=$this->input->post('section_name');

		$this->sec_model->insert_edit_info($id,$section_name);
		redirect('add_sec_con/displaydata');
	}


}
?>