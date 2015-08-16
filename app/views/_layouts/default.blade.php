
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">

	{{ HTML::style('css/style.css') }}


</head>
<body>
	


	<header>

		<div class="container">
			<h1> Simple Blog</h1>
			<p>by zahan safallwa</p>
		</div>	

	</header>

	<main class="container">
		@yield('content')

	</main>
	
	<footer>
		<div class="container">
			&copy {{ date('Y') }} zahan
			
		</div>
	</footer>

</body>
</html>