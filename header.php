<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<title><?php wp_title(); ?></title>

        <?php wp_head(); ?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;700&display=swap" rel="stylesheet">

		<?php the_field('head_code', 'option'); ?>

		<?php if(!is_user_logged_in()){ ?>
			<?php the_field('head_code_nologgedin', 'option'); ?>
		<?php } ?>
	</head>

	<body <?php body_class(); ?>>
		<?php the_field('body_code', 'option'); ?>
		
		<div class="animsition">
			
			<header id="header">
				<div id="header-main">
					<div class="row align-justify align-middle">

						<div id="logo" class="column shrink">
							<a href="<?php echo bloginfo( 'url' ); ?>">
								<img src="<?php echo assets_path('images/logo.svg'); ?>" width="276" height="24" alt="<?php bloginfo('sitename'); ?> logo brand" class="logo">
							</a>
						</div>

						<div class="column shrink">
							<div class="mobile-menu-hamb menuToggle">
								<div class="mobile-menu-hamb__line mobile-menu-hamb__line--1"></div>
								<div class="mobile-menu-hamb__line mobile-menu-hamb__line--2"></div>
								<div class="mobile-menu-hamb__line mobile-menu-hamb__line--3"></div>
							</div>
						</div>

					</div>
				</div>
			</header>

		<main id="main">