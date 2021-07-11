<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Medlinz login form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: light green;
        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        background: #0066cc; border: none; border-radius: 3px; font-size: 24px; padding: 15px 32px;cursor: pointer;
  width: 100%;
  display: block;
  border-radius: 0%;
  background: #003366;

transition: 0.5s background;
    }
</style>
</head>
<body>

  
<form  action="new1.php" method="POST" >
<div class="login-form">
<img  alignment="middle" src="assets/img/logo.png"width="200" height="160" >
    
	
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
		<label for="EmailID">EmailID</label>
            <input type="EmailID" class="form-control" placeholder="EmailID" required="required" name="EmailId" value="">
        </div>
        <div class="form-group">
		<label for="password">password</label>
            <input type="text" class="form-control" placeholder="Password" required="required" name="Password" value="">
			
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"><a href="project/who.php">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div>        
    
    <p class="text-center"><a href="signup.php"><a href="signup.php">Create an Account</a></p>
	
</div>
</form>
</body>
</html>          
