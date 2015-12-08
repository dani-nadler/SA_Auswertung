<?php
        include_once '../db/connection.php';
        mysqli_select_db($con, "sa_ausw");
        $res = mysqli_query($con, "select * from student");

