<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	{{HTML::style('css/admin.css')}}
	@yield('extralink')
</head>
<body>
<header>
<div class="container">
	<h1 align="center">Admin Panel</h1>
	
</div>
	
</header>
<main class="container">

@yield('content')
</main>

<footer>
	<div class="container">
		{{ link_to_route('admin.logout','Logout')}}
	</div>
</footer>

</body>
</html>