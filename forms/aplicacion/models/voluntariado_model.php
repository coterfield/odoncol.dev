<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// @TODO: algunos joins
// Voluntariado_model

class Voluntariado_model extends CI_Model
{

	var $formvoluntariado_table	= 'formvoluntariado';

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
			'email' => $this->input->post("email"),
			'direccion' => $this->input->post("direccion"),
			'telefono' => $this->input->post("telefono"),
			'celular' => $this->input->post("celular"),
			'universidad' => $this->input->post("universidad"),
			'estado' => $this->input->post("estado"),
			'ncop' => $this->input->post("ncop"),
		);

		$this->db->insert($this->formvoluntariado_table, $data);
		$id = $this->db->insert_id();

		return $id;
	}

	function get_last_ten_entries()
	{
		$query = $this->db->get($this->formvoluntariado_table, 10);
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