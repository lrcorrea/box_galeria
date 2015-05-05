<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/sobre.css"/>
<?php
setlocale ( LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese' );
date_default_timezone_set ( 'America/Sao_Paulo' ); 
?>

<script type="text/javascript">

$(document).ready(function(){
	$(".month").click(function(){


		if($(this).find(".dentro_month").is(":visible")){
			$(this).removeClass("month2");
			$(this).addClass("month");
		}else{
			$(this).removeClass("month");
			$(this).addClass("month2");
		}
		
		
		$(this).find(".dentro_month").slideToggle();
	});

});

</script>

<section class="conteudo">
	<div class="bg_sobre">
			<h1>PROGRAMAÇÃO</h1>
			<h3>CONFIRA A PROGRAMAÇÃO DO PROJETO BOX GALERIA</h3>
			<div class="centro">
		<?php foreach($meses as $mes): 
			$m = strftime('%m', strtotime($mes->data_inicio));
			$y = strftime('%Y', strtotime($mes->data_inicio));
			
			
		?>
			
			<div class="month">
				<?php echo strftime('%B de %Y', strtotime($mes->data_inicio)); ?>
				<?php 	 
					$this->db->where('MONTH(data_inicio)', $m);
				    $this->db->where('YEAR(data_inicio)', $y);
					$programacao = $this->db->get("programacao")->result(); ?>
				<div class="dentro_month">
					<?php foreach($programacao as $pro):  ?>
						<div class="programacao">
								<span>Cidade</span> <?php echo $pro->cidade;?> <br />
								<span>Data:</span> <?php echo data_us_to_br($pro->data_inicio);?>  a <?php echo data_us_to_br($pro->data_fim);?><br />
								<span>Local</span> <?php echo $pro->local;?> <br />
								<!--<span>Periodo de Visitação</span> <?php echo $pro->per_visi;?> <br />-->
								<span>Atividades</span> <?php echo $pro->atividades;?> <br />
								<!--<span>Visitas Guiadas</span> <?php echo $pro->visi_gui;?> <br />
								<span>Oficinas</span> <?php echo $pro->oficinas;?> <br />-->
						</div>
						
					<?php endforeach;?>
				</div>	
			</div>

		<?php endforeach;?>	
		
	</div>
	</div>
	
</section>