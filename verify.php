<?php 
include('class/User.php');
$user = new User();
$isVerified =  $user->verifyRegister();
include('include/header.php');
?>
<title>verify email</title>
<title> Login</title>
</head> 

<body class="bg-gradient-primary">

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
                                        <h1 class="h4 text-gray-900 mb-4">Registration Successful</h1>
                                    </div>
		
	<div class="alert alert-success col-sm-12" >
		<?php if ($isVerified) { ?>
			Your registration has been successfully verified. You can <a href="login.php">login</a> to access your account.
		<?php } else { ?>
			Invalid request.
		<?php } ?>
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