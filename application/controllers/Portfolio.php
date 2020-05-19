<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

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
		$this->load->model('portfolio_model');
		$this->load->helper('url');

		$flash = $this->session->flashdata('test_flash');

		$data['flashdata'] = "All";

		if(!is_null($flash)){
			$data['flashdata'] = $flash['response'];
		}

		$data['portfolioItems'] = $this->initSearch($data['flashdata']);

		$data['portfolioOverlay'] = $this->load->view('segments/portfolio_overlay', null, TRUE);

		$navbar_data = array(
			'logo_link' => base_url(), // href for logo
			'links' => array(

			),
			'styles' => array()
		);	

		$data['projectTypes'] = $this->portfolio_model->get_project_types();

		$data['navbar'] = $this->load->view('segments/main_navigation', $navbar_data, TRUE);
		
		$data['footer'] = $this->load->view('segments/footer_main', null, TRUE);
		
		$this->load->view('portfolio', $data);
	}

	// For Search on Initial Load
	public function initSearch($initProjectType){
		$view_data = array();

		$view_data['project'] = $initProjectType;

		return $data['PortfolioView'] = $this->load->view('segments/portfolio_items', $view_data, TRUE);
	}

	// For Search on Form Submit
	public function searchForm(){
		$post_data = $this->input->post();
		$data = array();
		$view_data = array();
		
		if(array_key_exists('ProjectType', $post_data)){
			$view_data['search'] = $post_data['PortfolioSearch'];
			$view_data['job'] = $post_data['JobType'];
			$view_data['project'] = $post_data['ProjectType'];
		}
		else{
			$view_data['project'] = array();
		}

		$data['PortfolioView'] = $this->load->view('segments/portfolio_items', $view_data, TRUE);
		
		echo json_encode($data);
	}

}
?>