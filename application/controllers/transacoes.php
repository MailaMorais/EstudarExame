<?php

class Transacoes extends CI_Controller{
    public function index()
	{
		$this->load->view('listaTransacoes');
	}
}
