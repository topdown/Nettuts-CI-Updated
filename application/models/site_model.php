<?php if (!defined('BASEPATH')) exit('No direct script access allowed');







class Site_model extends CI_Model {

	public function get_records()
	{
		/**@var $query CI_DB_mysql_result */
		$query = $this->db->get('data');
		
		return $query->result();
	}
	
	public function add_record($data)
	{
		$this->db->insert('data', $data);
		return;
	}
	
	public function update_record($data)
	{
		$this->db->where('id', 12);
		$this->db->update('data', $data);
	}
	
	public function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('data');
	}
	
}