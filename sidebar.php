<?php
session_start();
$name_user = $_SESSION['name'];
$desig = $_SESSION['designation'];
?>
<div class="sidebar">
    <h2>GITA</h2>
    <ul>
        <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
        <li class="dropdown"><a href=""><i class="fas fa-user"></i>Student</a>
            <ul>
                <li><a href="student_add.php"><i class="fas fa-plus"></i>Add</a></li>
                <li><a href="student_view.php"><i class="fas fa-eye"></i>View</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><i class="fas fa-poll"></i></i>Result</a>
            <ul>
                <li><a href="result_add.php"><i class="fas fa-plus"></i>Add</a></li>
                <li><a href="result_update.php"><i class="fas fa-pen"></i>Update</a></li>
                <li><a href="result_view.php"><i class="fas fa-eye"></i>View</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href=""><i class="fas fa-project-diagram"></i>Class</a>
            <ul>
                <li><a href="add_class.php"><i class="fas fa-plus"></i>Add Class</a></li>
            </ul>
        </li>
        <li id="adduser"><a href="user_add.php"><i class="fas fa-user-plus"></i>Add User</a></li>
    </ul>
    <div class="logout">
        <a href="logout.php" style="color: white"><i class="fas fa-sign-out-alt"></i>Logout</span></a>
    </div>
</div>