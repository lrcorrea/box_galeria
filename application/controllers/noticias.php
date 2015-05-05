<?php

class Noticias extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Box Galeria - Notícias";
		
		$dados['meta'] = "<meta name='description' content='' />";
		
        $this->db->order_by("data","desc");
		$dados['noticias'] = $this->db->get("noticias")->result();
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('noticias',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }

    function detalhe($id){

        
        $dados['title'] = "Box Galeria - Notícia";
        
        $dados['meta'] = "<meta name='description' content='' />";
        
        $this->db->where("id",$id);
        $dados['noticia'] = $this->db->get("noticias")->result();
        
        $this->load->view('elementos/html_header',$dados);
        $this->load->view('noticia_detalhe',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }

    

}
?>