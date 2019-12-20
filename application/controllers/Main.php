<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $css = "assets/css";
		// $css2 = "assets/css/css";
		// $css3 = "assets/css/css/mixins";
		// $bootstrap = "assets/css/bootstrap/";
		// $bootstrap_js = "vendor/bootstrap/js";
		// $jquery = "vendor/jquery";

		// $dh = opendir($css);
		// while ($filename = readdir($dh)) {
		// 	if ($filename != '.' && $filename != '..'){
		// 		$filescss[] = $filename;
		// 	}
		// }

		// $dh2 = opendir($css2);
		// while ($filename = readdir($dh2)) {
		// 	if ($filename != '.' && $filename != '..'){
		// 		$filescss2[] = $filename;
		// 	}
		// }
		// closedir($dh2);

		// $dh3 = opendir($bootstrap);
		// while (false !== ($filename = readdir($dh3))) {
		// 	if ($filename != '.' && $filename != '..'){
		// 		$filesboot[] = $filename;
		// 	}
		// }
		// closedir($dh3);

		// $dh3 = opendir($bootstrap_js);
		// while ($filename = readdir($dh3)) {
		// 	if ($filename != '.' && $filename != '..'){
		// 		$filesjs[] = $filename;
		// 	}
		// }
		// closedir($dh3);

		// $dh4 = opendir($jquery);
		// while ($filename = readdir($dh4)) {
		// 	if ($filename != '.' && $filename != '..'){
		// 		$filesjquery[] = $filename;
		// 	}
		// }
		// closedir($dh4);

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
		$instituicao = $this->Instituicoes_model->getInstituicaoById($this->instituicao);
		$campanha = $this->Campanhas_model->getCampanhaById($this->campanha);

		$assunto = $instituicao["instituicao_titulo"] ." - ".$campanha['campanha_titulo'];

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
		$this->form_validation->set_rules('area', 'Area', 'required');
		
		
		if($this->form_validation->run() === FALSE)
			redirect('/','refresh');


		$this->sendData($postRequest);
			
		// $this->load->helper('url');
		$this->load->config('email');
        $this->load->library('email');
 
        $this->email->from('entregador@ngeducacional.com.br', $instituicao['instituicao_titulo'])
            ->reply_to(false)
            // ->to('web05@dowbis.com.br')
			->to($postRequest['email'])
            ->subject($assunto)
            ->message($this->load->view('email/template/thanks', $postRequest, true));
 
		$this->email->send();
		
		
		$this->email->from('entregador@ngeducacional.com.br', $instituicao['instituicao_titulo'])
            ->reply_to(false)
            ->to('svendas@faculdadealfa.edu.br')
            ->cc('web01@dowbis.com.br')
			// ->to($postRequest['email'])
            ->subject("NOVO LEAD! " .$assunto)
            ->message($this->load->view('email/template/new-lead-notify', $postRequest, true));
		
		$this->email->send(); 
		// redirect('/obrigado','refresh');
 

	}
}
