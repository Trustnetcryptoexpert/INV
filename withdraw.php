<?php 
include('class/user4.php');
$user = new User();
$user->loginStatus();
include('include/header.php');
?>

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

		
<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">Hello <?php echo strtoupper($_SESSION['name']); ?>, Welcome to your EXPRESS PROSPERITY INVESTMENT Dashboard!</div>				
			</div> 
			 <div class="panel-body col-md-7">
				<form class="form-horizontal" role="form" method="POST" action="">				
					<?php if($message != '') { ?>
						<div id="login-alert" class="alert alert-success col-sm-12"><?php echo $message; ?></div>                            
					<?php } ?> </form></div></div><br>
			


							<form class="form-horizontal" role="form" method="POST" action="">
         <div class="form-group">
						
						<div class="col-md-12">
							<label class="control-label"><h2>Request Withdrawal</h2></label> <br>
							<label for="lastname" class="control-label">(Please input the amount you would like to withdraw in USD)</label>							
							<input type="text" class="form-control" id="withdrawals" name="withdrawals" placeholder="withdrawals"/>		


							<label for="lastname" class="control-label">Please input your bitcoin wallet below (The wallet address provided will be used to process your payments)</label>							
							<input type="text" class="form-control" id="btcwallet" name="btcwallet" placeholder="btcwallet"/>									
						



						</div>


										
						



						</div>
					</div>	
					<div class="form-group">
						
					<div class="form-group">						                                  
						<div class="col-md-offset-3 col-md-9">
							<button id="btn-signup" type="submit" name="update" value="update_account" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>			
						</div>
					</div>		</div></form>









</div>	
<?php include('include/footer.php');?>