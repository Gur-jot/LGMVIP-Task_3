<?php
	$servername = "localhost:8811";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password);
	$db = mysqli_select_db($conn,'gurunanak');