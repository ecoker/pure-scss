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

<pre class="line-numbers"><code class="language-markup" title="Basic Table">
<table>
    <thead>
        <tr><th>#</th><th>Make</th><th>Model</th><th>Year</th></tr>
    </thead>

    <tbody>
        <tr><td>1</td><td>Honda</td><td>Accord</td><td>2009</td></tr>

        <tr><td>2</td><td>Toyota</td><td>Camry</td><td>2012</td></tr>

        <tr><td>3</td><td>Hyundai</td><td>Elantra</td><td>2010</td></tr>

        <tr><td>4</td><td>Ford</td><td>Focus</td><td>2008</td></tr>

        <tr><td>5</td><td>Nissan</td><td>Sentra</td><td>2011</td></tr>

        <tr><td>6</td><td>BMW</td><td>M3</td><td>2009</td></tr>

        <tr><td>7</td><td>Honda</td><td>Civic</td><td>2010</td></tr>

        <tr><td>8</td><td>Kia</td><td>Soul</td><td>2010</td></tr>
    </tbody>
</table>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Striped, Full-Width Table">
<table class="striped u-1">
    <thead>
        <tr><th>#</th><th>Make</th><th>Model</th><th>Year</th></tr>
    </thead>

    <tbody>
        <tr><td>1</td><td>Honda</td><td>Accord</td><td>2009</td></tr>

        <tr><td>2</td><td>Toyota</td><td>Camry</td><td>2012</td></tr>

        <tr><td>3</td><td>Hyundai</td><td>Elantra</td><td>2010</td></tr>

        <tr><td>4</td><td>Ford</td><td>Focus</td><td>2008</td></tr>

        <tr><td>5</td><td>Nissan</td><td>Sentra</td><td>2011</td></tr>

        <tr><td>6</td><td>BMW</td><td>M3</td><td>2009</td></tr>

        <tr><td>7</td><td>Honda</td><td>Civic</td><td>2010</td></tr>

        <tr><td>8</td><td>Kia</td><td>Soul</td><td>2010</td></tr>
    </tbody>
</table>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Bordered, Full-Width Table">
<table class="bordered u-1">
    <thead>
        <tr><th>#</th><th>Make</th><th>Model</th><th>Year</th></tr>
    </thead>

    <tbody>
        <tr><td>1</td><td>Honda</td><td>Accord</td><td>2009</td></tr>

        <tr><td>2</td><td>Toyota</td><td>Camry</td><td>2012</td></tr>

        <tr><td>3</td><td>Hyundai</td><td>Elantra</td><td>2010</td></tr>

        <tr><td>4</td><td>Ford</td><td>Focus</td><td>2008</td></tr>

        <tr><td>5</td><td>Nissan</td><td>Sentra</td><td>2011</td></tr>

        <tr><td>6</td><td>BMW</td><td>M3</td><td>2009</td></tr>

        <tr><td>7</td><td>Honda</td><td>Civic</td><td>2010</td></tr>

        <tr><td>8</td><td>Kia</td><td>Soul</td><td>2010</td></tr>
    </tbody>
</table>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="Horizontal Lines, Full-Width Table">
<table class="horizontal u-1">
    <thead>
        <tr><th>#</th><th>Make</th><th>Model</th><th>Year</th></tr>
    </thead>

    <tbody>
        <tr><td>1</td><td>Honda</td><td>Accord</td><td>2009</td></tr>

        <tr><td>2</td><td>Toyota</td><td>Camry</td><td>2012</td></tr>

        <tr><td>3</td><td>Hyundai</td><td>Elantra</td><td>2010</td></tr>

        <tr><td>4</td><td>Ford</td><td>Focus</td><td>2008</td></tr>

        <tr><td>5</td><td>Nissan</td><td>Sentra</td><td>2011</td></tr>

        <tr><td>6</td><td>BMW</td><td>M3</td><td>2009</td></tr>

        <tr><td>7</td><td>Honda</td><td>Civic</td><td>2010</td></tr>

        <tr><td>8</td><td>Kia</td><td>Soul</td><td>2010</td></tr>
    </tbody>
</table>
</code></pre>

</div>
<script src="scripts/prism.js" type="text/javascript"></script>
</body>
</html>