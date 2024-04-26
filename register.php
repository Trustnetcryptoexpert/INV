<?php 
include('class/User.php');
$user = new User();
$message =  $user->register();
include('include/header2.php');
?>
<title>register</title><body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form id="signupform" class="user" role="form" method="POST" action="">				
					<?php if ($message != '') { ?>
						<div id="login-alert" class="alert alert-success col-sm-12"><?php echo $message; ?></div>                            
					<?php } ?>	
           
                                <div class="form-group">
                                       <input type="text" class="form-control form-control-user" name="state" placeholder="title" value="<?php if(!empty($_POST["state"])) { echo $_POST["state"]; } ?>" >
                                </div>
            
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="firstname" placeholder="First Name*" value="<?php if(!empty($_POST["firstname"])) { echo $_POST["firstname"]; } ?>" required>
                                
                                    </div>
                                    <div class="col-sm-6">
                                       
                                       <input type="text" class="form-control form-control-user" name="lastname" placeholder="Last Name" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
                                    </div>
                                </div>
                               
                                   
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address*" value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="country" placeholder="country" value="<?php if(!empty($_POST["country"])) { echo $_POST["country"]; } ?>" >
                                    </div>
                                </div>
                                 <div class="form-group">
                                  <input type="password" class="form-control form-control-user" name="passwd" placeholder="Password*" required>
                                  
                                </div>
                                <div class="form-group">
                                
                                <button id="btn-signup" type="submit" name="register" value="register" class="btn btn-primary btn-user btn-block"><i class="icon-hand-right"></i> &nbsp Register</button>
                                
                                </div>
                                
                                <hr>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forget_password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php include('include/footer.php');?>