<?php

class Programacao extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Box Galeria - Programação";
		
		$dados['meta'] = "<meta name='description' content='' />";
		
		
        $this->db->group_by('MONTH(data_inicio), YEAR(data_inicio)');
        $dados['meses'] = $this->db->get("programacao")->result();
        
        
       


		$this->load->view('elementos/html_header',$dados);
        $this->load->view('programacao',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }

    
}
?>