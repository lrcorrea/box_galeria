<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/sobre.css"/>

<!-- fancybox -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript" src="<?php echo base_url();?>fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	
	<?php foreach($equipe as $integrante): ?>
	
		
		
			$("#integrante<?php echo $integrante->id;?>").fancybox({
				
					'width'         		: "600",
					'height'        		: "400"

			});
		
		<?php endforeach; ?>
});

</script>







<section class="conteudo">
	<div class="bg_sobre">
		<h1>EQUIPE</h1>
		<h3>CONHEÇA QUEM FAZ PARTE DO PROJETO BOX GALERIA</h3>
			
		<div class="centro">
			<?php 
			foreach($equipe as $integrante): 
				$this->db->where("id_parceiros",$integrante->id);
			$foto = $this->db->get("fotos_parceiros")->result();
				?>
			<div class="box_artista">
				<a href="#integrantefancy<?php echo $integrante->id;?>" id="integrante<?php echo $integrante->id;?>" ></a>
				<div class="effect"><div id="cross"></div></div>
				<img src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto[0]->nome;?>&w=308&h=308&zc=1&q=100">
				<h1><?php echo $integrante->nome;?></h1>
				<h3><?php echo $integrante->tipo;?></h3>
			</div>
			<?php endforeach;?>


	<?php foreach($equipe as $integrante): ?>
		
		<div style="display:none; background:#FFF;" id="integrantefancy<?php echo $integrante->id;?>" class="dentrofancy">
		<h4><?php echo $integrante->nome;?></h4>
			<hr /><br />
			<?php echo $integrante->descricao;?>
			
		
			
		</div>


	<?php endforeach; ?>
		</div>
	</div>
</section>

