<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage betravel
 * @since betravel 1.0
 */

 ?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Dolce Vita</title>
		<link rel='stylesheet'   href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all' />
		
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
				<h1>Dolce Vita</h1>
				<p>Only best destinations!</p>
				<ul class="cart">
					<li><p>Shopping Cart</p></li>
					<li><p><span>NOW IN YOUR CART</span> 0 ITEMS</p></li>
				</ul>
			</div><!--end header-->
			<div id="content">
				<div class="sidebar">
					<h3>Categories</h3>
					<ul>
						<li><a href="#">Myrtle Beach</a></li>
						<li><a href="#">Florida</a></li>
						<li><a href="#">Hawaii</a></li>
						<li><a href="#">Cancun</a></li>
						<li><a href="#">Mazatlan</a></li>
						<li><a href="#">Caribbean</a></li>
						<li><a href="#">Cabo San Lucas-></a></li>
						<li><a href="#">Multi-Locations</a></li>
						<li><a href="#">Western USA</a></li>
						<li><a href="#">California</a></li>
						<li><a href="#">Canada</a></li>
						<li><a href="#">International</a></li>
						<li><a href="#">Romance</a></li>
						<li><a href="#">Golf</a></li>
						<li><a href="#">Beaches</a></li>
					</ul>
					<div class="banner">
						<p class="go">go!</p>
						<p class="beach">Beach<br/> <span>travel</span></p>
						<p class="from">from</p>
						<p class="cost">$355</p>
					</div><!--end banner-->
				</div><!--end sidebar-->
				<div class="conteiner">
					<ul>
						<li>
							<h2>SAN JUAN</h2>
							<img src="images/san-juan.png" alt=""/>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mattis. Nulla sagittis tincidunt nibh. Ut non dui vitae enim tempor cursus. Nunc iaculis rutrum elit. Cura...</p>
							<p class="costt">$550.00</p>
							<a  href="#">Product Details</a>
						</li>
						<li>
							<h2>LONG BEACH</h2>
							<img src="images/long-beach.png" alt=""/>
							<p>Praesent risus orci, pretium semper, sagittis sit amet, scelerisque ac, velit. Quisque viverra tortor non lacus. Pellentesque quis ligula. In laoreet arcu ut velit. Sed m...</p>
							<p class="costt">$160.00</p>
							<a  href="#">Product Details</a>
						</li>
						<li>
							<h2>CABO SAN LUCAS</h2>
							<img src="images/cabo-san-lucas.png" alt=""/>
							<p>Quisque feugiat. Vestibulum eu lacus in orci bibendum vehicula. Mauris in arcu quis erat ultrices venenatis. Suspendisse lacus urna, sodales ac, hendrerit vel, laoreet eg...</p>
							<p class="costt">$241.00</p>
							<a  href="#">Product Details</a>
						</li>
						<li>
							<h2>MIAMI</h2>
							<img src="images/miami.png" alt=""/>
							<p>Duis tortor quam, lobortis eget, pharetra commodo, euismod sed, tellus. Praesent viverra cursus est. Praesent eu quam ut velit adipiscing interdum. Praesent dictum, metus...</p>
							<p class="costt">$651.00</p>
							<a  href="#">Product Details</a>
						</li>
						<li>
							<h2>HONOLULU</h2>
							<img src="images/homolulu.png" alt=""/>
							<p>Duis vel lacus ut ante lobortis tincidunt. Ut scelerisque imperdiet elit. Quisque facilisis feugiat est. Duis eget nulla. Aenean nisl lacus, tempus id, convallis in, vulp...</p>
							<p class="costt">$211.00</p>
							<a  href="#">Product Details</a>
						</li>
						<li>
							<h2>CANCUN</h2>
							<img src="images/cancun.png" alt=""/>
							<p>Morbi facilisis sodales mauris. Quisque elementum nulla at ante. Vestibulum adipiscing sodales lorem. Praesent ultricies. Sed vehicula, ante nec vestibulum condimentum, e...</p>
							<p class="costt">$83.00</p>
							<a  href="#">Product Details</a>
						</li>
					</ul>
				</div><!--end conteiner-->
			</div><!--end content-->
			<div id="footer">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">New Products </a></li>
					<li><a href="#">Specials</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">All Reviews </a></li>
					<li><a href="#">Contact Us </a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
				<p>Copyright &copy; 2011 Dolce Vita.  Designed By : TemplatesPerfect</p>
				<span>eye</span>
			</div><!--end footer-->
		</div><!--end wrap-->
	</body>
</html>
