<?php

class Artistas extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Box Galeria - Equipe";
		
		$dados['meta'] = "<meta name='description' content='' />";
		
		$dados['artistas'] = $this->db->get("artistas")->result();
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('artistas',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }

    

}
?>