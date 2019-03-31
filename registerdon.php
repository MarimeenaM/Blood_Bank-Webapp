
<html>
<head>
<title>register</title>
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
<li class="active"><a href="register1.php">Register</a></li>
<li ><a href="request.php">Request for Blood</a></li>
<li><a href="requestdetail.php">Blood Request's</a></li>
<li><a href="availdon.php">Available Donor</a></li>
<li><a href="availblood.php">Available Blood</a></li>
<li><a href="loginpg.php">Login</a></li>
<li><a href="donateblood.php">Donated Blood</a></li>
</ul>	</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-9">
		
					
		
		<h2>Blood Donor Registration Form</h2>
<div class="first">
		
		<form id="register-form" action="regdon.php" method="POST">				
			<div class="form">
			<table class="table">
				<tbody><tr>
					<td width="35%"><label class="required">Name *</span></label></td>
					<td><input placeholder="Enter Your Name" class="form-control" name="name" id="Users_name" type="text" maxlength="100">	</td>
				</tr>
				<tr>
				</tr><tr>
					<td width="35%"><label  class="required">Username / Email *</label></td>
					<td><input placeholder="Enter User Name or email" class="form-control" name="email" id="Users_user_email" type="email"></td>
				</tr>
				<tr>
					<td width="35%"><label  class="required">New Password *</label></td>
					<td><input placeholder="Enter Password" class="form-control" name="password" id="Users_password" type="password" maxlength="12">		</td>
				</tr>
				<tr>
					<td width="35%"><label class="required">Blood Group *</label></td>
					<td><select class="form-control" name="bloodgroup" id="Users_bloodgroup">
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
					<td width="35%"><label >Date of Birth</label></td>
					<td><input size="10" maxlength="10" class="form-control hasDatepicker" name="dob" type="date"></td>
				</tr>
				<tr>
					<td width="35%"><label class="required">Mobile Number *</label></td>
					<td><input placeholder="Enter Mobile Number" class="form-control" name="mobile" id="mobile" type="tel"></td>
				</tr>
				<tr>
					<td width="35%"><label>last donated date</label></td>
					<td><input size="10" maxlength="10" class="form-control hasDatepicker"  name="lastdondate" type="date"></td>
				</tr>
				
				<tr>
					<td width="35%"><label for="Users_weight">Enter Weight</label>					<div class="small-desc">(In kg)</div></td>
					<td><input placeholder="Please Enter Your Weight" class="form-control" name="weight" id="Users_weight" type="text">	</td>
				</tr>
				<tr>
					<td width="35%"><label for="Users_height">Enter  Height</label>					<div class="small-desc">(In cm)</div></td>
					<td><input placeholder="Please Enter Your Height" class="form-control" name="height" id="Users_height" type="text">	</td>
				</tr>
				
			</tbody></table>
			</div>
		<table class="table">
					<tbody><tr>
						<td width="35%"><label for="Users_state_id" class="required">State *</label></td>
						<td><select class="form-control" name="state" id="Users_state_id">
<option value="">---Select State---</option>
<option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
<option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
<option value="DELHI">DELHI</option>
<option value="GOA">GOA</option>
<option value="GUJARAT">GUJARAT</option>
<option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
<option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
<option value="JHARKHAND">JHARKHAND</option>
<option value="KARNATAKA">KARNATAKA</option>
<option value="KERALA">KERALA</option>
<option value="LAKSHADWEEP">LAKSHADWEEP</option>
<option value="MADHYA PRADESH">MADHYA PRADESH</option>
<option value="MAHARASHTRA">MAHARASHTRA</option>
<option value="ORISSA">ORISSA</option>
<option value="PUDUCHERRY">PUDUCHERRY</option>
<option value="PUNJAB">PUNJAB</option>
<option value="RAJASTHAN">RAJASTHAN</option>
<option value="TAMIL NADU">TAMIL NADU</option>
<option value="TELANGANA">TELANGANA</option>
<option value="TRIPURA">TRIPURA</option>
<option value="UTTAR PRADESH">UTTAR PRADESH</option>
<option value="UTTARAKHAND">UTTARAKHAND</option>
<option value="WEST BENGAL">WEST BENGAL</option>
</select></td>
					</tr>
					<tr>
					<td><label for="SearchForm_city">City</label></td>
				<td><input class=" form-control" name="city" id="SearchForm_city" type="text" placeholder="enter city"></td>
				</tr>
				<tr>
				<td><label for="SearchForm_area">Area</label></td>
				<td><input class=" form-control" name="area" id="SearchForm_area" type="text" placeholder="enter area"></td>
				
				</tr>					
				</tbody></table>
				<table class="table">
				<tbody>
				</tbody></table>
			<div class="row buttons" align='center'>
		<input class="btn btn-success btn-md" name="register" type="submit" value="Register" />	</div>
			

</form>	
</div>
</body>
</html>
