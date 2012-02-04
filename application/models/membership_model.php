<?php if (!defined('BASEPATH')) exit('No direct script access allowed');






class Membership_model extends CI_Model
{

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));

		/** @var $query CI_DB_mysql_result */
		$query = $this->db->get('membership');

		if ($query->num_rows == 1)
		{
			return true;
		}

		return false;
	}

	function create_member()
	{

		$new_member_insert_data = array(
			'first_name'    => $this->input->post('first_name'),
			'last_name'     => $this->input->post('last_name'),
			'email_address' => $this->input->post('email_address'),
			'username'      => $this->input->post('username'),
			'password'      => md5($this->input->post('password')),
			'date_added'      => mktime()
		);

		$insert = $this->db->insert('membership', $new_member_insert_data);
		return $insert;
	}
}