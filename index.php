<?php
session_start();
$_SESSION['information']['roll_no'] = 170040064;
if(empty($_SESSION['information']['roll_no']))
{
    header("Location: https://gymkhana.iitb.ac.in/~hostel5/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#000000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <title>Hostel-5 CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="css/w3.css">
    <script src="main.js"></script>
</head>
<body>
    <nav id="navbar"><i>Hostel-5 CMS</i> <div style="text-align:right;"><form class="" action="../user.php?action=logout">
						<button type="submit" class="w3-button w3-round">Logout</button>
					</form></div></nav>
    <br>

    <form action="action.php" method="POST" id="form" class="form">
    <div id="box">
        <p id="Welcome"> Welcome <?php echo $_SESSION['information']['roll_no'];  ?> </p> <br>
        <!-- <label for="name">Name </label><input type="text" name="name" class="w3-input" required placeholder="Name"><br> -->
        <label for="room_no">Room No. </label><input type="number" min="1" max="300" name="rno" class="w3-input" required placeholder="Room No."> <br>
        <label for="type_of_complaint">Type Of Complaint</label>
        <select name="type" class="w3-input" required>
        <option value="maint">Maint</option>
        <option value="mess">Mess</option>
        <option value="cult">Cult</option>
        <option value="sports">Sports</option>
        <option value="web">Web</option>
        </select> <br>
        <label for="Comment">Comment</label><textarea name="comment_1" class="w3-input" col="50" row="4"  placeholder="......"></textarea><br>
        <input type="hidden" name="h_input" class="w3-input" value="1">
        <button id="submit" type="submit" class="w3-button w3-round">Submit</button>
        <button type="reset" id="reset" class="w3-button w3-round">Reset</button>
    </div>
    </form>
    <br><br><br>
        <a class="w3-link" href="../myresponse/"></a>
<div id="bottom"><p> 	&copy;  	&nbsp;2019 <a href="mailto:jangirkamal@iitb.ac.in">Kamal Jangir | IIT Bombay</a></p></div>
</body>
</html>