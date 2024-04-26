<?php
include('class/user2.php');
$user = new User();
$user->loginStatus();
include('include/header.php');
?>
<!-- Style CSS -->
<link rel="stylesheet" href="../assets/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="stylesheet" href="../assets/css/icofont.css">
<title>User Dashboard</title>
<!--?php include('include/container.php');
?> -->
<div class="container contact">
<?php
$message = '';
if(!empty($_POST["update"]) && $_POST["update"])
{
    $message = $user->editAccount();
}
$userDetail = $user->userDetails();
?>
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Welcome <?php echo strtoupper( $userDetail['first_name']);
?></h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
class="fas fa-download fa-sm text-white-50"></i> Withdraw </a>
</div>
<form class="form-horizontal" role="form" method="POST" action="">
<?php if($message != '')
{
    ?>
    <div id="login-alert" class="alert alert-success col-sm-12"><?php echo $message;
    ?></div>
    <?php
}
?> </form>
<!-- Content Row -->
<div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
Total Balance</div>
<div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $userDetail['mainbalance'];
?></div>
</div>
<div class="col-auto">
<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-success shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
Investment Plan</div>
<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $userDetail['plan'];
?></div>
</div>
<div class="col-auto">
<i class="fas fa-calendar fa-2x text-gray-300"></i>
</div>
</div>
</div>
</div>
</div>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-info shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Profit
</div>
<div class="row no-gutters align-items-center">
<div class="col-auto">
<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">$<?php echo $userDetail['profit'];
?></div>
</div>
<!-- <div class="col">
<div class="progress progress-sm mr-2">
<div class="progress-bar bg-info" role="progressbar"
style="width: 50%" aria-valuenow="50" aria-valuemin="0"
aria-valuemax="100"></div>
</div>
</div> -->
</div>
</div>
<div class="col-auto">
<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
<!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
</div>
</div>
</div>
</div>
</div>
<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
Withdrawal Request <sup> Pending</sup></div>
<div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $userDetail['withdrawals'];
?></div>
</div>
<div class="col-auto">
<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
<!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Content Row -->
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
<li><i class="icofont icofont-check-alt"></i> FOR 1 MONTH</li>
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
<li><i class="icofont icofont-check-alt"></i> FOR 1 MONTH</li>
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
<li><i class="icofont icofont-check-alt"></i> FOR 3 MONTHS</li>
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
<li><i class="icofont icofont-check-alt"></i> FOR 6 MONTHS</li>
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
<form class="form-horizontal" role="form" method="POST" action="">
<div class="form-group">
<div class="col-md-12">
<label class="control-label"><h2>Bitcoin Plans</h2></label><br>
<p><b>Select your preferred Bitcoin plan</b></p><br>
<label class="radio-inline">
<input type="radio" name="plan" value="basic plan" <?php if($userDetail['plan'] == 'basic plan')
{
    echo 'checked';
}
?> required>basic plan
</label> <br>
<label class="radio-inline">
<input type="radio" name="plan" value="pro plan" <?php if($userDetail['plan'] == 'pro plan')
{
    echo 'checked';
}
?> required>pro plan
</label><br>
<label class="radio-inline">
<input type="radio" name="plan" value="premium plan" <?php if($userDetail['plan'] == 'premium plan')
{
    echo 'checked';
}
?> required>premium plan
</label><br>
<label class="radio-inline">
<input type="radio" name="plan" value="mining basic plan" <?php if($userDetail['plan'] == 'mining basic plan')
{
    echo 'checked';
}
?> required>mining basic plan
</label><br>
<label class="radio-inline">
<input type="radio" name="plan" value="mining pro plan" <?php if($userDetail['plan'] == 'mining pro plan')
{
    echo 'checked';
}
?> required>mining pro plan
</label><br>
<label class="radio-inline">
<input type="radio" name="plan" value="mining premium plan" <?php if($userDetail['plan'] == 'mining premium plan')
{
    echo 'checked';
}
?> required>mining premium plan
</label><br><br><br>
<label class="radio-inline">
<input type="radio" name="plan" value="mining vip plan" <?php if($userDetail['plan'] == 'mining vip plan')
{
    echo 'checked';
}
?> required>mining vip plan
</label><br>
<label for="lastname" class="control-label"><br><h3>Balance</h3></label>
<br><p><b>(please, input the amount you would like to invest in USD. this should correspond to the bitcoin plan you choose above)</b></p><br>
<input type="text" class="form-control" id="balance" name="balance" placeholder="balance"/>
</div>
</div>
<div class="form-group">
<div class="form-group">
<div class="col-md-offset-3 col-md-9">
<button id="btn-signup" type="submit" name="update" value="update_account" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>
</div>
</div> </div></form>
</div>
<script src="https://crypto.com/price/static/widget/index.js"></script>
<!-- crypto section -->
<div id="crypto-widget-CoinList" data-theme="dark" data-design="classic"
data-coin-ids="1,166,136,1120,382,1694,20,440,1986" class="box-image-item box-image-video novi-background bg-image"></div>
<!-- end crypto section -->
<!--
<div class="box-image-item box-image-video novi-background bg-image" style="background-image: url(images/index-874x534.jpg)"><a class="icon novi-icon fa fa-caret-right" href="//www.youtube.com/embed/KFVUxSynSXc" data-lightgallery="item"></a></div> -->
</section>
<?php include('include/footer.php');
?>