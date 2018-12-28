<?php

class Contact extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Contact';

        $this->load->view("static/template/header", $data);     
        $this->load->view("contact");
        $this->load->view("static/template/footer");   
	}
}