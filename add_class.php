<?php
session_start();
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


    <title>Guru Nanak || ADD CLASS </title>
    <link rel="stylesheet" href="Stylesheets/style2.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>
        <div class="main_content">
            <div class="header">Shri Guru Nanak Sen. Sec. School</div>
            <div class="info">
                <div class="add-class">
                    <h1>Add Class</h1>
                    <form action="" method="post">
                        <input class="text-input" type="text" name="class_name" placeholder="Enter Class"><br>
                        <input class="button" type="submit" value="Add Class">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
include('connection.php');


if (isset($_POST['class_name'])) {
    $name = $_POST["class_name"];

    // validation
    if (empty($name)) {
        echo '<p class="error-s">Please enter class</p>';
        exit();
    }

    $sql = "INSERT INTO `Stream` (`name`) VALUES ('$name')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Failed to Update ! Try Again")';
        echo '</script>';
?>
        <script>
            window.location.replace("add_class.php");
        </script>
    <?php
    } else {
        echo '<script language="javascript">';
        echo 'alert("Successful")';
        echo '</script>';
    ?>
        <script>
            window.location.replace("add_class.php");
        </script>
<?php
    }
}

?>