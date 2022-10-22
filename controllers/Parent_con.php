<?php
defined('BASEPATH') or exit('No direct script access allowed');

//require APPPATH . 'core/Admin_controller.php';

class Parent_con extends CI_Controller
{


	public function __construct()
	{

		parent::__construct();
		$this->load->model('student_parent_info');


	}


	public function parent_personal_info_insert()
	{  
		//print_r($_POST);die;
       $per_info = $this->student_parent_info->add_stud_parent_info($_POST); 
	   echo json_encode($per_info); 
	//    $url = base_url().'parent_con/stud_parent_info_form/' ;
	//     redirect($url);
		
		// if($per_info['stat']='ok'){
		// 	$url = base_url().'parent_con/stud_parent_info';
		// 	redirect($url);
		//}

	}


    public function stud_parent_info_form($stud_id)
	{   //$result['class_data']=$this->student_personal_info->display_class_info();
		//$result['section_data']=$this->student_personal_info->display_section_info();
 //print_r($stud_id);die;
        // $this->load->model('Student_personal_info');
        // $stud_id = $this->Student_personal_info->add_student_per_info($_POST);
        $data['stud_id']=$stud_id;
 
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
		$this->load->view('student/stud_parent_reg',$data);
        $this->load->view('admin/template/footer');

	}


    public function stud_parent_info($stud_id)
	{ 
		$data['stud_id']=$stud_id;
		// $result['stu_per_data']=$this->student_personal_info->display_per_details_info();
		// $result['stu_edu_data']=$this->student_personal_info->display_edu_details_info();

		$result['parent_list'] = $this->student_parent_info->display_per_details_info($data);

		//print_r($result['stud_list']); die;

		$this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
		$this->load->view('student/parent_list',$result);
		$this->load->view('admin/template/footer');
	}


}