<?php

class Bairro extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Box Galeria - Bairros";
		
		$dados['meta'] = "<meta name='description' content='' />";
		
		$dados['bairros'] = $this->db->get("bairro")->result();
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('bairro',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }

    

}
?>