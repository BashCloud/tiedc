<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1", user-scalable=no>
		<script type="text/javascript">
		function load_gas()
		{
			var credit=document.getElementById("money-display").value;
			var rate=400;
			if(credit<=0)
			{
				document.getElementById("Load_Message").innerHTML="You do not have enough credits. Please load money in wallet";
				return;
			}
			var gas_loaded=(credit/rate);
			var res=0.2*gas_loaded;
			gas_loaded=gas_loaded-res;
			var gas=document.getElementById("gas-display").value+gas_loaded;
			var reserved=document.getElementById("reserved_gas-display").value+ res;

			document.getElementById("Load_Message").innerHTML="You have successfully loaded: "+(gas_loaded+res);
			document.getElementById("gas-display").value=gas;
			document.getElementById("reserved_gas-display").value=reserved;
			document.getElementById("money-display").value=document.getElementById("money-display").value-credit;
			
		}

		setInterval(function()
		{
			var gas=document.getElementById("gas-display").value;
			var reserved=document.getElementById("reserved_gas-display").value;
			var rem=10;
			if((gas-10)>=0)
			{
				gas=gas-10;
				document.getElementById("gas-display").value=gas;
			}
			else
			{	
				document.getElementById("gas-display").value=0;
				rem=10-gas;
				if((reserved-rem)>=0)
				{
					reserved=reserved-rem;
				}
				else
				{
					reserved=0;
				}
				document.getElementById("reserved_gas-display").value=reserved;
			}
			gas=document.getElementById("gas-display").value;
			reserved=document.getElementById("reserved_gas-display").value;
			if(gas<=1)
			{	

				if(gas==0)
				{
					document.getElementById("status_message").innerHTML="You have completely exhausted your mains supply.<br>Switching to reserved supply.<br>Please recharge immediately to continue usage!";
				}
				else
				{
				document.getElementById("status_message").innerHTML="You are about to exhaust your mains supply.<br>Please reduce consumption!";
				}
				if(reserved<=0.5)
				{
					document.getElementById("status_message").innerHTML="You are about to exhaust your reserved supply too.<br>Please recharge to continue usage!";
				}
				if(reserved==0)
				{
					document.getElementById("status_message").innerHTML="You have exhausted all your supply.<br>Please recharger immediately to continue usage!";
				}
			}
			else
			{
				document.getElementById("status_message").innerHTML="You have sufficient gas available!";
			}
		},10000);

		</script>

<style>
h1 {text-align:center;}
p {text-align:center;}
	

#status_message_block
{
	background-color: orange;
}

</style>
			
	<body>


		<?php
		session_start(); //session starts
		if(isset($_SESSION['login']))
		{	
			$user=$_SESSION['login_user'];
			?>
		<div class="container-fluid">
		<div class="row">
			<?php
			echo "<center><div><h1>Welcome  $user </h1>"; //Personalised welcome address
			echo "<a id='logout' href=logout.php><p style='float:right;'>Logout</a></div></center>"; //Logout Button
			?>
		</div> 
			<br>


			<div id="frame">
			<div class="row">
				<center><label id="money-label"> Money Credits </label></center>
				<center><input id="money-display" type="number" min="0"/> </center>
			</div>
			<br><br>
			<div class='row'>
				<center><input type="button" onclick="load_gas()" value="Load Gas" style="background:green;"/>
                  </center>
			<br>
			<p id="Load_Message" style="position:relative; left:-400px"></p>
			<br>

		</div>
			<div id="GAS">
				<div class="row">
					<center><div><label id="gas-label"> Gas Credits </label>
					<input id="gas-display" type="number" min="0" readonly/></div>
					<center><div><label> Reserved Gas Credits </label>
					<input id="reserved_gas-display" type="number" min="0" readonly/></div>
				</div>
			</div>
			</div>
			<br>
			<center><input type="button" value="Perform Usage" onclick="perform_usage()"/>
			<br>
		</div>
			<br>
			<div id="status_message_block" style="border:.5px solid black;">
				<h3>STATUS:</h3>
				<p id="status_message"></p>
			</div>

			



			<?php
		}
		else
		{
			header("location: index.php");//redirection to home-page
		}
		?>
	</body>
</html>