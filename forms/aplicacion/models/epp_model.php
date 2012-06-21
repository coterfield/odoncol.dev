<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// @TODO: algunos joins
// formepp_model

class Epp_model extends CI_Model
{

	var $cursos_table 			= 'cursos';
	var $tipocursos_table 		= 'tipocursos';
	var $tformepp_table	  		= 'tformepp';
	var $tformepp_cursos_table 	= 'tformepp_cursos';
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

	function get_cursos($sede_id = FALSE)
	{
//		$query = $this->db->get($this->cursos_table);

		$this->db->select('*');
		$this->db->from($this->cursos_table);
		$this->db->join($this->tipocursos_table, $this->tipocursos_table.'.tipocurso_id = '.$this->cursos_table.'.tipocurso_id');

		if($sede_id)
		{
			$this->db->where('sede_id', $sede_id);
		}

		$query = $this->db->get();

		//return $query->result();
		return $query->result_array();
	}

	function save_form()
	{
		$data = array(
			'nombres' => $this->input->post("nombres"),
			'apellido_paterno' => $this->input->post("apellido_paterno"),
			'apellido_materno' => $this->input->post("apellido_materno"),
			'ncop' => $this->input->post("ncop"),
			'email' => $this->input->post("email"),
			'telefono' => $this->input->post("telefono"),
			'celular' => $this->input->post("celular")
		);

		$miraflores = $this->input->post("miraflores");
		$comas = $this->input->post("comas");
		$sanjuan = $this->input->post("sanjuan");

		$this->db->insert($this->tformepp_table, $data);
		$id = $this->db->insert_id();

		$data_cursos = array();

		if ($miraflores and is_array($miraflores)){
			foreach ($miraflores as $curso_id)
			{
				$data_cursos[] = array(
					'tformepp_id'	=> $id,
					'curso_id'      => $curso_id
				);
			}
		}

		if ($comas and is_array($comas)){
			foreach ($comas as $curso_id)
			{
				$data_cursos[] = array(
					'tformepp_id'	=> $id,
					'curso_id'      => $curso_id
				);
			}
		}

		if ($sanjuan and is_array($sanjuan)){
			foreach ($sanjuan as $curso_id)
			{
				$data_cursos[] = array(
					'tformepp_id'	=> $id,
					'curso_id'      => $curso_id
				);
			}
		}

		if (count($data_cursos) > 0){
			$this->db->insert_batch($this->tformepp_cursos_table, $data_cursos);
		}

		return $id;

	}

	function get_last_ten_entries()
	{
		$query = $this->db->get('entries', 10);
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