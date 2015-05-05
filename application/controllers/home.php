<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Box Galeria";
		
		$dados['meta'] = "<meta name='description' content='' />";
		
		$dados['enviou'] = false;
		
		$this->db->limit("9");
		$this->db->order_by("data","desc");
		$dados['noticias'] = $this->db->get("noticias")->result();

		$this->load->view('elementos/html_header',$dados);
        $this->load->view('home',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }



    function increve(){


    	$data['nome'] = $this->input->post("nome");
    	$data['naturalidade'] = $this->input->post("naturalidade");
    	$data['formacao'] = $this->input->post("formacao");
    	$data['rg'] = $this->input->post("rg");
    	$data['cpf'] = $this->input->post("cpf");
    	$data['endereco'] = $this->input->post("endereco");
    	$data['cep'] = $this->input->post("cep");
    	$data['telefone1'] = $this->input->post("telefone1");
    	$data['telefone2'] = $this->input->post("telefone2");
    	$data['email'] = $this->input->post("email");
    	$data['portfolio'] = $this->input->post("portfolio");
    	$data['atividades'] = $this->input->post("atividades");
    	$data['curriculo'] = $this->input->post("curriculo");


    	if($_FILES['userfile']['name']){
    
                    $config['upload_path'] = 'inscricao'; // server directory
                    $config['allowed_types'] = 'png|jpg|rar'; // by extension, will check for whether it is an image
                    $config['max_size'] = '0'; // in kb
                    $config['max_width'] = '0';
                    $config['max_height'] = '0';
                    $config['encrypt_name'] = TRUE;

                    
                    $this->load->library('upload', $config);
                    $this->load->library('Multi_upload');

                    $files = $this->multi_upload->go_upload("userfile");



                    $fotos['nome_crip'] =    $this->multi_upload->data();

                    
                
        }

        if($_FILES['userfile2']['name']){
    
                    $config['upload_path'] = 'inscricao'; // server directory
                    $config['allowed_types'] = 'png|jpg|rar'; // by extension, will check for whether it is an image
                    $config['max_size'] = '0'; // in kb
                    $config['max_width'] = '0';
                    $config['max_height'] = '0';
                    $config['encrypt_name'] = TRUE;

                    
                    $this->load->library('upload', $config);
                    $this->load->library('Multi_upload');

                    $files2 = $this->multi_upload->go_upload("userfile2");



                    $fotos['nome_crip2'] =    $this->multi_upload->data();

                    
                
        }

            

                    
                    
                    
                    
                    //$dados['fotos'] = $fotos['nome_crip'][0];
                    
                    
                    $this->load->library('email');
                
                        $this->email->from("contato@boxgaleria.com.br","Box Galeria");
                        $this->email->to("contato@boxgaleria.com.br");
                        $this->email->subject('Inscrição encaminhado pelo Website');
                        $this->email->message("Nome: " . $data['nome'] . 
                                        "\n\n Email: " . $data['email'] . 
                                        "\n\n Naturalidade: " . $data['naturalidade'] . 
                                        "\n\n RG: " . $data['rg'] . 
                                        "\n\n CPF: " . $data['cpf'] . 
                                        "\n\n Formação: " . $data['formacao'] . 
                                        "\n\n Endereço: " . $data['endereco'] . 
                                        "\n\n Cep: " . $data['cep'] .
                                        "\n\n Telefone: " . $data['telefone1'] .
                                        "\n\n Telefone Celular: " . $data['telefone2'] .
                                        "\n\n Portfolio: " . $data['portfolio'] .
                                        "\n\n Atividades: " . $data['atividades'] .
                                        "\n\n Curriculo: " . $data['curriculo']);

                        
                        
                        if($fotos['nome_crip']){
                
                            foreach($fotos['nome_crip'] as $anexos):
                                $this->email->attach('inscricao/'.$anexos);
                            endforeach;
                        
                        }
                        if($fotos['nome_crip2']){
                
                            foreach($fotos['nome_crip'] as $anexos):
                                $this->email->attach('inscricao/'.$anexos);
                            endforeach;
                        
                        }
                
                $this->email->send();

                $dados['enviou'] = true;
                $dados['title'] = "Box Galeria";
                $dados['meta'] = "<meta name='description' content='' />";
                $this->db->limit("9");
                $this->db->order_by("data","desc");
                $dados['noticias'] = $this->db->get("noticias")->result();
        
                $this->load->view('elementos/html_header',$dados);
                $this->load->view('home',$dados);
                $this->load->view('elementos/html_footer',$dados);



    }

    
	
	
	
	
	

}
?>