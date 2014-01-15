<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Área Restringida</title>
  
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
        <?php echo img (base_url ('assets/images/logo.png')); ?>
      </div>
    </div>
    
    <div class="row">
      <div class="col12 align_center">
        <p class="data_text1">INGRESO A ÁREA RESTRINGIDA</p>
        <?php if($error): ?>
        	<p class="data_text1"><?php echo $error ?></p>
        <?php endif; ?>
      </div>
    </div>
    
    <div class="row">
      <div class="col12">
      <?php
        echo form_open('backend', array (
          'class' => 'data_form',
          'id'    => 'data_form'
        ));
      ?>
        
        <div class="input_group">
          <label class="col3" for="name">Usuario:</label>
          <?php
            echo form_input(array (
              'name'        => 'usuario',
              'id'          => 'usuario',
              'placeholder' => 'Nombre de usuario',
              'class'       => 'col9 validate[required]',
              'autocomplete'=> 'off'
            ));
          ?>
        </div>
        
        <div class="input_group">
          <label class="col3" for="">Clave:</label>
          <?php
            echo form_input(array (
              'name'        => 'clave',
              'type'        => 'password',
              'id'          => 'clave',
              'placeholder' => 'Clave',
              'class'       => 'col9 validate[required]',
              'autocomplete'=> 'off'
            ));
          ?>
        </div>

        <div class="input_group input_submit">
          <?php echo form_submit('ingresar', 'Ingresar');?>
        </div>
       
        <?php echo form_hidden('do_login', 'si');?> 
      </form>
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
  <script type="text/javascript" src="<?php echo base_url () . 'assets/js/formulario.js'; ?>"></script>
</body>
</html> 