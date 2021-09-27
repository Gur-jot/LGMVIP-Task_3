<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linking CSS -->
    <link rel="stylesheet" href="Stylesheets/index_page.css">


    <!-- title -->
    <title> Guru Nanak || Login </title>
</head>

<body>
    <div class="title">
        <span>Result Management System</span>
    </div>


    <div class="main">
        <div class="faculty-login">
            <form action="" method="post" name="login">
                <fieldset>
                    <legend class="heading">Faculty Login</legend>
                    <input type="text" name="userid" placeholder="User ID" autocomplete="off">
                    <input type="password" name="password" placeholder="Password" autocomplete="off">
                    <input type="submit" value="Login">
                </fieldset>
            </form>
        </div>
        <div class="result">
            <form action="Student_result.php" method="GET">
                <fieldset>
                    <legend class="heading">Result</legend>

                    <?php
                    include('connection.php');

                    $class_result = mysqli_query($conn, "SELECT `name` FROM `stream`");
                    echo '<select name="class">';
                    echo '<option selected disabled>Select Class</option>';
                    while ($row = mysqli_fetch_array($class_result)) {
                        $display = $row['name'];
                        echo '<option value="' . $display . '">' . $display . '</option>';
                    }
                    echo '</select>'
                    ?>

                    <input type="text" name="roll" placeholder="Roll Number">
                    <input type="submit" value="Get Result">
                </fieldset>
            </form>
        </div>
    </div>

</body>

</html>
<?php
include("connection.php");
session_start();

if (isset($_POST["userid"], $_POST["password"])) {
    $username = $_POST["userid"];
    $password = $_POST["password"];
    $sql = "SELECT name,designation FROM user WHERE userid='$username' and Password= '$password'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $designation = $row["designation"];
    }


    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['designation'] = $designation;

        header("Location: home.php");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Invalid Username or Password")';
        echo '</script>';
    }
}
?>