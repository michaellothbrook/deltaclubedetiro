<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	private $campanha;

	function __construct() {
		parent::__construct();
		
	}


	public function index()
	{
		

		$iconic = 'assets/css/bootstrap/open-iconic-master/font/css';
		$filesgallery = 'images';

		$dh5 = opendir($iconic);
		while ($filename = readdir($dh5)) {
			if ($filename != '.' && $filename != '..'){
				$filesicon[] = $filename;
			}
		}
		closedir($dh5);

		$dh6 = opendir($filesgallery);
		while ($filename = readdir($dh6)) {
			if ($filename != '.' && $filename != '..'){
				$gallery[] = $filename;
			}
		}
		closedir($dh6);
		// var_dump($gallery);exit;

		$data = [];
		$data['assets'] = array(
					'header'=>array(
						// 'css'=>$filescss,
						// 'css2'=>$filescss2,
						// 'bootstrap'=>$filesboot,
						// 'bootstrap_js'=>$filesjs,
						// 'jquery'=>$filesjquery,
						'iconic'=>$filesicon,
					)
				
				);
		$data['images'] = array(
					'galeria'=>$gallery
		);		
		
		// print_r($data['assets']);exit;
		
			$this->load->template('home',$data);
	}

	public function submit(){
		// echo $_POST['nome'];exit;
		$campanha = 'Formulário Home';
		// $this->Campanhas_model->getCampanhaById($this->campanha);

		$assunto = 'Site Projeto - Formulário Home';
		// .$campanha['campanha_titulo'];
		$postRequest = $_REQUEST;
		// print_r($postRequest);exit;
		$this->load->library('user_agent');
		
		if ($this->agent->is_referral() || $this->agent->is_robot())
			redirect('/','redirect');
			
		if(!$this->agent->is_robot() 
		&& ($this->agent->referrer() != base_url('/') 
		&& empty($this->agent->browser()) 
		&& empty($this->agent->platform()))) {
				redirect('/','redirect');
		}
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required');
		$this->form_validation->set_rules('assunto', 'Telefone', 'required');
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'required');
		$this->form_validation->set_rules('cpf', 'CPF');
		
		
		if($this->form_validation->run() === FALSE)
			redirect('/','refresh');


		$this->sendData($postRequest);
			
		// $this->load->helper('url');
		$this->load->config('email');
        $this->load->library('email');
 
        $this->email->from('email@exemplo.com', 'Site Projeto')
            ->reply_to(false)
			->to($postRequest['email'])
            ->subject($assunto)
            ->message($this->load->view('email/template/thanks', $postRequest, true));
 
			if($this->email->send()){
                echo 'E-mail agradecimento enviado';
            } else {
                show_error($this->email->print_debugger());
            }
		
		
		$this->email->from('email@exemplo.com', 'Site Projeto')
            ->reply_to(false)
            ->to('recepiente@exemplo.com')
            ->cc('developer@exemplo.com')
			// ->to($postRequest['email'])
            ->subject("NOVO CADASTRO! " .$assunto)
            ->message($this->load->view('email/template/new-lead-notify', $postRequest, true));
		
			if($this->email->send()){
                echo 'E-mail lead enviado';
            } else {
                show_error($this->email->print_debugger());
            } 
		// redirect('/obrigado','refresh');
		// redirect(base_url('/'));	
			
	}

	public function sendData($params)
	{
		$database_data = $params;
		// print_r($database_data);exit;
		$this->load->model('Forms_data_model','insert');
		$result = $this->insert->insert($database_data);

	}
}
