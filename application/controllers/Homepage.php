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

		$flash = $this->session->flashdata('test_flash');

		$data['flashdata'] = "";

		if(!is_null($flash)){
			$data['flashdata'] = $flash['response'];
		}
		
		$navbar_data = array(
			'logo_link' => '#', // href for logo
			'links' => array(
				array('name' => 'About', 'link' => "about"),
				array('name' => 'Portfolio', 'link' => "portfolio"),
				array('name' => 'Contact', 'link' => "contact"),
			),
			'styles' => array(
				'display: none;',
			)
		);	

		$data['navbar'] = $this->load->view('segments/main_navigation', $navbar_data, TRUE);
		$data['footer'] = $this->load->view('segments/footer_main', null, TRUE);

		$this->load->view('index', $data);
	}

	public function homeRedirect($value){
		$this->load->helper('url');
		$data = array();

		$data['response'] = $value;

		$this->session->set_flashdata('test_flash', $data);
		
		redirect(base_url());
	}

	public function portfolioRedirect($value){
		$this->load->helper('url');

		$data = array();

		$data['response'] = $value;

		$this->session->set_flashdata('test_flash', $data);
		redirect(base_url().'portfolio');
	}

	public function aboutRedirect($value){
		$this->load->helper('url');
		$data = array();

		$data['response'] = $value;

		$this->session->set_flashdata('test_flash', $data);
		
		redirect(base_url().'about');
	}
}
