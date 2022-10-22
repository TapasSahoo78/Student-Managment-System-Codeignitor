<?php
class Sec_model extends CI_Model 
{
	function saverecords($name)
	{
	$query="insert into tbl_section_info values('','$name')";
	$res= $this->db->query($query);
	return $res;
	}

	function display_records()
	{
	  $query=$this->db->get("tbl_section_info");
	  return $query->result();
	}



	function displayrecordsById($id)
	{

	$this->db->where('id',$id);
	$qry=$this->db->get('tbl_section_info');
	return $qry->result_array();
	//$query=$this->db->query("select * from tbl_class_info where id='".$id."'")->result();
	//return $query;
	//  $rest = $query->result();
	//  print_r($rest);
	//  die();
	}


	function insert_edit_info($id,$section_name)
	{
		
		$data=array('id'=>$id,
					'section_name'=>$section_name);
		$this->db->where('id',$id);
		$this->db->update('tbl_section_info',$data);
	}
}