<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		/* Standard Libraries */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */

		$this->load->library('grocery_CRUD');
	}

	function _example_output($output = null)
	{
		$data['form_title'] = 'Formulario FormEPP';

		$this->load->view('template/pretmpladmin', $data);
		$this->load->view('example.php',$output);
		$this->load->view('template/postmpl', $data);
	}

	function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	function offices_management()
	{
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');

			$crud->required_fields('lastName');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}

	function customers_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','{lastName} {firstName}');

			$output = $crud->render();

			$this->_example_output($output);
	}

	function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	function tformulario()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('tformulario');
		$crud->set_subject('Formulario');
	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function cursos()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('cursos');
		$crud->set_subject('Curso');

		$crud->unset_columns('curso_id','freg');
		$crud->unset_edit_fields('curso_id','freg');

		$crud->fields('tipocurso_id','nombre_curso','ponentes','sede_id','fecha_inicio','fecha_fin','detalles');

		$crud->set_relation('sede_id','sedes','nombre_sede');
		$crud->set_relation('tipocurso_id','tipocursos','tipo_curso');

		$crud->display_as('sede_id','Sede');
		$crud->display_as('tipocurso_id','Tipo de curso');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function sedes()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('sedes');
		$crud->set_subject('Sede');
		$crud->unset_columns('sede_id','freg');
		$crud->unset_edit_fields('sede_id','freg');
		$crud->fields('nombre_sede','dir_sede','tel_sede');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function tipocursos()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('tipocursos');
		$crud->set_subject('Tipo de Curso');
		$crud->unset_columns('tipocurso_id','freg');
		$crud->unset_edit_fields('tipocurso_id','freg');
		$crud->fields('tipo_curso');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function formularios()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('formularios');
		$crud->set_subject('Formulario');
		$crud->unset_columns('formulario_id','nombre_corto','email_emisor','freg');
		$crud->unset_edit_fields('formulario_id','freg');
		if ($_SERVER['SERVER_ADDR'] == '72.9.154.62') {
			$crud->fields('nombre_formulario','descripcion','email_emisor','email_revisor','autorespuesta');
		} else {
			$crud->fields('nombre_formulario','nombre_corto','descripcion','email_emisor','email_revisor','autorespuesta');
		}
		if ($_SERVER['SERVER_ADDR'] == '72.9.154.62') {
			$crud->unset_add();
		}
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function epp()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('tformepp');
		$crud->set_subject('Pre Inscripción');

		$crud->set_relation_n_n('cursos', 'tformepp_cursos', 'cursos', 'tformepp_id', 'curso_id', 'nombre_curso','prioridad');

//array('status' => 'active')

		$crud->unset_columns('freg');
		$crud->unset_edit_fields('freg');

		$crud->fields('nombres','apellido_paterno','apellido_materno','ncop','email','telefono','celular','cursos');

	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}

	function hepatitis()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('formhepatitis');
		$crud->set_subject('Beneficiario');

		$crud->unset_columns('freg');
		$crud->unset_edit_fields('freg');

		$crud->fields('nombre_completo','dni','ncop','dosis','direccion','edad','ciudad','telefono','email');

	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function soat()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('formsoat');
		$crud->set_subject('Soat');

		$crud->unset_columns('freg');
		$crud->unset_edit_fields('freg');

		$crud->fields('nombres','apellido_paterno','apellido_materno','dni','ncop','placa','email','telefono','celular');

	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function datos()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('formdatos');
		$crud->set_subject('Contacto');

		$crud->unset_columns('freg');
		$crud->unset_edit_fields('freg');

		$crud->fields('nombres','apellidos','ncop','email','direccion');

	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}

	function voluntariado()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('formvoluntariado');
		$crud->set_subject('Voluntario');

		$crud->unset_columns('freg');
		$crud->unset_edit_fields('freg');

		$crud->fields('nombres','apellido_paterno','apellido_materno','email','direccion','telefono','celular','universidad','estado','ncop');

	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function sugerencias()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('formsugerencias');
		$crud->set_subject('Sugerencia');

		$crud->unset_columns('freg');
		$crud->unset_edit_fields('freg');

		$crud->fields('nombres','apellidos','area','ncop','dni','email','comentario');

	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


	function denuncia()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('formdenuncia');
		$crud->set_subject('Denuncia');

		$crud->unset_columns('freg');
		$crud->unset_edit_fields('freg');

		$crud->fields('nombre','email','denuncia');

	//	$crud->unset_columns('productDescription');
	//	$crud->callback_column('buyPrice',array($this,'valueToEuro'));

		$output = $crud->render();

		$this->_example_output($output);
	}


}