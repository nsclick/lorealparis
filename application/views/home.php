<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
  
  <!-- Metas -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name = "viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
  
  <!-- Stylesheets -->
  <?php
    $css = array (
      'href'  => 'assets/css/style.css',
      'rel'   => 'stylesheet',
      'type'  => 'text/css'
    );
    echo link_tag ($css);
  ?>
  
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
</head>
<body class="dark_bg">
  
  <div class="container">
    
    <div class="row">
      <div class="col12 centered">
        <?php 
          $img1 = array (
            'src' => base_url () . 'assets/images/hecho_por_mi.png'
          );
          echo img ($img1);
        ?>
      </div>
    </div>
    
    <div class="row">
      <div class="col12 align_center">
        <p class="home_text1">¿CU&Aacute;L ES EL TUYO?</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col4">
        <a href="<?php echo base_url () . 'frontend/formulario/contrastado'; ?>">
          <?php echo img (base_url () . 'assets/images/estilo_contrastado.png'); ?>
        </a>
      </div>
      
      <div class="col4">
        <a href="<?php echo base_url () . 'frontend/formulario/sutil'; ?>">
          <?php echo img (base_url () . 'assets/images/estilo_sutil.png'); ?>
        </a>
      </div>
      
      <div class="col4">
        <a href="<?php echo base_url () . 'frontend/formulario/degradado'; ?>">
          <?php echo img (base_url () . 'assets/images/estilo_degradado.png'); ?>
        </a>
      </div>
    </div>
    
    <div class="row">
      <div class="col12 home_texts2 align_center">
        <p>VOTA POR TU EFECTO CALIFORNIANO</p>
        <p>Y ESTAR&Aacute;S PARTICIPANDO POR INCRE&Iacute;BLES PRODUCTOS</p>
        <p>L´OR&Eacute;AL PARIS PARA ESTE VERANO</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col12">
        <?php echo img (base_url () . 'assets/images/descubre_lo_facil_que_es.png'); ?>
      </div>
    </div>
    
    <div class="row">
      <div class="col12 align_center">
        <a class="facebook_btn" href="https://www.facebook.com/LOrealParisChile" target="_blank">
          <?php echo img (base_url () . 'assets/images/facebook.png'); ?>
        </a>
      </div>
    </div>
    
  </div>
  
  <!-- Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43237791-1', 'auto');
  ga('send', 'pageview');

  </script>
  <!-- End Google Analytics -->
  
</body>
</html> 