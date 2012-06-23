<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hepatitis extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct()
	{
		parent::__construct();

		/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */

		$this->load->library('grocery_CRUD');
		$this->load->model('hepatitis_model');
		$this->load->model('formularios_model');

		date_default_timezone_set('America/Lima');
	}

	public function index()
	{
	//	echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
	//	die();
		$data['form_title'] = 'Formulario Hepatitis';

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$data['formulario'] = $this->formularios_model->get_formularios(FALSE,'formhepa');

		$data['randNum1'] = rand(0,9);
		$data['randNum2'] = rand(0,9);

		$this->firephp->info($data['formulario']);

		$this->form_validation->set_rules('nombre_completo', 'Nombres y Apellidos', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('dni', 'Nº DNI', 'trim|required|numeric');
		$this->form_validation->set_rules('ncop', 'Nº de Colegiatura', 'trim|required|numeric');
		$this->form_validation->set_rules('dosis', 'Dosis', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('direccion', 'Dirección y Distrito', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('edad', 'Edad', 'trim|required|numeric');
		$this->form_validation->set_rules('ciudad', 'Ciudad', 'trim|required|min_length[3]|xss_clean');
		$this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');


		$this->load->view('template/pretmpl_hepatitis', $data);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_hepatitis', $data);
		}
		else
		{
			$this->hepatitis_model->save_form();

			$email = $this->input->post("email");

		//	$this->firephp->info("antes de grabar");
		//	$this->firephp->info($miraflores);
		//	$this->firephp->info($comas);
		//	$this->firephp->info($sanjuan);

			if ($_SERVER['SERVER_ADDR'] == '72.9.154.62') {
				$this->send_mail($email,$data['formulario']);
			}

			$this->load->view('form_hepatitis', $data);
		}
		$this->load->view('template/postmpl', $data);

	}

	public function cursos()
	{
		$this->grocery_crud->set_table('cursos');
		$output = $this->grocery_crud->render();

		echo "<pre>";
		print_r($output);
		echo "</pre>";
		die();
	}

	public function view($page = home)
	{

	}


	public function send_mail($email, $formulario = FALSE)
	{
		$data['form_title'] = 'Formulario Hepatitis';
		$data['formulario'] = $formulario;

		$this->load->library( 'email' );
		$this->email->from( $formulario['email_emisor'], 'Colegio Odontológico de Lima' );
		$this->email->to( $email );
		$this->email->bcc($formulario['email_revisor']);
		$this->email->subject( 'Colegio Odontológico de Lima :: Muchas Gracias' );
		$this->email->message( $this->load->view( 'emails/base', $data, true ) );
		$this->email->send();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/formepp.php */