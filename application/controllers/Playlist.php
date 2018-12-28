<?php

class Playlist extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Top 20 Playlist';

        $this->load->view("static/template/header", $data);     
        $this->load->view("playlist");
        $this->load->view("static/template/footer");   
    }
}