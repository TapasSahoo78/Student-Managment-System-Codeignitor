<?php
class Class_model extends CI_Model 
{
	function saverecords($name)
	{
		$query="insert into tbl_class_info values('','$name')";
		$res =$this->db->query($query);
		return $res;
		
	}

	function display_records()
	{
		$query=$this->db->query("select * from tbl_class_info");
		return $query->result();
	}


	function displayrecordsById($id)
	{

	$this->db->where('id',$id);
	$qry=$this->db->get('tbl_class_info');
	return $qry->result_array();
	//$query=$this->db->query("select * from tbl_class_info where id='".$id."'")->result();
	//return $query;
	//  $rest = $query->result();
	//  print_r($rest);
	//  die();
	}


	
	// function update_records($class_name,$id)
	// {
	// $query=$this->db->query("update tbl_class_info SET class_name='$class_name' where id='".$id."'");
	// }



	function insert_edit_info($id,$class_name)
	{
		
		$data=array('id'=>$id,
					'class_name'=>$class_name);
		$this->db->where('id',$id);
		$this->db->update('tbl_class_info',$data);
	}
}
?>