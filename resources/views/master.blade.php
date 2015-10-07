<html>
<head>
	@section('head')
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" media="screen" type="text/css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	@show
</head>
<body>
<div class="navbar-inverse">
    <a href="/">Home</a> |
    <a href="/auth/login">Login</a> |
    <a href="/auth/register">Register</a> |
    <a href="/users/members">Members</a> |
	<a href="/users/roles">Roles</a> |
	<a href="/auth/logout">Logout</a> |
</div>
<h2>Welcome to CMWN and Exciting Site!</h2>
<hr />
<ul>
	<li><a href="/users/members">Users</a></li>
	<li><a href="/users/roles">Users Roles</a></li>
	<li><a href="/guardians">Guardian and Child</a></li>
	<li><a href="/districts">Districts</a></li>
	<li><a href="/organizations">Organizations</a></li>
	<li><a href="/groups">Groups</a></li>
</ul>
<div class="container">
	@yield('content')
</div>
@section('footer_scripts')
	<script src="http://code.jquery.com/jquery.js"></script>
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@show
</body>
</html>