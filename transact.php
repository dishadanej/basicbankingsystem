<?php 

	session_start();
	include 'connection.php';

	if(isset($_GET['Name'])){
		$Name=$_GET['Name'];
	}

	$q="SELECT * From customers WHERE Name='$Name'";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	$_SESSION['senderName']=$Name;
?>



<!-- Header Section Start -->


<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-8 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-black-900 mb-4 md:mb-0">
      <img src="logo.png">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">The Sparks Foundation</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-black-900"><a href="index.php">Home</a>
      <a class="mr-5 hover:text-black-900"><a href="customer.php">View Customers</a>
      <a class="mr-5 hover:text-black-900"><a href="transfermoney.php">Transfer Money</a>
      <a class="mr-5 hover:text-black-900"><a href="transactionhistory.php">View Transaction History</a>
    </nav>
    
     
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
 
  </div>
</header>
  <!-- Header Section End -->


<html>
<head>
	<title>transact</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: sans-serif;
		font-size:40px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color: lavenderblush;	
		}
	</style>
</head>


<br>

	<div>
		<h1 style="font-family:serif;text-align:center;color: black;">Account Details</h1>
		<table style="background-color:#CAE1FF;">
           <th>CUSTOMER ID</th>
           <th>NAME </th>
           <th>EMAIL</th>
		   <th>CURRENT BALANCE</th>
           <tr>
		   
			<?php  
				$row=mysqli_fetch_array($result)
			?>
			
             
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
           </tr>

        </table>
	</div>
        
	<?php echo "<form method='post' action='transaction.php?Name=$Name'>"?>
<br><br>
	<h3 style="font-family: cursive;color: black;">Select the user to whom you want to transfer money from the dropdown list</h3>
	<table border="0px" style="background-color:#75A1D0;">
		<tr>
		<td>Transfer To:</td>
		<td><select name="user">
			<option>--Select--</option>
   
			<?php  
				$q1="select * from customers";
				$result1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_array($result1)){
			?>

			<option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>

			<?php }
			?>
			
            </select></td></tr> 
			<tr><td>Amount:</td><td><input type="text" name="Amount"></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color: skyblue; font-weight: bold;"></td></tr>
	</table>

</form>



</body>
</html>