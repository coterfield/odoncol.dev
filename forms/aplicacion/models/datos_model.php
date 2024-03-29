<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// @TODO: algunos joins
// Datos_model

class Datos_model extends CI_Model
{

	var $formdatos_table	= 'formdatos';

	var $title	= '';
	var $content= '';
	var $date	= '';


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}


	function save_form()
	{
		$data = array(
			'nombres' => $this->input->post("nombres"),
			'apellidos' => $this->input->post("apellidos"),
			'ncop' => $this->input->post("ncop"),
			'email' => $this->input->post("email"),
			'direccion' => $this->input->post("direccion"),
		);

		$this->db->insert($this->formdatos_table, $data);
		$id = $this->db->insert_id();

		return $id;
	}

	function get_last_ten_entries()
	{
		$query = $this->db->get($this->formdatos_table, 10);
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