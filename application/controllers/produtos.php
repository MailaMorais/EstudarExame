<?php

class Produtos extends CI_Controller{
    public function index()
	{
		$this->load->view('listarProdutos');
	}
}
