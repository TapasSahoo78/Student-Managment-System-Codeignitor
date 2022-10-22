<?php
class Staff_info extends CI_model
{


    public function __construct()
    {
        //$this->load->database();
    }


    public function add_staff_info($data)
    {
     $return = array('stat' => 'not ok');

       $staff_insert_query = "INSERT INTO `tbl_staff_info`(`first_name`, `middle_name`, `last_name`, `gender`, `contact_num`, `email_id`, `address`, `city`, `state`, `country`) VALUES ('".$data['first_name']."','".$data['middle_name']."','".$data['last_name']."','".$data['gender']."','".$data['contact_num']."','".$data['email_id']."','".$data['address']."','".$data['city']."','".$data['state']."','".$data['country']."')";
       $staff_query = $this->db->query($staff_insert_query);

        if (isset($staff_query)) {
            $return['stat'] = 'ok';
        }
        return $return;
    }



    public function display_staff_details_info()
    {
        $query = $this->db->get("tbl_staff_info");
        return $query->result_array();
    }





}