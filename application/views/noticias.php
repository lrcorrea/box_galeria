<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/sobre.css"/>



<section class="conteudo">
	<div class="bg_sobre">
		<h1>Notícias</h1>
		<h3>CONHEÇA QUEM FAZ PARTE DO PROJETO BOX GALERIA</h3>
		
			
		<div class="centro">
			<?php 
			foreach($noticias as $noticia): 
				$this->db->where("id_noticia",$noticia->id);
			$foto = $this->db->get("fotos_noticia")->result();
				?>
			<div class="item_noticia">
							<div><?php echo data_us_to_br($noticia->data);?></div>
							<img src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto[0]->nome;?>&w=185&h=123&zc=1&q=100">
							<p><?php echo $noticia->titulo;?></p>
							<a href="<?php echo base_url();?>noticias/detalhe/<?php echo $noticia->id;?>">LEIA MAIS</a>
						</div>
			<?php endforeach;?>


		</div>
	</div>
</section>

