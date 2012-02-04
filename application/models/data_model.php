<?php if (!defined('BASEPATH')) exit('No direct script access allowed');





class Data_model extends CI_Model
{
	/*
	function getAll() {
		$q = $this->db->query("SELECT * FROM data");
		if($q->num_rows() > 0) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	*/
	/*
	function getAll() {
		$q = $this->db->get('data');
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	*/

	/*
	function getAll() {
		$this->db->select('title, contents');
		$q = $this->db->get('data');

		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
	}
	*/
	/*
	function getAll() {
		$sql = "SELECT title, author, contents FROM data WHERE id = ? AND author = ?";
		$q = $this->db->query($sql, array(2, 'Jeffrey Way'));
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
	}
	*/

	function getAll()
	{
		$this->db->select('title, content');
		$this->db->from('data');
		$this->db->where('id', 1);

		$data = array();

		/**@var $q CI_DB_mysql_result */
		$q = $this->db->get();

		if ($q->num_rows() > 0)
		{
			foreach ($q->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}
		return null;
	}
}