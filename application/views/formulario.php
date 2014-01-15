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
    
    $cssValidatior = array (
      'href'  => 'assets/css/validationEngine.jquery.css',
      'rel'   => 'stylesheet',
      'type'  => 'text/css'
    );
    echo link_tag ($cssValidatior);
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
        <p class="data_text1">INGRESA TUS DATOS Y PARTICIPA</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col12">
      <?php
        echo form_open('frontend/save_form', array (
          'class' => 'data_form',
          'id'    => 'data_form'
        ));
      ?>
        
        <div class="input_group">
          <label class="col3" for="name">Nombre:</label>
          <?php
            echo form_input(array (
              'name'        => 'nombre',
              'id'          => 'name',
              'placeholder' => 'Nombre',
              'class'       => 'col9 validate[required]',
              'autocomplete'=> 'off'
            ));
          ?>
        </div>
        
        <div class="input_group">
          <label class="col3" for="">Mail:</label>
          <?php
            echo form_input(array (
              'name'        => 'email',
              'type'        => 'email',
              'id'          => 'name',
              'placeholder' => 'Mail',
              'class'       => 'col9 validate[required,custom[email]]',
              'autocomplete'=> 'off'
            ));
          ?>
        </div>
        
        <div class="input_group">
          <label class="col3" for="phone">TEL&Eacute;FONO:</label>
          <?php
            echo form_input(array (
              'name'        => 'telefono',
              'type'        => 'tel',
              'id'          => 'phone',
              'placeholder' => 'Tel&eacute;fono',
              'class'       => 'col9 validate[required]',
              'autocomplete'=> 'off'
            ));
          ?>
        </div>
        
        <div class="input_group">
          <label class="col3" for="age">EDAD:</label>
          <?php
            echo form_input(array (
              'name'        => 'edad',
              'type'        => 'number',
              'id'          => 'age',
              'placeholder' => 'Edad',
              'class'       => 'col9 validate[required]',
              'autocomplete'=> 'off'
            ));
          ?>
        </div>
        
        <div class="input_group">
          <label class="col3" for="">OCUPACI&Oacute;N:</label>
          <?php echo form_dropdown('ocupacion', $ocupaciones); ?>
        </div>
        
        <div class="input_group input_submit">
          <?php echo form_submit('enviar', 'Enviar');?>
        </div>
        
        <?php echo form_hidden('efecto', $efecto);?>
      </form>
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
  
  <div class="form_footer">
    <?php echo img ('assets/images/footer.jpg'); ?>
  </div>

  <!-- Scripts -->
  <script type="text/javascript" src="<?php echo base_url () . 'assets/js/jquery.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo base_url () . 'assets/js/jquery.validationEngine-es.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo base_url () . 'assets/js/jquery.validationEngine.js'; ?>"></script>
  <script type="text/javascript">
    (function (window, undefined) {
      window.ef = '<?php echo $efecto; ?>';
    })(window);
  </script>
  <script type="text/javascript" src="<?php echo base_url () . 'assets/js/formulario.js'; ?>"></script>
  
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