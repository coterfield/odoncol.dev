<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// @TODO: algunos joins
// Soat_model

class Hepatitis_model extends CI_Model
{

	var $formhepatitis_table	= 'formhepatitis';

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
			'nombre_completo' => $this->input->post("nombre_completo"),
			'dni' => $this->input->post("dni"),
			'ncop' => $this->input->post("ncop"),
			'dosis' => $this->input->post("dosis"),
			'direccion' => $this->input->post("direccion"),
			'edad' => $this->input->post("edad"),
			'ciudad' => $this->input->post("ciudad"),
			'telefono' => $this->input->post("telefono"),
			'email' => $this->input->post("email")
		);

		$this->db->insert($this->formhepatitis_table, $data);
		$id = $this->db->insert_id();

		return $id;
	}

	function get_last_ten_entries()
	{
		$query = $this->db->get($this->formhepatitis_table, 10);
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