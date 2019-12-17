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
		$dh5 = opendir($iconic);
		while ($filename = readdir($dh5)) {
			if ($filename != '.' && $filename != '..'){
				$filesicon[] = $filename;
			}
		}
		closedir($dh5);

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
		
		// print_r($data['assets']);exit;
		
			$this->load->template('home',$data);
	}
}
