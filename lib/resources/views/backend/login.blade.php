<!DOCTYPE html>
<html lang="en">
    
<head>
    <base href="{{asset('public/layout/backend')}}/">
    <title>Matrix Admin</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/matrix-login.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <div id="loginbox"> 
    @include('errors.note')           
        <form id="loginform" class="form-vertical" method="post">
			 <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>

            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Email" name="email" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" value="{{old('email')}}" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><span class="flip-link btn btn-info" id="to-recover">Lost password?</span></span>
                <span class="pull-right"><button type="submit" class="btn btn-success" /> Login</button></span>
            </div>
            {{csrf_field()}}
        </form>
        <form id="recoverform" action="#" class="form-vertical">
			<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
			
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                    </div>
                </div>
           
            <div class="form-actions">
                <span class="pull-left"><span class="flip-link btn btn-success" id="to-login">&laquo; Back to login</span></span>
                <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
            </div>
        </form>
    </div>
    
    <script src="js/jquery.min.js"></script>  
    <script src="js/matrix.login.js"></script> 
</body>

</html>
