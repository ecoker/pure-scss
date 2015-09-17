<!DOCTYPE html>
<!--[if lte IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if lte IE 9]><html class="lt-ie9 lt-ie10"> <![endif]--> 
<!--[if gte IE 10]><!--> <html> <!--<![endif]--> 
<head>
<?php
$page = 'Grid';
include('includes/head.php');
?>
</head>
<body>
	
<div class="content">
<?php
include('includes/menu.php');
?>

<pre class="line-numbers"><code class="language-markup" title="Basic Grid">
<div class="g">
  <div class="u-1-3"><p>Thirds</p></div>
  <div class="u-1-3"><p>Thirds</p></div>
  <div class="u-1-3"><p>Thirds</p></div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Grid with Padding">
<div class="g pad">
  <div class="u-1-3"><p>Thirds</p></div>
  <div class="u-1-3"><p>Thirds</p></div>
  <div class="u-1-3"><p>Thirds</p></div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Grid with Spacing">
<div class="g space">
  <div class="u-1-3"><p>Thirds</p></div>
  <div class="u-1-3"><p>Thirds</p></div>
  <div class="u-1-3"><p>Thirds</p></div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Grid with Spacing and Padding">
<div class="g space pad">
  <div class="u-2-5"><p>2/5</p></div>
  <div class="u-1-5"><p>1/5</p></div>
  <div class="u-2-5"><p>2/5</p></div>
  <div class="u-5-6"><p>5/6</p></div>
  <div class="u-1-6"><p>1/6</p></div>
  <div class="u-1-4"><p>1/4</p></div>
  <div class="u-1-4"><p>1/4</p></div>
  <div class="u-1-4"><p>1/4</p></div>
  <div class="u-1-4"><p>1/4</p></div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Nested Grid">
<div class="g space">
  <div class="u-1-2">
    <div class="g pad space">
      <div class="u-1-2 u-sm-1">Block</div>
      <div class="u-1-2 u-sm-1">Block</div>
    </div>    
  </div>
  <div class="u-1-2">
    <div class="g pad space">
      <div class="u-1-2">Block</div>
      <div class="u-1-2">Block</div>
    </div>    
  </div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Grid with Spacing and Padding and Centered Text">
<div class="g space pad center-text">
  <div class="u-1-3"><p>1/3</p></div>
  <div class="u-1-3"><p>1/3</p></div>
  <div class="u-1-3"><p>1/3</p></div>
  <div class="u-2-5"><p>2/5</p></div>
  <div class="u-1-5"><p>1/5</p></div>
  <div class="u-2-5"><p>2/5</p></div>
  <div class="u-1-6"><p>1/6</p></div>
  <div class="u-1-6"><p>1/6</p></div>
  <div class="u-1-6"><p>1/6</p></div>
  <div class="u-1-6"><p>1/6</p></div>
  <div class="u-1-6"><p>1/6</p></div>
  <div class="u-1-6"><p>1/6</p></div>
  <div class="u-1-4"><p>1/4</p></div>
  <div class="u-1-4"><p>1/4</p></div>
  <div class="u-1-4"><p>1/4</p></div>
  <div class="u-1-4"><p>1/4</p></div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Responsive Grid">
<div class="g pad center-text">
  <div class="u-1-3 u-sm-1 u-lg-1-6"><p>Block</p></div>
  <div class="u-1-3 u-sm-1-2 u-lg-1-6"><p>Block</p></div>
  <div class="u-1-3 u-sm-1-2 u-lg-1-6"><p>Block</p></div>
  <div class="u-1-3 u-sm-1-3 u-lg-1-6"><p>Block</p></div>
  <div class="u-1-3 u-sm-1-3 u-lg-1-6"><p>Block</p></div>
  <div class="u-1-3 u-sm-1-3 u-lg-1-6"><p>Block</p></div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Center Grid">
<div class="g center pad space">
  <div class="u-1-3"><p>Thirds</p></div>
  <div class="u-1-3"><p>Thirds</p></div>
</div>  
<div class="g center pad space">
  <div class="u-2-5"><p>2/5</p></div>
  <div class="u-2-5"><p>2/5</p></div>
</div>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="The Works">
<div class="g center pad center-text">
  <div class="u-1-5 u-sm-1 u-lg-1-5"><p>Block</p></div>
  <div class="u-2-5 u-sm-1 u-lg-1-2">
    <div class="g pad space">    
      <div class="r">
        <div class="u-1-3 u-sm-1">Block</div>
        <div class="u-1-3 u-sm-1">Block</div>
        <div class="u-1-3 u-sm-1">Block</div>
      </div>
    </div>
  </div>
  <div class="u-1-5 u-sm-1 u-lg-1-5"><p>Block</p></div>
</div>
</code></pre>

</div>
<script src="scripts/prism.js" type="text/javascript"></script>
</body>
</html>