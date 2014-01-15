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
</head>
<body class="dark_bg">
  <div class="congrats_top">
    <?php echo img ('assets/images/top.jpg'); ?>
  </div>
  
  <div class="container">
    
    <div class="row align_center">
    	<div class="col10 congrats_1">
        <?php echo img (base_url ('assets/images/top_text.png')); ?>
      </div>
    </div>
    
    <div class="row align_center">
    	<div class="col10 congrats_2">
        <?php echo img (base_url ('assets/images/logo.png')); ?>
      </div>
    </div>
    
    <div class="row">
    	<div class="col12 align_center">
        <a class="back_btn" href="<?php echo base_url () . 'frontend'; ?>">
          <?php echo img (base_url ('assets/images/back.png')); ?>
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