<?php
class Sub_model extends CI_Model 
{
	function saverecords($name,$is_active)
	{
	$query="insert into tbl_subject_info values('','$name','yes')";
	$res = $this->db->query($query);
	return $res;
	}

	function display_records()
	{
	  $query=$this->db->get("tbl_subject_info");
	  return $query->result();
	}


	function displayrecordsById($id)
	{

	$this->db->where('id',$id);
	$qry=$this->db->get('tbl_subject_info');
	return $qry->result_array();
	//$query=$this->db->query("select * from tbl_class_info where id='".$id."'")->result();
	//return $query;
	//  $rest = $query->result();
	//  print_r($rest);
	//  die();
	}

	function insert_edit_info($id,$subject_name,$is_active)
	{
		
		$data=array('id'=>$id,
					'subj_name'=>$subject_name,
					'is_active'=>$is_active);
		$this->db->where('id',$id);
		$this->db->update('tbl_subject_info',$data);
	}


	
}