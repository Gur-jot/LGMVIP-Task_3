<?php
session_start();
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    

    <title>GITA || ADD USER</title>
    <link rel="stylesheet" href="Stylesheets/style2.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <?php

    $designation = $_SESSION['designation'];
    if ($designation != "admin") {
        echo '<p class="error"><i class="fas fa-exclamation-triangle"></i> You are not authorized to add user</p>';
        echo '<p class="error-m">You will be redirected to home page in 5 seconds.</p>';
    ?>
        <script>
            setTimeout(function() {
                window.location.href = 'home.php';
            }, 5000);
        </script>
    <?php
        exit();
    }
    ?>

    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>
        <div class="main_content">
            <div class="header">Shri Guru Nanak Sen. Sec. School</div>
            <div class="info">
                <div class="add-class">
                    <h1>Add USER</h1>
                    <form action="" method="post">
                        <input class="text-input" type="text" name="name" id="Stream" placeholder="Enter Name">
                        <select name="desig" id="">
                            <option value="" disabled selected>Select Designation</option>
                            <option value="Exam Department">Exam Department</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Principle">Principle</option>
                        </select>
                        <input class="text-input" type="text" name="userid" id="Stream" placeholder="Enter User ID">
                        <input class="text-input" type="password" name="password" id="Stream" placeholder="Enter Password"><br>
                        <input class="button" type="submit" value="Add User">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
include('connection.php');

if (isset($_POST['name'], $_POST['userid'], $_POST['password'])) {
    $name = $_POST['name'];
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    if (!isset($_POST['desig']))
        $desig = null;
    else
        $desig = $_POST['desig'];

    // validation
    if (empty($name) or empty($userid) or empty($desig)  or empty($password)  or !preg_match("/^[a-zA-Z ]*$/", $name)) {
        if (empty($name))
            echo '<p class="error-s">Please enter name</p>';
        if (empty($desig))
            echo '<p class="error-s">Please select Designation</p>';
        if (empty($userid))
            echo '<p class="error-s">Please enter User ID</p>';
        if (empty($password))
            echo '<p class="error-s">Please enter password</p>';

        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo '<p class="error-s">No numbers or symbols allowed in name</p>';
        }
        exit();
    }
    $name_check = null;
    $name_sql = mysqli_query($conn, "SELECT `name` FROM `user` WHERE `userid`='$userid'");
    while ($row = mysqli_fetch_assoc($name_sql)) {
        $name_check = $row['name'];
    }
    if (!empty($name_check)) {
        echo '<script language="javascript">';
        echo 'alert("User ID already exist please choose different userid")';
        echo '</script>';
        exit();
    }

    $sql = "INSERT INTO `user` VALUES ('$name', '$desig', '$userid', '$password')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Failed to insert Details")';
        echo '</script>';
?>
        <script>
            window.location.replace("user_add.php");
        </script>
    <?php
    } else {
        echo '<script language="javascript">';
        echo 'alert("Successful")';
        echo '</script>';
    ?>
        <script>
            window.location.replace("user_add.php");
        </script>
<?php
    }
}
?>