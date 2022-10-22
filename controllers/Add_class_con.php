<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_class_con extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	//$this->load->database();
	
	//load Model
	$this->load->model('class_model');
	}

	public function savedata()
	{
			//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('class_name');
		//$e=$this->input->post('email');
		//$m=$this->input->post('mobile');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$datas =$this->class_model->saverecords($n);
		
		if($datas==true){
			redirect('add_class_con/displaydata');
		}else{
			echo "insert error !";
		}
		//redirect("add_class_con/savedata");  
		/*if($datas){
		echo "Records Saved Successfully";
		}else{
			redirect('subclass/savedata');
		}*/
	}
	}
	public function displaydata()
	{
		//$id=$this->input->get('id');
		$result['data']=$this->class_model->display_records();
		//$result['data']=$this->class_model->displayrecordsById($id);
		//load registration view form
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		//$this->load->view('Admin/dashboard');
		$this->load->view('admin/add_class',$result);
		$this->load->view('admin/template/footer');
	} 



	public function updatedata($id)
	{
		//$id=$this->input->get('id');
		
		$data['result']=$this->class_model->displayrecordsById($id);
		// echo "<pre>";
		// print_r($data);
		// die();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/update_class',$data);
		$this->load->view('admin/template/footer');
	
		// if($this->input->post('update'))
		// {
		// $class_name=$this->input->post('class_name');
		// $this->class_model->update_records($class_name,$id);
		// echo "updated successfully !";
		// }

	}

	public function edit_details()
	{
		//echo "hello";
		$id=$this->input->post('id');
		$class_name=$this->input->post('class_name');

		$this->class_model->insert_edit_info($id,$class_name);
		redirect('add_class_con/displaydata');
	}

}
?>