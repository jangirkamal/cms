  
<!DOCTYPE html>
<html lang="en">
<meta name="theme-color" content="#000000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
<head>
	<title>H5 CMS Portal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/main.css">
</head>

<body style="background-color:#DDDDDD;">

  <div id="navbar" class="navbar">Hostel-5 CMS</div>

<br><br><br><br>

<div style="text-align:center;">
<h4>

<?php
	session_start();

	if (isset($_SESSION['information']['roll_no']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $roll=$_SESSION['information']['roll_no'];
        $name=$_SESSION['information']['name']="Kamal";
        $rno=$_POST['rno'];
        $comp_type=$_POST['type'];
        $comments=$_POST['comment_1'];
		
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "cms";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
					echo "Connection failed: " . $conn->connect_error;
				} 
				else {

					$sql = "INSERT INTO cms_1 (name, roll, rno, type, comment_1) VALUES ('$name', '$roll', '$rno', '$comp_type', '$comments');";

					if ($conn->query($sql) === TRUE) {
    					echo '<i>New complaint recorded successfully.</i>';
					} else {
 					  echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				}

	
		echo '<br><br><form action="./"><button type="submit" class="btn btn-default">Back</button></form>';

            }

	else {
		echo "Invalid auth";
		header( "refresh:2; url=../" );
		die();
	}
		
	
?>

</h4>
</div>

</body>
</html>

