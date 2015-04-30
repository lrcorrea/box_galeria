<!DOCTYPE html>
<html>
  <head>
    
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/fontes.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/shadowbox.css" />
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/easySlider1.7.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.MultiFile.min.js" type="text/javascript" language="javascript"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>js/shadowbox.js"></script>

    <meta charset="UTF-8">
     <title><?php echo $title;?></title>
    <?php echo $meta;?>
    <script type="text/javascript">
    Shadowbox.init();
   
    </script>
</head>
<body>
<section class="topo">
  <div class="centro">
    <img class="logo" src="<?php echo base_url();?>style/images/logo.png" alt="Box Galeria">
    <div class="menu">
      <ul class="menu_principal">
        <li><a href="<?php echo base_url();?>">HOME</a></li>
        <li><a href="<?php echo base_url();?>sobre">SOBRE</a></li>
        <li class="abresub">
          <a href="" id="visite">VISITE</a>
          <ul class="submenu">
           <!-- <li><a href="">ARTISTAS SELECIONADOS</a></li>-->
            <li><a href="<?php echo base_url();?>programacao">PROGRAMAÇÃO</a></li>
          <!--  <li><a href="">BAIRRO</a></li>-->
          </ul>
        </li>
        <li><a href="<?php echo base_url();?>equipe">EQUIPE</a></li>
        <li><a href="<?php echo base_url();?>contato">CONTATO</a></li>
      </ul>
      <div class="fb_topo">
        <a href=""><img src="<?php echo base_url();?>style/images/facebook_icon_menu.png"></a>
      </div>
    </div>
  </div>
</section>