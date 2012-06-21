<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// @TODO: algunos joins
// sedes_model

class Sedes_model extends CI_Model{

	var $sedes_table 			= 'sedes';

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}


	function get_sedes($sede_id = FALSE, $sede_nombre = FALSE)
	{
	//	$query = $this->db->get($this->sedes_table);

		$this->db->select('*');
		$this->db->from($this->sedes_table);

		if($sede_id)
		{
			$this->db->where('sede_id', $sede_id);
		}

		$query = $this->db->get();

		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		} else {
			return $query->result_array();
		}

		//return $query->result();

	}

}