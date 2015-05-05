<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/sobre.css"/>

<!-- fancybox -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript" src="<?php echo base_url();?>fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	
	<?php foreach($artistas as $integrante): ?>
	
		
		
			$("#integrante<?php echo $integrante->id;?>").fancybox({
				
					'width'         		: "600",
					'height'        		: "400"

			});
		
		<?php endforeach; ?>
});

</script>







<section class="conteudo">
	<div class="bg_sobre">
		<h1>ARTISTAS</h1>
		<h3>Confira os artistas que fazem parte do projeto box galeria</h3>
			
		<div class="centro">
			<?php 
			if($artistas){
			foreach($artistas as $integrante): 
				$this->db->where("id_artistas",$integrante->id);
			$foto = $this->db->get("fotos_artistas")->result();
				?>
			<div class="box_artista">
				<a href="#integrantefancy<?php echo $integrante->id;?>" id="integrante<?php echo $integrante->id;?>" ></a>
				<div class="effect"><div id="cross"></div></div>
				<img src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto[0]->nome;?>&w=308&h=308&zc=1&q=100">
				<h1><?php echo $integrante->nome;?></h1>
				
			</div>
			<?php endforeach; }else{ ?>

			<p>Em Breve</p>
			<?php } ?>


	<?php foreach($artistas as $integrante): ?>
		
		<div style="display:none; background:#FFF;" id="integrantefancy<?php echo $integrante->id;?>" class="dentrofancy">
		<h4><?php echo $integrante->nome;?></h4>
			<hr /><br />
			<?php echo $integrante->descricao;?>
			
		
			
		</div>


	<?php endforeach; ?>
		</div>
	</div>
</section>

