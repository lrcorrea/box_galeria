

<div id="content">
			<div id="content-header">
				<h1><?php echo $nomecontroller; ?></h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/listar" title="Listar Noticias" class="tip-bottom"> <?php echo $nomecontroller;?> </a>
				<a href="#" class="current">Alterar <?php echo $nomecontroller;?></a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/gravar_alteracao" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									
									
									<div class="control-group">
										<label class="control-label">Cidade</label>
										<div class="controls">
											<input type="text" name="cidade" id="cidade" value="<?php echo $dados[0]->cidade; ?>" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Data Inicio</label>
										<div class="controls">
											<input class="datepicker" name="data_inicio" id="data_inicio" type="text" value="<?php echo data_us_to_br($dados[0]->data_inicio); ?>" data-date-format="dd/mm/yyyy" data-date="<?php echo date("d/m/Y");?>">
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Data Fim</label>
										<div class="controls">
											<input class="datepicker" name="data_fim" id="data_fim" type="text" value="<?php echo data_us_to_br($dados[0]->data_fim); ?>" data-date-format="dd/mm/yyyy" data-date="<?php echo date("d/m/Y");?>">
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Local</label>
										<div class="controls">
											<input type="text" name="local" id="local" value="<?php echo $dados[0]->local; ?>" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Periodo de visitação</label>
										<div class="controls">
											<input type="text" name="per_visi" id="per_visi" value="<?php echo $dados[0]->per_visi; ?>" />
											
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Atividades</label>
										<div class="controls">
											<input type="text" name="atividades" id="atividades" value="<?php echo $dados[0]->atividades; ?>" />
											
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Visitas guiadas</label>
										<div class="controls">
											<input type="text" name="visi_gui" id="visi_gui" value="<?php echo $dados[0]->visi_gui; ?>" />
											
										</div>
									</div>
									
									<div class="control-group" style="display:none;">
										<label class="control-label">Imagens</label>
										<div class="controls">
											<input type="file" name="userfile[]" id="imagem" size="20" class="multi" />
										</div>
									</div>
									
									<div class="form-actions">
									<input type="hidden" name="id" value="<?php echo $dados[0]->id; ?>" />
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								
								
						
		    
					</div>
				</div>	
			



