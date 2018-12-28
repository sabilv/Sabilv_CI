<?php

class Home extends CI_Controller{

    public function index()
	{
        $data['judul'] = 'Hello!';
        $this->load->view("static/template/header", $data);     
        $this->load->view("home");
        $this->load->view("static/template/footer");   
	}
}