<!DOCTYPE html>
<html lang="en">
<head>
  <title>laravel crud</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
      <li><a href="#">Page 4</a></li>
      <li><a href="#">Page 5</a></li>
      <li><a href="#">Page 6</a></li>
      <li><a href="#">Page 7</a></li>
      <li><a href="#">Page 8</a></li>
      <li><a href="#">Page 9</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		@yield('content')
		
	</div>
  
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="{{ asset ('js/bootstrap.min.js')}}"></script>
</body>
</body>
</html>
