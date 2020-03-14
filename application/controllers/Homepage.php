<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

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
		$this->load->helper('url');

		$navbar_data = array(
			'logo_link' => '#', // href for logo
			'links' => array(
				array('name' => 'Contact', 'link' => "#contact"),
				array('name' => 'Portfolio', 'link' => "#portfolio"),
				array('name' => 'About', 'link' => "#about")
			),
			'styles' => array(
				'display: none;',
			)
		);	

		$data['navbar'] = $this->load->view('segments/navi_main', $navbar_data, TRUE);


		$this->load->view('homepage', $data);
	}
}
