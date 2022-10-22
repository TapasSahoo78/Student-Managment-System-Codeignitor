<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'core/Admin_controller.php';

class Student_con extends CI_Controller
{


	public function __construct()
	{

		parent::__construct();
		$this->load->model('student_personal_info');

	}


	public function stud_personal_info_insert()
	{  

       $stud_info = $this->student_personal_info->add_student_per_info($_POST);

	   echo json_encode($stud_info);
        
		
		// if($stud_info['stat']='ok'){
		// 	$url = base_url().'student_con/stud_personal_info_show';
		// 	redirect($url);
		//}

	}

    public function stud_personal_info_show()
	{   $result['class_data']=$this->student_personal_info->display_class_info();
		$result['section_data']=$this->student_personal_info->display_section_info();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
		$this->load->view('student/stud_reg',$result);
        $this->load->view('admin/template/footer');

	}

	public function stud_personal_info()
	{ 
		// $result['stu_per_data']=$this->student_personal_info->display_per_details_info();
		// $result['stu_edu_data']=$this->student_personal_info->display_edu_details_info();

		$result['stud_list'] = $this->student_personal_info->stud_list();

		//print_r($result['stud_list']); die;

		$this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
		$this->load->view('student/student_list',$result);
		$this->load->view('admin/template/footer');
	}


}