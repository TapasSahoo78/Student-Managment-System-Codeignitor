<?php
class Admin_model extends CI_model
{


  public function __construct()
  {
    //$this->load->database();
  }

  // public function admin_model_info($email_address,$password){

  // $this->db->select('*');
  // $this->db->from('tbl_admin');
  // $this->db->where('admin_email_id',$email_address);
  // $this->db->where('admin_password',$password);

  // $query_result = $this->db->get();
  // $result = $query_result->row();
  // return $result;
  //  }



  public function islogin($email_address, $password)
  {
    //$query=$this->db->get_where('tbl_admin',array('admin_email_id'=>$data['admin_email_id'],'admin_password'=>$data['admin_password']));  
    //return $query->num_rows();


    // $this->db->select('*');
    // $this->db->from('tbl_admin');
    // $this->db->where('admin_email_id',$email_address);
    // $this->db->where('admin_password',$password);


    $query = $this->db->query('SELECT * FROM tbl_admin WHERE `admin_email_id` = "' . $email_address . '"');
    $return = array('stat' => 'not-oky', 'msg' => '');

    if ($query->num_rows() == 1) {

      $row = $query->row_array();
      if ($row['admin_password'] == $password) {

        // $return = array('stat' => 'oky', 'msg' => 'Redirect to dashboard');
        $return['stat'] = 'oky';
        $return['msg'] = 'Redirect to dashboard';
        $_SESSION['admin_data']['token'] = session_id() . '_' . $row['id'];
        $_SESSION['admin_data']['admin_id'] = $row['id'];
      } else {
        $return['msg'] = 'Password not matched';
      }
    } else {

      $return['msg'] = 'Account does not exists';
    }

    return $return;


    // $query_result = $this->db->get();
    // $result = $query_result->row_array();
    // return $result;
  }
}
