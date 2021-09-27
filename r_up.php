<?php
include('connection.php');
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
    $class = $_POST['Class'];

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

    $sql = "UPDATE `result` SET `Subject1`='$s1',`Marks1`='$m1',`Subject2`='$s2',`Marks2`='$m2',`Subject3`='$s3',`Marks3`='$m3',`Subject4`='$s4',`Marks4`='$m4',`Subject5`='$s5',`Marks5`='$m5' WHERE `Roll`='$roll' AND `CLASS`='$class'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Failed to insert Details")';
        echo '</script>';
?>
        <script>
            window.location.replace("result_update.php");
        </script>
    <?php
    } else {
        echo '<script language="javascript">';
        echo 'alert("Result Updated Successfully")';
        echo '</script>';
    ?>
        <script>
            window.location.replace("result_update.php");
        </script>
<?php
    }
}
?>