<?php 
class My404 extends CI_Controller 
{

    public function index() 
    { 
        $data['judul'] = '404 Error';

        $this->output->set_status_header('404'); 
        $this->load->view('static/template/header', $data);
        $this->load->view('static/template/err404');//loading in custom error view
        $this->load->view('static/template/footer');
    } 


} 