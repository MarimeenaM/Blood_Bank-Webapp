<html>
<head>
<title>donor login</title>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.css">
<link rel="stylesheet" type="text/css" href="bootstrap/style.css">
</head>
<body>
<div class="row">
	<div class="col-xs-12">
	<div id="mainmenu">
		<ul id="yw1">
<li><a href="home.php">Home</a></li>
<li><a href="bloodfinder.php">Find Blood</a></li>
<li ><a href="find.php">Find Donor</a></li>
<li ><a href="register1.php">Register</a></li>
<li ><a href="request.php">Request for Blood</a></li>
<li><a href="requestdetail.php">Blood Request's</a></li>
<li><a href="availdon.php">Available Donor</a></li>
<li><a href="availblood.php">Available Blood</a></li>
<li class="active"><a href="tq.html">Login</a></li>
<li><a href="donateblood.php">Donated Blood</a></li>
</ul>	</div>
	</div>
</div>

<div class='row'>
	<div class='col-xs-12 col-sm-9'>
		<div class='inner-section'>
					
		
			
<h2>Donor Login</h2>


<div align='center'>
<div class='well login-sec'>
<div class="form">
<form id="login-form" action="donlogin.php" method="post">

	<div class="row" align='left'>
		<label class="required">Username *</span></label>		
		<input class="form-control" name="email" type="email" />	</div>

	<div class="row" align='left'>
		<label for="LoginForm_password" class="required">Password *</label>		
		<input class="form-control" name="password" type="password" />
	</div>
	<div class="row buttons">
		<input class="btn btn-primary btn-md" type="submit" name="login" value="login" />	</div>

</form>
</div>
</div>
		</div>
	</div>
	</body>
	</html>