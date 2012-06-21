<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// @TODO: algunos joins
// formepp_model

class Formularios_model extends CI_Model
{

	var $formularios_table 		= 'formularios';
	var $sedes_table 			= 'sedes';

	var $title	= '';
	var $content= '';
	var $date	= '';


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function get_formularios($formulario_id = FALSE, $nombre_corto = FALSE)
	{
	//	$query = $this->db->get($this->formularios_table);

		$this->db->select('*');
		$this->db->from($this->formularios_table);

		if($formulario_id)
		{
			$this->db->where('formulario_id', $formulario_id);
		}

		if($nombre_corto)
		{
			$this->db->where('nombre_corto', $nombre_corto);
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


	function get_last_ten_formularios()
	{
		$query = $this->db->get($this->formularios_table, 10);
		return $query->result();
	}

	function insert_entry()
	{
		$this->title   = $_POST['title']; // please read the below note
		$this->content = $_POST['content'];
		$this->date	= time();

		$this->db->insert('entries', $this);
	}

	function update_entry()
	{
		$this->title   = $_POST['title'];
		$this->content = $_POST['content'];
		$this->date	= time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}

}