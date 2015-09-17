<!DOCTYPE html>
<!--[if lte IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if lte IE 9]><html class="lt-ie9 lt-ie10"> <![endif]--> 
<!--[if gte IE 10]><!--> <html> <!--<![endif]--> 
<head>
<?php
include('includes/head.php');
?>
</head>
<body>
	
<div class="content">
<?php
include('includes/menu.php');
?>

<pre class="line-numbers"><code class="language-markup" title="vertical menu">
<ul class="menu list">
  <li class="item"><a href="#" class="link">Flickr</a></li>
  <li class="item"><a href="#" class="link">Messenger</a></li>
  <li class="item"><a href="#" class="link">Sports</a></li>
  <li class="item"><a href="#" class="link">Finance</a></li>
  <li class="heading">More Sites</li>
  <li class="item"><a href="#" class="link">Games</a></li>
  <li class="item"><a href="#" class="link">News</a></li>
  <li class="item"><a href="#" class="link">OMG!</a></li>
</ul>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="horizontal menu">
<div class="menu horizontal">
	<a href="#" class="heading link">BRAND</a>
	<ul class="list">
		<li class="item"><a href="#" class="link">News</a></li>
		<li class="item"><a href="#" class="link">Sports</a></li>
		<li class="item"><a href="#" class="link">Finance</a></li>
	</ul>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="horizontal dropdown">
<div class="menu horizontal">
	<ul class="list">
		<li class="item selected"><a href="#" class="link">Home</a></li>
		<li class="item has-children allow-hover">
			<a href="#" id="menuLink1" class="link">Contact</a>
			<ul class="children">
				<li class="item"><a href="#" class="link">Email</a></li>
				<li class="item"><a href="#" class="link">Twitter</a></li>
				<li class="item"><a href="#" class="link">Tumblr Blog</a></li>
			</ul>
		</li>
	</ul>
</div>
</code></pre>


<pre class="line-numbers"><code class="language-markup" title="vertical with submenus">
<div class="menu custom-restricted-width">
	<ul class="list">
		<li class="item selected"><a href="#" class="link">Flickr</a></li>
		<li class="item"><a href="#" class="link">Messenger</a></li>
		<li class="item"><a href="#" class="link">Sports</a></li>
		<li class="item"><a href="#" class="link">Finance</a></li>
		<li class="item has-children">
			<a href="#" id="menuLink1" class="link">More</a>
			<ul class="children">
				<li class="item"><a href="#" class="link">Autos</a></li>
				<li class="item"><a href="#" class="link">Flickr</a></li>
				<li class="item has-children allow-hover">
					<a href="#" id="menuLink1" class="link">Even More</a>
					<ul class="children">
						<li class="item"><a href="#" class="link">Foo</a></li>
						<li class="item"><a href="#" class="link">Bar</a></li>
						<li class="item"><a href="#" class="link">Baz</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="scrollable horizontal">
<div class="menu horizontal scrollable">
	<a href="#" class="link heading">Yahoo</a>
	<ul class="list">
		<li class="item"><a href="#" class="link">Home</a></li>
		<li class="item"><a href="#" class="link">Flickr</a></li>
		<li class="item"><a href="#" class="link">Messenger</a></li>
		<li class="item"><a href="#" class="link">Sports</a></li>
		<li class="item"><a href="#" class="link">Finance</a></li>
		<li class="item"><a href="#" class="link">Autos</a></li>
		<li class="item"><a href="#" class="link">Beauty</a></li>
		<li class="item"><a href="#" class="link">Movies</a></li>
		<li class="item"><a href="#" class="link">Small Business</a></li>
		<li class="item"><a href="#" class="link">Cricket</a></li>
		<li class="item"><a href="#" class="link">Tech</a></li>
		<li class="item"><a href="#" class="link">World</a></li>
		<li class="item"><a href="#" class="link">News</a></li>
		<li class="item"><a href="#" class="link">Support</a></li>
	</ul>
</div>
</code></pre>

</div>
<script src="scripts/prism.js" type="text/javascript"></script>
</body>
</html>