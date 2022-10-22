<?php
class Student_personal_info extends CI_model
{


    public function __construct()
    {
        //$this->load->database();
    }


    public function add_student_per_info($data)
    {
        //$gender = $_POST['gender'];

        $return = array('stat' => 'not ok');


        $insert_qry = "INSERT INTO `tbl_stud_pers_info`(`first_name`, `middle_name`, `last_name`, `gender`, `dob`, `date_of_join`, `login_password`) VALUES ('".$data['first_name']."','".$data['middle_name']."','".$data['last_name']."','".$data['gender']."','".$data['dob']."','".$data['date_of_join']."','".$data['login_password']."')";
        //$insert_qry = "INSERT INTO `tbl_stud_pers_info`(`first_name`, `middle_name`, `last_name`, `gender`, `dob`, `date_of_join`, `login_password`) VALUES ('efef','vdf','dfff','m','2021-10-15','2021-10-14','htytyty')";
        

        $per_query = $this->db->query($insert_qry);


        if (isset($per_query)) {
            $stud_id = $this->db->insert_id();
        }
        $stud_edu_info = "INSERT INTO `tbl_stud_edu_info`(`stud_id`, `class_id`, `section_id`, `roll_no`, `year_of_join`, `last_year_marks`, `is_promoted`) VALUES ('" . $stud_id . "','" . $data['class_name'] . "','" . $data['section_name'] . "','" . $data['roll_no'] . "','" . $data['year_of_join'] . "','" . $data['last_year_marks'] . "','" . $data['is_promoted'] . "')";
        $edu_query = $this->db->query($stud_edu_info);

        if (isset($per_query) && isset($edu_query)) {
            $return['stat'] = 'ok';
            $return['stud_id'] = $stud_id;
        }
        return $return;
    }

    public function display_class_info()
    {
        $query = $this->db->get("tbl_class_info");
        return $query->result();
    }

    public function display_section_info()
    {
        $query = $this->db->get("tbl_section_info");
        return $query->result();
    }
    // public function display_per_details_info()
    // {
    //     $query = $this->db->get("tbl_stud_pers_info");
    //     return $query->result();
    // }

    // public function display_edu_details_info()
    // {
    //     $query = $this->db->get("tbl_stud_edu_info");
    //     return $query->result();
    // }

    private function get_class_name() {

    }
    private function get_sec_name() {
        
    }

    public function stud_list() {

        $data = array();

        $sql = "SELECT `id` as stud_id, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `date_of_join`, `login_password` FROM `tbl_stud_pers_info`";

        $query = $this->db->query($sql);

        $x=0;
        while ($row = $query->unbuffered_row('array'))
        {
                //$data[$x] = $row;


                // $sql_edu = "SELECT `class_id`, `section_id`, `roll_no`, `year_of_join`, `last_year_marks`, `is_promoted` FROM `tbl_stud_edu_info` WHERE stud_id = ".$row['stud_id']." ORDER BY `id` DESC LIMT 1";

                /*
                SELECT 
	tsei.`roll_no`, 
	tsei.`year_of_join`, 
	tsei.`last_year_marks`, 
	tsei.`is_promoted`,
	tsi.`section_name`,
	tci.`class_name`
 
FROM 
	`tbl_stud_edu_info` AS tsei, `tbl_section_info` AS tsi, `tbl_class_info` AS tci
WHERE 
	tsei.stud_id = 2 AND tsei.section_id = tsi.id AND tsei.class_id = tci.id

ORDER BY tsei.`id` DESC LIMIT 1
                */

            $sql_edu = "SELECT 
                            tsei.`roll_no`, 
                            tsei.`year_of_join`, 
                            tsei.`last_year_marks`, 
                            tsei.`is_promoted`,
                            tsi.`section_name`,
                            tci.`class_name`
                        FROM 
                            `tbl_stud_edu_info` AS tsei, `tbl_section_info` AS tsi, `tbl_class_info` AS tci
                        WHERE 
                            tsei.stud_id = ".$row['stud_id']." AND tsei.section_id = tsi.id AND tsei.class_id = tci.id
                        ORDER BY tsei.`id` DESC LIMIT 1";

            $query_edu = $this->db->query($sql_edu);
            $data[$x] = array_merge($row, $query_edu->row_array());
            $x++;
        }

        return $data;



    }

    
}
