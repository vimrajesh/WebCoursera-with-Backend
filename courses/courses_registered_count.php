<?php
    include '../assets/php/db_connection.php';
    $conn = OpenCon();

    $course_name = $_POST["course_name"];

    $select_query = "SELECT COUNT(*) as count_users
                        from user_enrolled_courses JOIN courses     
                        ON user_enrolled_courses.course_id = courses.course_id
                        WHERE courses.course_name = '$course_name'";
    $result = mysqli_query($conn, $select_query);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $registered_users =$row["count_users"];
        echo $registered_users;
    }
    else{
        echo "Does not exist";
    }
    
    CloseCon($conn);
?>