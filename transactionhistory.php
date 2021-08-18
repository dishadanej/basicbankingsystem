<?php
 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
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
	<title>Transaction History</title>
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: serif;
		font-size:40px;
		}
		
		td, th {
		border: 2px solid black;
		text-align: center;
		padding: 8px;
		}
		
	</style>
</head>


    <h1 style="color:black;text-align: center;font-family: cursive;" >Transaction History</h1>
	<br>
    <table style="font-family: serif;color: black;font-weight: bold;">
	<thead>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT</th>	
	</thead>
	<tbody>
		<tr align = center>
        <?php  
			while ($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["Sender"]; ?></td>
	<td><?php echo  $row["Receiver"]; ?></td>
	<td><?php echo  $row["Amount"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
	
		
</body>
</html>

<!-- Footer Section Begin -->
<br>
<footer class="text-gray-600 body-font">
  
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">Copyright © 2021 All rights reserved | This Website is created by DISHA DANEJ     
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
		<a href="https://www.facebook.com/disha.danej.73/">   
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
		<a href="https://www.instagram.com/erany_29/">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
		<a href="https://www.linkedin.com/in/disha-danej-5ab566215/">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
