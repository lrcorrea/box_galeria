<!DOCTYPE html>
<html>
  <head>
    
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>style/images/favicon.ico' />
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
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=211617532293360";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
            <li><a href="<?php echo base_url();?>artistas">ARTISTAS SELECIONADOS</a></li>
            <li><a href="<?php echo base_url();?>programacao">PROGRAMAÇÃO</a></li>
            <li><a href="<?php echo base_url();?>bairro">BAIRROS</a></li>
          <!--  <li><a href="">BAIRRO</a></li>-->
          </ul>
        </li>
        <li><a href="<?php echo base_url();?>noticias">Notícias</a></li>
        <li><a href="<?php echo base_url();?>equipe">EQUIPE</a></li>
        <li><a href="<?php echo base_url();?>contato">CONTATO</a></li>
      </ul>
      <div class="fb_topo">
        <a href="https://www.facebook.com/pages/Box-Galeria/645103128956459?__mref=message_bubble" target="_blank"><img src="<?php echo base_url();?>style/images/facebook_icon_menu.png"></a>
      </div>
    </div>
  </div>
</section>