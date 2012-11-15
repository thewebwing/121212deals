<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
<title>Infinity Tracker</title>
<link rel="stylesheet" href="<?=base_url('stylesheets/foundation.min.css');?>">
<link rel="stylesheet" href="<?=base_url('stylesheets/app.css');?>">
<script src="<?=base_url('javascripts/modernizr.foundation.js');?>"></script>
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

<div class="row" id="container">
	<?=$yield;?>
</div>

<!-- Included JS Files (Compressed) -->
<script src="<?=base_url('javascripts/jquery.js');?>"></script>
<script src="<?=base_url('javascripts/foundation.min.js');?>"></script>
<script src="<?=base_url('javascripts/app.js');?>"></script>
</body>
</html>
