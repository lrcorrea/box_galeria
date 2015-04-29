<?php

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		
		$dados['title'] = "Box Galeria - Contato";
		
		$dados['meta'] = "<meta name='description' content='' />";
		$dados['enviou'] = false;

		
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('contato',$dados);
        $this->load->view('elementos/html_footer',$dados);

    }

	

    function enviar(){
	
				$dados['meta'] = "";
		
				$data['nome']     = $this->input->post('nome');
				$data['email']    = $this->input->post('email');
				$data['telefone']    = $this->input->post('telefone');
				$data['assunto']    = $this->input->post('assunto');
			    $mensagem         = $this->input->post('mensagem');
				
				$this->load->library('email');
				$this->email->from("contato@boxgaleria.com.br","Box Galeria");
				$this->email->to('contato@boxgaleria.com.br');
				$this->email->subject('Contato encaminhado pelo Website');
				$this->email->message("Nome: " . $data['nome'] . 
					                  "\n\n Email: " . $data['email'] .
					                  "\n\n Fone: " . $data['telefone'] .
					                  "\n\n Assunto: " . $data['assunto'] .
					                  "\n\n Mensagem: " .$mensagem);
				
				$this->email->send();
				
				
				$dados['title'] = "Box Galeria - Contato";
		
				$dados['meta'] = "<meta name='description' content='' />";
				$dados['enviou'] = true;

				
				
				$this->load->view('elementos/html_header',$dados);
		        $this->load->view('contato',$dados);
		        $this->load->view('elementos/html_footer',$dados);
				
			
		}

}

?>