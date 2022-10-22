<?php
class Student_parent_info extends CI_model
{


    public function __construct()
    {
        //$this->load->database();
    }


    public function add_stud_parent_info($data)
    {
     $return = array('stat' => 'not ok');

       $per_insert_query = "INSERT INTO `tbl_stud_parent_info`(`stud_id`, `first_name`, `middle_name`, `last_name`, `parent_type`, `gender`, `contact_num`, `email_id`, `address`, `city`, `state`, `country`) VALUES ('".$data['stud_id']."','".$data['first_name']."','".$data['middle_name']."','".$data['last_name']."','".$data['parent_type']."','".$data['gender']."','".$data['contact_num']."','".$data['email_id']."','".$data['address']."','".$data['city']."','".$data['state']."','".$data['country']."')";
       $per_query = $this->db->query($per_insert_query);

        if (isset($per_query)) {
            $return['stat'] = 'ok';
        }
        return $return;
    }




     public function display_per_details_info($data)
    {
        $stud_id = $data['stud_id'];
        //$query = $this->db->get("tbl_stud_parent_info");
        $sql="SELECT `id`, `first_name`, `middle_name`, `last_name`, `parent_type`, `gender`, `contact_num`, `email_id`, `address`, `city`, `state`, `country` FROM `tbl_stud_parent_info` WHERE `stud_id`='".$stud_id."' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}