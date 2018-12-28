<?php

class Blog extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Blog';
		$data_Author['author'] = 'svaldano';
        $this->load->view("static/template/header", $data);     
        $this->load->view("blog",$data_Author);
        $this->load->view("static/template/footer");   
	}
}