<?php
    include '../assets/php/db_connection.php';
    $conn = OpenCon();
    if(count($_POST) > 0){
        $val = $_POST["val"] ;
        $email = $_POST["email"];
        $course_name = $_POST["course_name"];
        $index = $_POST["index"]*2 -2;
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $select_query = "SELECT completion_status, courses.course_id, courses.course_tasks 
                        from user_enrolled_courses JOIN courses     
                        ON user_enrolled_courses.course_id = courses.course_id
                        WHERE  user_enrolled_courses.email = '$email' AND 
                        courses.course_name = '$course_name'";
        $result = mysqli_query($conn, $select_query);
        $row = mysqli_fetch_assoc($result);
        $completion_status = $row["completion_status"];
        $completion_status[$index] = $val;
        $course_id = $row['course_id'];
        if(substr_count($completion_status,"1") == $row["course_tasks"]){
            $delete_query = "DELETE from user_enrolled_courses 
                        WHERE  email = '$email' AND 
                        course_id = '$course_id'";
            $result1 = mysqli_query($conn, $delete_query);
            echo "All tasks of the course are successfully completed. You will now be deregistered from the course.";
        }
        else{  
            $update_query = "UPDATE `user_enrolled_courses`
                            SET `completion_status` = '$completion_status'
                            WHERE `email` = '$email' AND `course_id`='$course_id'";

            $result1 = mysqli_query($conn, $update_query);
        }
        

    }
    CloseCon($conn);
?>