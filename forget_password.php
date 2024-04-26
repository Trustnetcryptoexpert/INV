<?php 
include('class/User.php');
$user = new User();
$errorMessage = '';
if(!empty($_POST['forgetpassword']) && $_POST['forgetpassword']) {
	$errorMessage =  $user->resetPassword();
}
include('include/header2.php');
?>
<title>forget password</title>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                            <?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
                                    </div>
                                    <form id="loginform" class="user" role="form" method="POST" action="">  
                                        <div class="form-group">
                                           <input type="email" class="form-control form-control-user" id="email" name="email"  placeholder="Enter email Address..." required>
                                           
                                           
                        
                                        </div>
                                        <input type="submit" name="forgetpassword" value="Submit" class="btn btn-primary btn-user btn-block">
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
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

        </div>

    </div>

<?php include('include/footer.php');?>