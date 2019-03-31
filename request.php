
<html>
<head>
<title>request for blood</title>
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
<li class="active"><a href="request.php">Request for Blood</a></li>
<li><a href="requestdetail.php">Blood Request's</a></li>
<li><a href="availdon.php">Available Donor</a></li>
<li><a href="availblood.php">Available Blood</a></li>
<li><a href="tq.html">Login</a></li>
<li><a href="donateblood.php">Donated Blood</a></li>
</ul>	</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-9">
		<div class="inner-section">
					
		
		<h2>Request For Blood Registration Form</h2>
<div class="first">
		
		<form id="request-form" action="bloodrequest.php" method="POST">				
			<div class="form">
			<table class="table">
				<tbody><tr>
					<td width="35%"><label class="required">Patient Name</label></td>
					<td><input placeholder="Enter Patient Name" class="form-control" name="pname" id="Users_name" type="text" maxlength="100">	</td>
				</tr>
				<tr>
				</tr><tr>
					<td width="35%"><label  class="required">Suffering Disease</label></td>
					<td><input placeholder="Enter Patient disease" class="form-control" name="patdis" type="text"></td>
				</tr>
				<tr>
					<td width="35%"><label  class="required">Hospital address *</label></td>
					<td><input placeholder="Enter Hospital address" class="form-control" name="hosadrs" type="text">	</td>
				</tr>
				<tr>
					<td width="35%"><label class="required">Requires Blood Group *</label></td>
					<td><select class="form-control" name="reqgrp" id="Users_bloodgroup">
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
					<td width="35%"><label >Required Date *</label></td>
					<td><input size="10" maxlength="10" class="form-control hasDatepicker" name="reqdate" type="date"></td>
				</tr>
				<tr>
					<td width="35%"><label class="required">Name of Contact Person *</label></td>
					<td><input placeholder="Enter Name of contact person " class="form-control" name="contactpers" type="text"></td>
				</tr>
				<tr>
					<td width="35%"><label>Phone number of contact person *</label></td>
					<td><input class="form-control"  placeholder="enter contact number of person" name="contactphone" type="tel"></td>
				</tr>
				
			</tbody></table>
			</div>
		<table class="table">
					<tbody><tr>
						<td width="35%"><label for="Users_state_id" class="required">Required State *</label></td>
						<td><select class="form-control" name="reqstate" id="Users_state_id">
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
					<td><label for="SearchForm_city">Required City *</label></td>
				<td><input class=" form-control" name="reqcity" id="SearchForm_city" type="text" placeholder="enter city"></td>
				</tr>
				<tr>
				<td><label for="SearchForm_area">Required Area *</label></td>
				<td><input class=" form-control" name="reqarea" type="text" placeholder="enter area"></td>
				
				</tr>
                <tr>
					<td width="35%"><label for="Users_height">No of Units Required </label>	</td>
					<td><input placeholder="enter no of units required" class="form-control" name="noofunits" type="number">	</td>
				</tr>				
				</tbody></table>
				
			
			<div class="row buttons" align='center'>
		<input class="btn btn-success btn-md" name="request" type="submit" value="request" />	</div>
			

</form>	
</div>
</body>

</html> 
