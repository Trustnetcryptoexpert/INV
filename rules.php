<?php
include('class/user4.php');
$user = new User();
$user->loginStatus();
include('include/header.php');
?>
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
<div class="panel">
<div class="panel-heading">
<div class="panel-title">Hello <?php echo strtoupper($_SESSION['name']);
?>, Welcome to your EXPRESS PROSPERITY INVESTMENT Dashboard!</div>
</div>
<div class="panel-body col-md-7">
<form class="form-horizontal" role="form" method="POST" action="">
<?php if($message != '')
{
    ?>
    <div id="login-alert" class="alert alert-success col-sm-12"><?php echo $message;
    ?></div>
    <?php
}
?> </form></div></div><br>
<form class="form-horizontal" role="form" method="POST" action="">
<div class="form-group">
<div class="col-md-12">
<label class="control-label"><h2>INVESTMENT RULES</h2></label> <br>
<P>Please take time to read the rules below</P>
<p>
<ul>
<li>You can start by investing in any of the plans stated in your investment dashboard, gold or Bitcoin.</li>
<li>After investment, Once your profit starts growing, you can choose a different plan, your Dashboard will automatically update your selected plan</li>
<li>Once you have made your first investment and have received your profit and you want to invest again, you must invest in a plan higher than the Initial plan, this time, withdrawals won't be processed till after a month, two or three. (This is because, we want your second investment to yield excessive profit for you) </li>
<li>Make sure you pay the exact amount due for your selected plan (gold or bitcoin)Failure to make payments after three days of Investment may lead to the TERMINATION OF YOUR ACCOUNT</li>
<li>Your Dashboard will automatically Update to your most recent plan, We will send you an email notification from time to time regarding your profit, investments and withdrawals</li>
<li>You are free to contact us anytime anyday using the floating icon below or our email address</li>
</ul>
<i><b>Working with you has always been a pleasure ...</i><br>EXPRESS PROSPERITY INVESTMENT </b>
</p>
</div>
<?php include('include/footer.php');
?>