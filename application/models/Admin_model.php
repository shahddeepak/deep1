<?php 
class Admin_model extends CI_model

{

	public function insert($table,$data)
	{
		 $this->db->insert($table,$data);
		 $insert_id = $this->db->insert_id();
		 return  $insert_id;
	}


	public function select_all($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		return $query=$this->db->get()->result();
	}


	public function select_where($table,$where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query=$this->db->get();
		return $query->result();
	}


	public function update_row($table,$data,$where)
	{
		$this->db->where($where);
		if($this->db->update($table,$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function delete($table,$where)
	{
		return $this->db->delete($table,$where);
	}


	public function select_desc($table,$order)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($order,'DESC');
		$query = $this->db->get(); 
		return $query->result();
	}


	// public function select_where_employee($table,$where)
	// {
	// 	 $this->db->select('campion,employee_id,employee_email,from_mail,subject,body,added_on, COUNT(employee_id) as total');
	// 	$this->db->from($table);
	// 	$this->db->where($where);
	// 	$this->db->group_by('employee_id'); 
	// 	$query=$this->db->get();
	// 	return $query->result();
	// }

	
	public function select_count($table,$id)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('user_id',$id);
		$query = $this->db->get()->result();
		return $total_value=count($query);
	}
	
	// public function select_count_user($table)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from($table);
	// 	$query = $this->db->get()->result();
	// 	return $total_value=count($query);
	// }


	// public function select_desc_user($table,$order)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from($table);
	// 	$this->db->order_by($order,'DESC');
	// 	$query = $this->db->get(); 
	// 	return $query->result();
	// }


}
?>