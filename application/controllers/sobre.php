<?php

class Sobre extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Box Galeria - Sobre";
		
		$dados['meta'] = "<meta name='description' content='' />";
		
		

		$this->load->view('elementos/html_header',$dados);
        $this->load->view('sobre',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }

    
}
?>