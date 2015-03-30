<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage betravel
 * @since betravel 
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Dolce Vita</title>
		
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory");?>/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory");?>/fonts/BLKCHCRY/stylesheet.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory");?>/fonts/Ariston Extra Bold Italic/stylesheet.css" />
		<?php wp_head(); ?>
		
	</head>

	<body>
		<div id="wrap">
			<div id="header">
				<div class="top-nav">
					<span>flag</span>
						<select>
							<option value="form">Us Dollar</option>
							<option value="input">Ua Grivna</option>
							<option value="type">Eu Euro</option>
						</select>
					<label>CURRENCIES:</label>
					<ul>
						<li><a href="#">HOME</a></li>
						<li><a href="#">LOG OUT</a></li>
						<li><a href="#">MY ACCOUNT</a></li>
						<li><a href="#">SHOPPING CART</a></li>
						<li><a href="#">CHECKOUT</a></li>
					</ul>
				</div><!--end top-nav-->
				<ul class="search">
					<li><input type="text"  value="Search entire store..."  /></li>
					<li><a href="#">GO!</a></li>
				</ul>
				
				<ul class="nav">
					<li><a href="#">HOME</a></li>
					<li><a href="#">NEW PRODUCTS</a></li>
					<li><a href="#">SPECIALS</a></li>
					<li><a href="#">PRODUCTS ALL</a></li>
					<li><a href="#">REVIEWS</a></li>
					<li><a href="#">CONTACT US</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
				<h1><?php the_title(); ?></h1>
				<p><?php bloginfo('description'); ?></p>
				<ul class="cart">
					<li><p>Shopping Cart</p></li>
					<li><p><span>NOW IN YOUR CART</span> 0 ITEMS</p></li>
				</ul>
			</div><!--end header-->
	
	
	
	
	
	
	
	
	
	
	
	