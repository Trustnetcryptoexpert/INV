<?php 
include('class/User.php');
$user = new User();
$errorMessage = '';
if(!empty($_POST['resetpassword']) && $_POST['resetpassword']) {
	$errorMessage =  $user->savePassword();
}
include('include/header2.php');
?>
<title>reset password</title><body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                     
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">RESET PASSWORD</h1>
                                    </div>
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-success col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<?php if(!empty($_GET['authtoken']) && $_GET['authtoken']) { ?>
					<form id="loginform" class="user" role="form" method="POST" action="">                                    
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="password" name="password"  placeholder="New password..." required>			
						</div>
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="cpassword" name="cpassword"  placeholder="Confirm password..." required>              
						</div>	
						<div style="margin-top:10px" class="form-group">                               
							<div class="col-sm-12 controls">
								<input type="hidden" name="authtoken"  value="<?php echo $_GET['authtoken']; ?>" />
								<input type="submit" name="resetpassword" value="Save" class="btn btn-primary btn-user btn-block">						  
							</div>						
						</div>					  	
					</form>
				<?php } else { ?>
					Invalid password reset request.
				<?php } ?>
			</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?php include('include/footer.php');?>