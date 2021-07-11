<!DOCTYPE html>
<link href="D:\adio\css\new 1.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Signup</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Register yourself here.</h1>
    		
    		<form action="Sign.php" method="POST">
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    <div class="form-group has-error">
    		        <label for="slug">Name <span class="require">*</span> <small>(Individual or Organization.)</small></label>
    		        <input type="text" class="form-control" required="required" name="Name" value="" />
    		        <span class="help-block"></span>
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="Email">Email <span class="require">*</span><small></label>
    		        <input type="text" class="form-control" required="required" name="Email" value="" />
    		    </div>
    		    
    		    <div class="form-group">
    		        <label for="Phone">Phone Number <small>Please enter appropriate phone number</small></label>
    		        <textarea rows="1" class="form-control" required="required"name="Phone" value="" ></textarea>
    		    </div>
    		    
    		    
				<div class="form-group">
    		        <label for="Password">Password <small></small></label>
    		        <textarea rows="1" class="form-control" required="required" name="Password" value="" ></textarea>
    		    </div>
				<div class="form-group">
    		        <label for="PasswordCM">Password Conform <small></small></label>
    		        <textarea rows="1" class="form-control" required="required" name="PasswordCM" value="" ></textarea>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary"><href="project/who.php">
    		            Signup
    		        </button>
    		        <button class="btn btn-default"><href="project/index.php">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
