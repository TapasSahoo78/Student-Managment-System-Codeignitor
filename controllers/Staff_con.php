<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'core/Admin_controller.php';

class Staff_con extends CI_Controller
{


	public function __construct()
	{

		parent::__construct();
		$this->load->model('staff_info');

	}


	public function staff_info_insert()
	{  
    $stud_info = $this->staff_info->add_staff_info($_POST);
    //print_r($_POST);die;

	   //echo json_encode($stud_info);
        
		
		if($stud_info['stat']='ok'){
			$url = base_url().'staff_con/staff_info_form';
			redirect($url);
		}
	}


    public function staff_info_form()
	{  
        // $result['class_data']=$this->student_personal_info->display_class_info();
	// 	$result['section_data']=$this->student_personal_info->display_section_info();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
		$this->load->view('student/staff_reg');
        $this->load->view('admin/template/footer');

	}


    public function staff_info_list()
	{ 
		// $result['stu_per_data']=$this->student_personal_info->display_per_details_info();
		// $result['stu_edu_data']=$this->student_personal_info->display_edu_details_info();

		$result['staff_list'] = $this->staff_info->display_staff_details_info();

		//print_r($result['stud_list']); die;

		$this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
		$this->load->view('student/staff_list',$result);
		$this->load->view('admin/template/footer');
	}

}