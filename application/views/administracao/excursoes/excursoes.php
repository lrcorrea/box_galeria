

<div id="content">
			<div id="content-header">
				<h1><?php echo $nomecontroller; ?></h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/listar" title="Listar Noticias" class="tip-bottom"> <?php echo $nomecontroller;?> </a>
				<a href="#" class="current">Cadastrar <?php echo $nomecontroller;?></a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/cadastrar" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Tipo de Excursão</label>
										<div class="controls">
											<select name="tipo" id="tipó">
												<option value="show">Show</option>
												<option value="teatrais">Teatrais</option>
												<option value="diversos">Diversos</option>
											</select>	
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Nome</label>
										<div class="controls">
											<input type="text" name="nome" id="nome" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Descricao</label>
										<div class="controls">
											<textarea name="descricao" id="descricao" cols="70" rows="20" /></textarea>
										<script type="text/javascript">
												CKEDITOR.replace( 'descricao' );
											</script>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Data</label>
										<div class="controls">
											<input class="datepicker" name="data" id="data" type="text" value="<?php echo date("d/m/Y");?>" data-date-format="dd/mm/yyyy" data-date="<?php echo date("d/m/Y");?>">
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Local</label>
										<div class="controls">
											<input type="text" name="local" id="local" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Horario</label>
										<div class="controls">
											<input type="text" name="horario" id="horario" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Classificação</label>
										<div class="controls">
											<input type="text" name="classificacao" id="horario" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Saida de</label>
										<div class="controls">
											<input type="text" name="saida_de" id="saida_de" />
											
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Roteiro</label>
										<div class="controls">
											<textarea name="roteiro" id="roteiro" cols="70" rows="20" /></textarea>
											<script type="text/javascript">
												CKEDITOR.replace( 'roteiro' );
											</script>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Incluso</label>
										<div class="controls">
											<textarea name="incluso" id="incluso" cols="70" rows="20" /></textarea>
											<script type="text/javascript">
												CKEDITOR.replace( 'incluso' );
											</script>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Investimento</label>
										<div class="controls">
											<textarea name="investimento" id="investimento" cols="70" rows="20" /></textarea>
											<script type="text/javascript">
												CKEDITOR.replace( 'investimento' );
											</script>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Imagens</label>
										<div class="controls">
											<input type="file" name="userfile[]" id="imagem" size="20" class="multi" />
										</div>
									</div>
									
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								
								
						
		    
					</div>
				</div>	
			




