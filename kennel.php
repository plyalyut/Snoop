<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Congrats, You Signed Up as a Kenel Owner</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Snoop</strong> by Snoop</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Congrats, You Signed Up as a Kenel Owner</h1>
									</header>

									<span class="image main"><img src="images/sunboi.jpg" alt="" /></span>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>
              </section>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php
$host = 'snoopserv.mysql.database.azure.com';
$username = 'snoop@snoopserv';
$password = 'hackharvard20!7';
$db_name = 'snoop';
#$serverName = "snoop.database.windows.net";
#$connectionOptions = array(
#		"Database" => "Snoop",
#		"Uid" => "snoop",
#		"PWD" => "hackharvard20!7"
#);
//Establishes the connection
#$conn = sqlsrv_connect($serverName, $connectionOptions);
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//fetch all the form data
$name = htmlspecialchars($_GET['demo-name']);
$email = htmlspecialchars($_GET['demo-email']);

echo($name);
echo($email);

if ($stmt = mysqli_prepare($conn, "INSERT INTO shelter (ShelName, Email) VALUES (?, ?)")) {
mysqli_stmt_bind_param($stmt, 'ssd', $name, $email);
mysqli_stmt_execute($stmt);
printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
mysqli_stmt_close($stmt);
}

#//put data into server
#$data= "INSERT INTO shelter (ShelName, Email)
#VALUES ($name, $email)";

#$postResults= sqlsrv_query($conn, $data);
#echo ("Reading data from table" . PHP_EOL);
#if ($postResults === FALSE)
#    die( print_r( sqlsrv_errors(), true));
mysqli_close($conn);
#sqlsrv_free_stmt($postResults);
?>
