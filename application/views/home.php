<script type="text/javascript" src="<?php echo base_url();?>js/easySlider1.7.js"></script>
<script type="text/javascript">
 	$(document).ready(function(){ 
	  $("#slider").easySlider({
		    //continuous: true
	 	 });

	  $(".inscreva_se").click(function(){

	  		$(".inscricao").slideToggle();
	  		return false;
	  });

	  <?php if($enviou){ ?>

	  		$(".inscricao").slideDown();

	 <?php } ?>


	 $("#inscricaoform").submit(function(){

	 	var imgVal = $('#imagem').val(); 
        if(imgVal=='') 
        { 
            alert("Selecione uma Foto"); 
            return false; 
        } 

	 });
 	}); 
</script>


<section class="conteudo_home">
	<div class="centro">
	  <h1>PROJETO BOX GALERIA LEVA EXPOSIÇÕES EM FORMATO ITINERANTE A BAIRROS DE SALVADOR</h1>
		<a class="inscreva_se" href="">ARTISTAS, INSCREVAM-SE</a>
		<p><a href="">Clique aqui</a> e leia o regulamento</p>
		
	</div>
</section>
<section class="inscricao">
	<div class="centro">
		<h1>INSCRIÇÃO <?php if($enviou){ echo "ENVIADA COM SUCESSO"; } ?></h1>
		<form method="post" enctype="multipart/form-data" id="inscricaoform" action="<?php echo base_url();?>home/increve">
			
					<input type="text" required name="nome" placeholder="Nome" />
					<input type="text" required name="naturalidade" placeholder="Naturalidade" />
					<input type="text" required name="formacao" placeholder="Formação" />
					<input type="text" required name="rg" placeholder="Rg" />
					<input type="text" required name="cpf" placeholder="Cpf" />
					<input type="text" required name="endereco" placeholder="Endereço" />
					<input type="text" required name="cep" placeholder="Cep" />
					<input type="text" required name="telefone1" placeholder="Telefone Residencial" />
					<input type="text" name="telefone2" placeholder="Telefone Celular" />
					<input type="text" required name="email" placeholder="E-mail" />
					<input type="text" name="portfolio" placeholder="Perfil e páginas em redes sociais, Currículo Lattes, galerias virtuais, etc)" />
					

					<textarea name="atividades" required style="clear:left;" placeholder="Principais Atividades realizadas (EXPOSIÇÕES, PALESTRAS, CURSOS, WORSHOPS, ETC)"></textarea>
					<textarea required name="curriculo" placeholder="Curriculo Resumido"></textarea>
					
					<label>
						Portfólio, com no mínimo 8 e no máximo 12 fotografias de obras realizadas, em boa resolução 
						<input type="file"  name="userfile[]" id="imagem" size="20" class="multi" />
					</label>
					<input type="submit" id="enviar" value="" />
					
		</form>	
			

		
	</div>
</section>	
<section class="conteudo">
<div class="centro">
	<div class="ultimas_noticias">
		<h1>ÚLTIMAS NOTÍCIAS</h1>
		<p>Acompanhe todas as novidades sobre o projeto Box Galeria e saiba por onde iremos passas<br/><br/><br/>
			Siga a Box Galeria nas Redes Sociais</p>
		<div class="redes_sociais">
			<a href="" class="social fb_icon"></a>
			<a href="" class="social tt_icon"></a>
			<a href="" class="social instagram_icon"></a>
		</div>
	</div>
	<div class="noticias">
		
		<div id="content">
	
			<div id="slider">
				<ul>	
					<li>	
				<?php $i = 0; foreach($noticias as $noticia): ?>
				<?php 
					$this->db->where("id_noticia",$noticia->id);
					$foto = $this->db->get("fotos_noticia")->result();
				?>		
					
						<div class="item_noticia">
							<div><?php echo data_us_to_br($noticia->data);?></div>
							<img src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto[0]->nome;?>&w=185&h=123&zc=1&q=100">
							<p><?php echo $noticia->titulo;?></p>
							<a href="<?php echo base_url();?>noticias/detalhe/<?php echo $noticia->id;?>">LEIA MAIS</a>
						</div>
						
						<?php if($i == 2) { 
							echo "</li><li>";
							$i = -1;
						} ?>
						
					
				<?php $i++; endforeach; ?>
					</li>			
				</ul>
			</div>
		
		</div>

	</div>	
	
</div>
<div class="bg_lugar">
	<div class="centro">
		<h1>ONDE ESTAMOS?</h1>
		<p>CONFIRA A <span>PROGRAMAÇÃO</span> DO PROJETO, OS <span>ARTISTAS SELECIONADOS</span> E QUAL<br/>SERÁ O <span>PRÓXIMO BAIRRO</span> QUE IRÁ RECEBER O PROJETO BOX GALERIA</p>
		<a href="<?php echo base_url();?>programacao" class="saiba_mais">SAIBA MAIS</a>
	</div>
</div>
</section>