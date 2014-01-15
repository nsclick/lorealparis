<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

  
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
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: white;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body class="dark_bg">
	<div class="container">
		<div class="row">
			<div class="col12 align_center">
				<a href='<?php echo site_url('backend/signout')?>' style="font-size:2rem;">Salir</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col12 align_center">
			<?php echo img (base_url ('assets/images/logo.png')); ?>
			</div>
		</div>

		<div class="row">
			<div class="col12 align_center">
				<?php echo $output; ?>
			</div>
		</div>

		<div class="row">
			<div class="col12 align_center">
				By <a href="http://nsclick.cl">nsclick.cl</a>
			</div>
		</div>
		
	</div>


</body>
</html>