<html>
<head>
	<title>Card Generator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Library Management System" content="This system is developed to manage libraries with the help o IT infrastructure" />	
	<link rel="stylesheet" type="text/css" href="csstest\mystyle.css">
	<link rel="stylesheet" type="text/css" href="csstest\search.css?v=1.1">
	<link rel="stylesheet" type="text/css" href="csstest\profile.css">
</head>
<body>
<?php
/* 	session_start();	
	if(isset($_SESSION['user_name'])){
		include 'header_aft.php';
		include 'nav_after.php';
	}
	else{
		include 'header.php';
		//include 'navigation.php';
	}*/
	
	include 'connection.php';

	function test_input($data){
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
	 return $data;
	}

	  function empty_check($objct){
	 	 if(empty($objct)){
		 echo "Empty Value ";
		}
		else{
		 $objct=test_input(test_input($objct));
		 return $objct;
		}
	}

 ?>
 
 <div id="search_box">
  <h1>Issue Library Card to Student</h1>
  <div id="search_cat">
    <form method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>"> <!-- used  for one page solution-->
    <input type="text" name="rollno" placeholder="Enter Roll#" required> <br>
	<input type="text" name="sname" placeholder="Enter Name" required> <br>
	<input type="text" name="sclass" placeholder="Enter Class" required> <br>
	<input type="text" name="gender" placeholder="Enter Gender" required> <br>
	<input type="text" name="contact" placeholder="Enter Contact" required> <br>
	<input type="text" name="address" placeholder="Enter Address" required> <br>
</div>
	<div id="search_btn">
		<input type="submit" id="s_button" name="sbtn" Value="View Student Card">
	</div>
	</form>
  </div>
	<?php
	if(isset($_POST["sbtn"])){
		$rollno=test_input($_POST["rollno"]);
		$sname=test_input($_POST["sname"]);
		$sclass=test_input($_POST["sclass"]);
		$gender=test_input($_POST["gender"]);
		$contact=test_input($_POST["contact"]);
		$address=test_input($_POST["address"]);
?>
	<div id="card">
	<div id="personal_card">
		<div id="card_pic">
			<img src="pic.jpg">
		</div>
		<div id="card_sig">
		</br>
		_________
		<p>Auth Sign</p>
		</div>
		<div id="card_info">
			<table>
				<tr>
				<td><h1><?php echo strtoupper($sname); ?></h1></td>
				</tr>
				<tr>
				<td id="cont_title">Roll #: </td><td><?php echo $rollno; ?></td>
				</tr>
				<tr>
				<td id="cont_title">Class: </td><td><?php echo $sclass; ?></td>
				</tr>
				<tr>
				<td id="cont_title">Contact:</td><td><?php echo $contact; ?></td>
				</tr>
				<tr>
				<td id="cont_title">Gender:</td><td><?php echo $gender; ?></td>
				</tr>
				<tr>
				<td id="cont_title">Student Address: </td><td> <?php echo $address; ?></td>
				</tr>
			</table>
		</div>
	</div>
	</div>
	<button name="printbtn" id="printbtn" onclick="printDiv('card')">print card</button>
	<?php
	
	}
	?>

<?php
    //include 'footer.php';
  ?>
  
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
  
  </body>
  </html>