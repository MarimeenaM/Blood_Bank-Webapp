
<html>
<head>
<title>find donor</title>
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.css">
<link rel="stylesheet" type="text/css" href="bootstrap/style.css">
</head>
<body>
<div class="row">
	<div class="col-md-12">
	<div id="mainmenu">
		<ul id="yw1">
<li><a href="home.php">Home</a></li>
<li><a href="bloodfinder.php">Find Blood</a></li>
<li ><a href="find.php">Find Donor</a></li>
<li><a href="register1.php">Register</a></li>
<li ><a href="request.php">Request for Blood</a></li>
<li><a href="requestdetail.php">Blood Request's</a></li>
<li><a href="availdon.php">Available Donor</a></li>
<li><a href="availblood.php">Available Blood</a></li>
<li><a href="tq.html">Login</a></li>
<li class="active"><a href="donateblood.php">Donated Blood</a></li>
</ul>	</div>
	</div>
</div>
<div id="content">
	<div class='row'>
	<div class='col-xs-12 col-sm-4'>
		<div class='inner-section' >
			<h4>Find a Blood Donor</h4>
			<div class="first">
			<form id="search-form" action="donate.php" method="POST">
			<div class='form'>
								
			<table class='table'>
				<tr>
					<td width="35%"><label class="required">Name *</span></label></td>
					<td><input placeholder="Enter Your Name" class="form-control" name="name"  type="text" maxlength="100">	</td>
				</tr>
				<tr>
					<td><label  class="required">Blood Group *</label></td>
					<td><select class="form-control" name="bloodgroup" id="SearchForm_bg">
<option value="">---Select Blood Group---</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
<option value="AB+">AB+</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>	</td>
				</tr>
				<tr>
					<td width="35%"><label >Date of blood donation</label></td>
					<td><input size="10" maxlength="10" class="form-control hasDatepicker" name="donateddate" type="date"></td>
				</tr>
				<tr>
					<td width="35%"><label class="required">Mobile Number*</label></td>
					<td><input placeholder="Enter Mobile Number" class="form-control" name="mobile" id="mobile" type="tel"></td>
				</tr>
				<tr>
					<td><label>Required City *</label></td>
				<td><input class=" form-control" name="city" type="text" placeholder="enter city"></td>
				</tr>
				<tr>
				<td><label>Required Area *</label></td>
				<td><input class=" form-control" name="area" type="text" placeholder="enter area"></td>
				
				</tr>
				
			</table>
			<div class="buttons" align='center'>
					<input class="btn btn-danger btn-sm" name="submit" type="submit" value="Submit" />			</div>
			</form>			</div>
		</div>
	</div>
				
		</div>
	</div>
	

</body>
	</html>