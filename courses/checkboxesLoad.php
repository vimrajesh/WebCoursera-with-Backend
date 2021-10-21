<?php
    include '../assets/php/db_connection.php';
    $conn = OpenCon();

    $email = $_POST["email"];
    $course_name = $_POST["course_name"];

    $select_query = "SELECT completion_status, course_tasks
                        from user_enrolled_courses JOIN courses     
                        ON user_enrolled_courses.course_id = courses.course_id
                        WHERE  user_enrolled_courses.email = '$email' AND 
                        courses.course_name = '$course_name'";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);
    $completion_status =$row["completion_status"];
    $course_tasks = $row["course_tasks"];
    echo $completion_status. " ". $course_tasks;
    
    CloseCon($conn);
?>