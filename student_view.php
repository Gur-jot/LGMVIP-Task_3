<?php
session_start();
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    

    <title>GITA || STUDENT LIST </title>
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
                <div class="add-class res mtable">
                    <h1>Students List</h1>
                    <div class="view-table">
                        <?php
                        include('connection.php');
                        include('session.php');

                        $sql = "SELECT `name`, `roll`, `class` FROM `students`";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            echo "<table>
                <tr>
                <th>NAME</th>
                <th>ROLL NO</th>
                <th>CLASS</th>
                </tr>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['roll'] . "</td>";
                                echo "<td>" . $row['class'] . "</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "0 Students";
                        }
                        ?>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>