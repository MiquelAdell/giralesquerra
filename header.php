<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Independent Publisher
 * @since   Independent Publisher 1.0
 */
?><!DOCTYPE html>
<html <?php independent_publisher_html_tag_schema(); ?> <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
<link href='https://fonts.googleapis.com/css?family=Cherry+Swash:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php // Displays full-width featured image on Single Posts if applicable ?>
<?php independent_publisher_full_width_featured_image(); ?>

<?php // Makes the Header Image a small icon floating in the top left corner when Multi Author Mode is enabled ?>
<?php if ( independent_publisher_is_multi_author_mode() && is_single() ) : ?>
	<div class="site-master-logo">
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img class="no-grav" src="<?php echo esc_url( get_header_image() ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
			</a>
		<?php endif; ?>
	</div>
<?php endif; ?>

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<nav role="navigation" class="site-navigation main-navigation">
			<ul id="menu-pagines" class="menu">
				<li id="menu-item-1" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1">
					<a href="http://giralesquerra.cat/" title="Gir a l'esquerra" rel="home">Gir a l'esquerra</a>
				</li>
				<li id="menu-item-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2">
					<a href="http://giralesquerra.cat/adereix-the-al-manifest/">Adereix-t’he al manifest</a>
				</li>
				<li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3">
					<a href="http://giralesquerra.cat/llistat-dadhesions/">Llistat d’adhesions</a>
				</li>
			</ul>
		</nav><!-- .site-navigation .main-navigation -->
	</header>
	<!-- #masthead .site-header -->

	<div id="main" class="site-main">
