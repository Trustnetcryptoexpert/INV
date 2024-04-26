<?php 
include('class/user4.php');
$user = new User();
$user->loginStatus();
include('include/header.php');
?>
<!-- Style CSS --> 
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
 	
   <link rel="stylesheet" href="../assets/css/icofont.css">	
<title>User Dashboard</title>
<!--?php include('include/container.php');?> -->
<div class="container contact">	

	
	

<?php 
$message = '';
if(!empty($_POST["update"]) && $_POST["update"]) {
	$message = $user->editAccount();
}
$userDetail = $user->userDetails();

?>





<section id="price" class="section-padding bg-gray">
        <div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<h5>Trustnet packages</h5>
						<h3>Investment <span>Plans</span></h3>
					</div>
				</div>
			</div>
			<!-- end section title -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-5">
					<div class="single-pricing">
						<div class="single-pricing-head text-center">
							<span class="price"><span class="price-digit">10% </span>/24 hours</span>
							<h5>Basic Plan</h5>
						</div>
						<div class="single-pricing-body">
							<div class="single-pricing-list">
								<ul>

 
 
									<li><i class="icofont icofont-check-alt"></i> $100 MIN DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> $5,000 MAX DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> AUTOMATIC PAYOUT</li>
									
								</ul>
							</div>
						</div>
						<div class="single-pricing-button">
							<a href="#" class="mt-3 d-block text-center rounded-0">Purchase Plan</a>
						</div>	
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-5">
					<div class="single-pricing">
						<div class="single-pricing-head text-center">
							<span class="price"><span class="price-digit">22% </span>/48 hours</span>
							<h5>Pro Plan</h5>
						</div>
						<div class="single-pricing-body">
							<div class="single-pricing-list">
								<ul>

 
 
									<li><i class="icofont icofont-check-alt"></i> $5,100 MIN DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> $20,000 MAX DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> AUTOMATIC PAYOUT</li>
									
								</ul>
							</div>
						</div>
						<div class="single-pricing-button">
							<a href="#" class="mt-3 d-block text-center rounded-0">Purchase Plan</a>
						</div>	
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-4 col-md-4 col-12">
					<div class="single-pricing">
						<div class="single-pricing-head text-center">
							<span class="price"><span class="price-digit">35% </span>/96 hours</span>
							<h5>Premium Plan</h5>
						</div>
						<div class="single-pricing-body">
							<div class="single-pricing-list">
								<ul>

 
 
									<li><i class="icofont icofont-check-alt"></i> $20,100 MIN DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> $100,000 MAX DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> AUTOMATIC PAYOUT</li>
									
								</ul>
							</div>
						</div>
						<div class="single-pricing-button">
							<a href="#" class="mt-3 d-block text-center rounded-0">Purchase Plan</a>
						</div>	
					</div>
				</div>
				<!-- end col -->
				</div>

				<br> <br>

				<div class="row">
				<div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-5">
					<div class="single-pricing">
						<div class="single-pricing-head text-center">
							<span class="price"><span class="price-digit">20% </span>/Weekly</span>
							<h5>Mining Basic Plan</h5>
						</div>
						<div class="single-pricing-body">
							<div class="single-pricing-list">
								<ul>



                                    <li><i class="icofont icofont-check-alt"></i>  FOR 1 MONTH</li>
 
									<li><i class="icofont icofont-check-alt"></i> $1,500 MIN DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> $15,000 MAX DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> AUTOMATIC PAYOUT / WITHDRAWAL</li>
									
								</ul>
							</div>
						</div>
						<div class="single-pricing-button">
							<a href="#" class="mt-3 d-block text-center rounded-0">Purchase Plan</a>
						</div>	
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-5">
					<div class="single-pricing">
						<div class="single-pricing-head text-center">
							<span class="price"><span class="price-digit">40% </span>/weekly</span>
							<h5>Mining Pro Plan</h5>
						</div>
						<div class="single-pricing-body">
							<div class="single-pricing-list">
								<ul>


									<li><i class="icofont icofont-check-alt"></i>  FOR 1 MONTH</li>
 
									<li><i class="icofont icofont-check-alt"></i> $15,100 MIN DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> $40,000 MAX DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> AUTOMATIC PAYOUT / WITHDRAWAL</li>
									
								</ul>
							</div>
						</div>
						<div class="single-pricing-button">
							<a href="#" class="mt-3 d-block text-center rounded-0">Purchase Plan</a>
						</div>	
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-3 col-md-3 col-12">
					<div class="single-pricing">
						<div class="single-pricing-head text-center">
							<span class="price"><span class="price-digit">60% </span>/weekly</span>
							<h5>Mining Premium Plan</h5>
						</div>
						<div class="single-pricing-body">
							<div class="single-pricing-list">
								<ul>

 
 
									<li><i class="icofont icofont-check-alt"></i>  FOR 3 MONTHS</li>
 
									<li><i class="icofont icofont-check-alt"></i> $40,100 MIN DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> $100,000 MAX DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> AUTOMATIC PAYOUT / WITHDRAWAL</li>
									
								</ul>
							</div>
						</div>
						<div class="single-pricing-button">
							<a href="#" class="mt-3 d-block text-center rounded-0">Purchase Plan</a>
						</div>	
					</div>
				</div>



<div class="col-lg-3 col-md-3 col-12">
					<div class="single-pricing">
						<div class="single-pricing-head text-center">
							<span class="price"><span class="price-digit">90% </span>/weekly</span>
							<h5>Mining VIP Plan</h5>
						</div>
						<div class="single-pricing-body">
							<div class="single-pricing-list">
								<ul>

 
									<li><i class="icofont icofont-check-alt"></i>  FOR 6 MONTHS</li>
 
									<li><i class="icofont icofont-check-alt"></i> $100,100 MIN DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> $1,000,000 MAX DEPOSIT</li>
									<li><i class="icofont icofont-check-alt"></i> AUTOMATIC PAYOUT / WITHDRAWAL</li>
									
								</ul>
							</div>
						</div>
						<div class="single-pricing-button">
							<a href="#" class="mt-3 d-block text-center rounded-0">Purchase Plan</a>
						</div>	
					</div>
				</div>

			
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PRICE SECTION -->









</div>	
<?php include('include/footer.php');?>