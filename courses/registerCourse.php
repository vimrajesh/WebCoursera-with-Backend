<?php
    include '../assets/php/db_connection.php';
    $conn = OpenCon();

    $email = $_POST["email"];
    $course_name = $_POST["course_name"];

    $select_query = "SELECT course_tasks,course_id
    from courses WHERE course_name = '$course_name'";
    $result = mysqli_query($conn, $select_query);
    $row = mysqli_fetch_assoc($result);

    $course_tasks = $row["course_tasks"];
    $course_id = $row["course_id"];

    $completion_status = "";
    for ($x = 0; $x < $course_tasks -1 ; $x++)
    {
        $completion_status = $completion_status."0,";
    }
    $completion_status = $completion_status."0";

    // echo $course_id." ".$course_tasks." ".$completion_status." ".$email; 

    $insert_query = "INSERT INTO `user_enrolled_courses` (`completion_status`, `email`, `course_id`)
    VALUES ('$completion_status', '$email', '$course_id')";

    $result1 = mysqli_query($conn, $insert_query);

    if($result1){
        echo "Successfully Registered.";
    }
    else{
        echo "Could not register. Please try again.";
    }
    
    CloseCon($conn);
?>