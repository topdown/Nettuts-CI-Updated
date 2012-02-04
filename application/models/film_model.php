<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class film_model extends CI_Model
{

	function search($limit, $offset, $sort_by, $sort_order)
	{

		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(
			'FID',
			'title',
			'category',
			'length',
			'rating',
			'price'
		);
		$sort_by    = (in_array($sort_by, $sort_columns)) ? $sort_by : 'title';

		// results query
		$q = $this->db->select('FID, title, category, length, rating, price')
				->from('film_list')
				->limit($limit, $offset)
				->order_by($sort_by, $sort_order);

		$ret['rows'] = $q->get()->result();

		// count query
		$q = $this->db->select('COUNT(*) as count', FALSE)
				->from('film_list');

		$tmp = $q->get()->result();

		$ret['num_rows'] = $tmp[0]->count;

		return $ret;
	}

}
