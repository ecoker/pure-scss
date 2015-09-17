<!DOCTYPE html>
<!--[if lte IE 8]> <html class="lt-ie9"> <![endif]-->
<!--[if lte IE 9]><html class="lt-ie9 lt-ie10"> <![endif]--> 
<!--[if gte IE 10]><!--> <html> <!--<![endif]--> 
<head>
<?php
$page = 'Forms';
include('includes/head.php');
?>
</head>
<body>
	
<div class="content">

<?php
include('includes/menu.php');
?>

<pre class="line-numbers"><code class="language-markup" title="inline form">
<form>
	<fieldset>
		<legend>A compact inline form</legend>
		<input type="email" placeholder="Email">
		<input type="password" placeholder="Password">
		<label for="remember">
			<input id="remember" type="checkbox"> Remember me
		</label>
		<button type="submit" class="primary">Sign in</button>
	</fieldset>
</form>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="buttons">
<a class="button" href="#">A Pure Button</a>
<button>A Pure Button</button>
<a class="button disabled" href="#">A Disabled Button</a>
<button class="disabled">A Disabled Button</button>
<button class="success">Success Button</button>
<button class="error">Error Button</button>
<button class="warning">Warning Button</button>
<button class="secondary">Secondary Button</button>
<button class="xsmall">Extra Small Button</button>
<button class="small">Small Button</button>
<button>Regular Button</button>
<button class="large">Large Button</button>
<button class="xlarge">Extra Large Button</button>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="stacked-form">
<form class="stacked">
  <fieldset>
		<legend>A Stacked Form</legend>

		<label for="email">Email</label>
		<input id="email" type="email" placeholder="Email">

		<label for="password">Password</label>
		<input id="password" type="password" placeholder="Password">

		<label for="state">State</label>
		<select id="state">
		  <option>AL</option>
		  <option>CA</option>
		  <option>IL</option>
		</select>

		<label for="remember" class="checkbox">
		  <input id="remember" type="checkbox"> Remember me
		</label>
		<button type="submit" class="button button-primary">Sign in</button>
  </fieldset>
</form>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="aligned form">
<form class="aligned">
	<fieldset>
		<div class="control-group">
			<label for="name">Username</label>
			<input id="name" type="text" placeholder="Username">
		</div>

		<div class="control-group">
			<label for="password">Password</label>
			<input id="password" type="password" placeholder="Password">
		</div>

		<div class="control-group">
			<label for="email">Email Address</label>
			<input id="email" type="email" placeholder="Email Address">
		</div>

		<div class="control-group">
			<label for="foo">Supercalifragilistic Label</label>
			<input id="foo" type="text" placeholder="Enter something here...">
		</div>

		<div class="controls">
			<label for="cb" class="checkbox">
				<input id="cb" type="checkbox"> I've read the terms and conditions
			</label>

			<button type="submit" class="button button-primary">Submit</button>
		</div>
	</fieldset>
</form>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="multi-column form">
<form class="stacked">
	<fieldset>
		<legend>Legend</legend>

		<div class="g">
			<div class="u-1 u-md-1-3">
				<label for="first-name">First Name</label>
				<input id="first-name" class="u-23-24" type="text">
			</div>

			<div class="u-1 u-md-1-3">
				<label for="last-name">Last Name</label>
				<input id="last-name" class="u-23-24" type="text">
			</div>

			<div class="u-1 u-md-1-3">
				<label for="email">E-Mail</label>
				<input id="email" class="u-23-24" type="email" required>
			</div>

			<div class="u-1 u-md-1-3">
				<label for="city">City</label>
				<input id="city" class="u-23-24" type="text">
			</div>

			<div class="u-1 u-md-1-3">
				<label for="state">State</label>
				<select id="state" class="u-1-2">
					<option>AL</option>
					<option>CA</option>
					<option>IL</option>
				</select>
			</div>
		</div>

		<label for="terms" class="checkbox">
			<input id="terms" type="checkbox"> I've read the terms and conditions
		</label>

		<button type="submit" class="button button-primary">Submit</button>
	</fieldset>
</form>
</code></pre>


<pre class="line-numbers"><code class="language-markup" title="grouped inputs">
<form>
	<fieldset class="group">
		<input type="text" class="u-1-2" placeholder="Username">
		<input type="text" class="u-1-2" placeholder="Password">
		<input type="email" class="u-1-2" placeholder="Email">
	</fieldset>

	<fieldset class="group">
		<input type="text" class="u-1-2" placeholder="A title">
		<textarea class="u-1-2" placeholder="Textareas work too"></textarea>
	</fieldset>

	<button type="submit" class="button u-1-2 button-primary">Sign in</button>
</form>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="input sizing">
<form>
	<input class="u-1" type="text" placeholder=".u-1"><br>
	<input class="u-2-3" type="text" placeholder=".u-2-3"><br>
	<input class="u-1-2" type="text" placeholder=".u-1-2"><br>
	<input class="u-1-3" type="text" placeholder=".u-1-3"><br>
	<input class="u-1-4" type="text" placeholder=".u-1-4"><br>
</form>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="input grid">
<form class="g">
	<div class="u-1-4">
		<input class="u-1" type="text" placeholder=".u-1-4">
	</div>
	<div class="u-3-4">
		<input class="u-1" type="text" placeholder=".u-3-4">
	</div>

	<div class="u-1-2">
		<input class="u-1" type="text" placeholder=".u-1-2">
	</div>
	<div class="u-1-2">
		<input class="u-1" type="text" placeholder=".u-1-2">
	</div>

	<div class="u-1-8">
		<input class="u-1" type="text" placeholder=".u-1-8">
	</div>
	<div class="u-1-8">
		<input class="u-1" type="text" placeholder=".u-1-8">
	</div>
	<div class="u-1-4">
		<input class="u-1" type="text" placeholder=".u-1-4">
	</div>
	<div class="u-1-2">
		<input class="u-1" type="text" placeholder=".u-1-2">
	</div>

	<div class="u-1-5">
		<input class="u-1" type="text" placeholder=".u-1-5">
	</div>
	<div class="u-2-5">
		<input class="u-1" type="text" placeholder=".u-2-5">
	</div>
	<div class="u-2-5">
		<input class="u-1" type="text" placeholder=".u-2-5">
	</div>

	<div class="u-1">
		<input class="u-1" type="text" placeholder=".u-1">
	</div>
</form>
</code></pre>

<pre class="line-numbers"><code class="language-markup" title="required inputs">
<form>
	<input type="email" placeholder="Requires an email" required>
</form>	
</code></pre>


<pre class="line-numbers"><code class="language-markup" title="disabled inputs">
<form>
	<input type="text" placeholder="Disabled input here..." disabled>
</form>
</code></pre>


<pre class="line-numbers"><code class="language-markup" title="read only inputs">
<form>
	<input type="text" value="Readonly input here..." readonly>
</form>
</code></pre>


<pre class="line-numbers"><code class="language-markup" title="rounded inputs">
<form>
	<input type="text" class="rounded">
	<button type="submit" class="button">Search</button>
</form>
</code></pre>


<pre class="line-numbers"><code class="language-markup" title="checkboxes and radios">
<form>
	<label for="option-one" class="checkbox">
		<input id="option-one" type="checkbox" value="">
		Here's option one.
	</label>

	<label for="option-two" class="radio">
		<input id="option-two" type="radio" name="optionsRadios" value="option1" checked>
		Here's a radio button. You can choose this one..
	</label>

	<label for="option-three" class="radio">
		<input id="option-three" type="radio" name="optionsRadios" value="option2">
		..Or this one!
	</label>
</form>
</code></pre>


</div>
<script src="scripts/prism.js" type="text/javascript"></script>
</body>
</html>