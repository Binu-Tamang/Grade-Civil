<?php
	error_reporting(0);
?>

<?php

	$fullname=$_REQUEST['frmfullName'];
	$phone=$_REQUEST['frmphoneNumber'];
  	$email=$_REQUEST['frmEmail'];
	$subject=$_REQUEST['frmSubject'];
	$message=$_REQUEST['frmMessage'];

	
if (($name=="")||($email=="")) {
		echo "<script>alert('Message Sent Failed')</script>";
		echo "<script>location.href='../contact.php'</script>";	
}

else {
		
						// multiple recipients
				$to  = 'nobitad323@gmail.com , info@mapleleapgroups.com'; // note the comma


				// message
				$message = '
				<html>
				<head>
				  <title>Contact Form</title>
				  <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:400,700" rel="stylesheet">
				  <style>
				  
				table#contenttable{
					border:4px solid #222;
					color:#222;
					padding:10px;
					width:100%;
					max-width: 991px;
				}
				table#logotable{
					width:100%;
					border:0;
					text-align: center;
				}
				th{
					width:50%;
					height:30px;
					border-bottom: 2px solid rgba(34,34,34,0.6);
					font-size:18px;
				}
				td{
					font-family:lato;
					font-size:16px;
					width:50%;
					height:30px;
					text-align:center;
					border-bottom: 2px solid rgba(34,34,34,0.3);
				}
				tr td::first-child{
					border-right: 2px solid rgba(34,34,34,0.3);
				}
				#logo{
					width:250px;height:auto;
					text-align:center;
					margin:5px auto;
				}
				h1#title{
					text-align:center;
					font-family:Poppins;
				}
				  </style>
				</head>
				<body>
				  <table id="logotable">
				  <img src="https://www.tropicaltanspawaverly.com/assets/img/tt-logo.png" alt="LOGO" id="logo">
				  </table>
				  <h1 id="title">Contact Us Form</h1>
				  <table id="contenttable" style="max-width:767px;margin:0 auto;">
					<tr>
					  <td>Name</td><td>'.$fullname.'</td>
					</tr>
					<tr>
					  <td>Phone No.</td><td>'.$phone.'</td>
					</tr>
					<tr>
					  <td>Email</td><td>'.$email.'</td>
					</tr>
					<tr>
					  <td>Subject</td><td>'.$subject.'</td>
					</tr>
					<tr>
					  <td colspan="2">Message : <br><br> '.$message.'</td>
					</tr>
				  </table>
				</body>
				</html>
				';

				// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Additional headers
			$headers .= 'From:  '.$name.' <'.$email.'>' . "\r\n";
			$headers .= 'Reply-to:  '.$email. "\r\n";
			$subject .= 'Contact Form Submission';

			// Mail it
			mail(
				$to,
				$subject, 
				$message,
				$headers
				);
				echo "<script>location.href='msgsuccess.php'</script>";
	}

?>