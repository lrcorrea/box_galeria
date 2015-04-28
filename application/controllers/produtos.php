<?php

class Produtos extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Kriativa - Produtos";
		
		$dados['meta'] = "<meta name='description' content='' />";
		
		
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('produtos',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }
    function detalhe(){

        $dados['title'] = "Kriativa - Produtos";
        
        $dados['meta'] = "<meta name='description' content='' />";
        
        
        
        $this->load->view('elementos/html_header',$dados);
        $this->load->view('produtos_interna',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }
    

}
?>