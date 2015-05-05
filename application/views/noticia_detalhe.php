<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/sobre.css"/>




<section class="conteudo">
	<div class="bg_sobre noticias">
			<h1>Notícia</h1>
			<h3>CONHEÇA QUEM FAZ PARTE DO PROJETO BOX GALERIA</h3>
			
			<div class="centro">
				<h4><?php echo data_us_to_br($noticia[0]->data) . " - " . $noticia[0]->titulo;?></h4>
				<?php echo $noticia[0]->descricao;?>

				<div style="clear:both"></div>
				<?php
					$this->db->where("id_noticia",$noticia[0]->id);
					$fotos = $this->db->get("fotos_noticia")->result(); 
					foreach($fotos as $foto):
					?>

					<!--<a href="<?php echo base_url();?>imgs/<?php echo $foto->nome;?>" rel="lightbox[road]"><img src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto->nome;?>&w=150&h=150&zc=1&q=100"></a>-->				<?php endforeach; ?>
			</div>
	</div>
	
</section>