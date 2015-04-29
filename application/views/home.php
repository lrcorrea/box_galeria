<script type="text/javascript" src="<?php echo base_url();?>js/easySlider1.7.js"></script>
<script type="text/javascript">
 	$(document).ready(function(){ 
	  $("#slider").easySlider({
		    //continuous: true
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
							<a href="<?php echo base_url();?>noticias/detahe/<?php echo $noticia->id;?>">LEIA MAIS</a>
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
		<p>CONFIRA A <span>PROGRAMAÇÃO</span> PROJETO, OS <span>ARTISTAS SELECIONADOS</span> E QUAL<br/>SERÁ O <span>PRÓXIMO BAIRRO</span> QUE IRÁ RECEBER O PROJETO BOX GALERIA</p>
		<a href="" class="saiba_mais">SAIBA MAIS</a>
	</div>
</div>
</section>