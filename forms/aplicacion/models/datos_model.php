<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// @TODO: algunos joins
// Soat_model

class Soat_model extends CI_Model
{

	var $formsoat_table	= 'formsoat';

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
			'apellido_paterno' => $this->input->post("apellido_paterno"),
			'apellido_materno' => $this->input->post("apellido_materno"),
			'dni' => $this->input->post("dni"),
			'ncop' => $this->input->post("ncop"),
			'placa' => $this->input->post("placa"),
			'email' => $this->input->post("email"),
			'telefono' => $this->input->post("telefono"),
			'celular' => $this->input->post("celular")
		);

		$this->db->insert($this->formsoat_table, $data);
		$id = $this->db->insert_id();

		return $id;
	}

	function get_last_ten_entries()
	{
		$query = $this->db->get($this->formsoat_table, 10);
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