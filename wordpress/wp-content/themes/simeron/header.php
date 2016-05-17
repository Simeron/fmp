<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php wp_title('&laguo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />

	<!-- have midded out a line of code i believe it was for the comments section below is the comment section which I spoke about taking it out, but for the purpose of this template I want to keep it all the same just in case-->

	<?php if ( is_singular () ) wp_enqueue_script ( 'comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
	<div id="container">
</body>

<!-- I have got all of tis code from this site, I have also not tried to chnage any of the code and I have missed out the comments line -->