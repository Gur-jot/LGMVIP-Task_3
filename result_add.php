<?php
session_start();
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    

    <title>Guru Nank SEN. Sec. School || ADD RESULT</title>
    <link rel="stylesheet" href="Stylesheets/style2.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>
        <div class="main_content">
            
            <div class="info">

                <div class="add-class res">
                    <h1>Add Result</h1>
                    <form action="" method="post">
                        <?php
                        include('connection.php');

                        $class_result = mysqli_query($conn, "SELECT `name` FROM `stream`");
                        echo '<select name="class">';
                        echo '<option selected disabled>Select Stream</option>';
                        while ($row = mysqli_fetch_array($class_result)) {
                            $display = $row['name'];
                            echo '<option value="' . $display . '">' . $display . '</option>';
                        }
                        echo '</select>'
                        ?>
                        <input class="text-input" type="text" name="Roll" placeholder="Enter Roll Number">
                        <input class="sub-input" type="text" name="subject1" placeholder="Enter Subject Name">
                        <input class="marks-input" type="number" name="marks1" placeholder="Marks">
                        <input class="sub-input" type="text" name="subject2" placeholder="Enter Subject Name">
                        <input class="marks-input" type="number" name="marks2" placeholder="Marks">
                        <input class="sub-input" type="text" name="subject3" placeholder="Enter Subject Name">
                        <input class="marks-input" type="number" name="marks3" placeholder="Marks">
                        <input class="sub-input" type="text" name="subject4" placeholder="Enter Subject Name">
                        <input class="marks-input" type="number" name="marks4" placeholder="Marks">
                        <input class="sub-input" type="text" name="subject5" placeholder="Enter Subject Name">
                        <input class="marks-input" type="number" name="marks5" placeholder="Marks">
                        <br><input class="button" type="submit" value="Publish">
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
<?php

if (isset($_POST['Roll'])) {
    $roll = $_POST['Roll'];
    $s1 = $_POST['subject1'];
    $s2 = $_POST['subject2'];
    $s3 = $_POST['subject3'];
    $s4 = $_POST['subject4'];
    $s5 = $_POST['subject5'];
    $m1 = $_POST['marks1'];
    $m2 = $_POST['marks2'];
    $m3 = $_POST['marks3'];
    $m4 = $_POST['marks4'];
    $m5 = $_POST['marks5'];

    if (!isset($_POST['class']))
        $class = null;
    else
        $class = $_POST['class'];

    // validation
    if (empty($roll) or empty($class)   or empty($m1)  or empty($s1) or empty($m2)  or empty($s2) or empty($m3)  or empty($s3) or empty($m4)  or empty($s4) or empty($m5)  or empty($s5)) {
        if (empty($roll))
            echo '<p class="error-s">Please enter Roll Number</p>';
        if (empty($class))
            echo '<p class="error-s">Please select Class</p>';
        if (empty($m1)  or empty($s1) or empty($m2)  or empty($s2) or empty($m3)  or empty($s3) or empty($m4)  or empty($s4) or empty($m5)  or empty($s5))
            echo '<p class="error-s">Please enter all Subjects with their marks</p>';

        exit();
    }
    $name_check = null;
    $name_sql = mysqli_query($conn, "SELECT `name` FROM `students` WHERE `roll`='$roll' AND `class`='$class'");
    while ($row = mysqli_fetch_assoc($name_sql)) {
        $name_check = $row['name'];
    }
    if (empty($name_check)) {
        echo '<script language="javascript">';
        echo 'alert("Student Details are not avaliable. Kindly add the student first")';
        echo '</script>';
        exit();
    }

    $sql = "INSERT INTO `result`(`Roll`, `CLASS`, `Subject1`, `Marks1`, `Subject2`, `Marks2`, `Subject3`, `Marks3`, `Subject4`, `Marks4`, `Subject5`, `Marks5`) VALUES ('$roll','$class','$s1','$m1','$s2','$m2','$s3','$m3','$s4','$m4','$s5','$m5')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Failed to insert Details")';
        echo '</script>';
?>
        <script>
            window.location.replace("result_add.php");
        </script>
    <?php
    } else {
        echo '<script language="javascript">';
        echo 'alert("Successful")';
        echo '</script>';
    ?>
        <script>
            window.location.replace("result_add.php");
        </script>
<?php
    }
}
?>
