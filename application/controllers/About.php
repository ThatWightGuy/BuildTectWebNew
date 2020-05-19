<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
		$this->load->model('test_model');
		$this->load->helper('url');

		$flash = $this->session->flashdata('test_flash');

		$data['flashdata'] = "";

		if(!is_null($flash)){
			$data['flashdata'] = $flash['response'];
		}
		
		$navbar_data = array(
			'logo_link' => base_url(), // href for logo
			'links' => array(
				array('name' => 'About Us', 'link' => 'about-us'),
				array('name' => 'Our Team', 'link' => 'our-team'),
				array('name' => 'Services', 'link' => 'services')
			),
			'styles' => array()
		);	

		$data['navbar'] = $this->load->view('segments/main_navigation', $navbar_data, TRUE);
		$data['footer'] = $this->load->view('segments/footer_main', null, TRUE);

		$this->load->view('about', $data);
	}
}
?>