<?php

class About extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'About Sabilv';

        $this->load->view("static/template/header", $data);     
        $this->load->view("about");
        $this->load->view("static/template/footer");   
	}
}