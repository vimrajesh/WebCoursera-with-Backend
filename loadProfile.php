<?php
    include 'assets/php/db_connection.php';
    $conn = OpenCon();

    $email = $_POST["email"];

    $select_query = "SELECT c.course_name, c.course_description, c.course_tasks,
                        cf.name, u.completion_status, c.url, c.image
                        from user_enrolled_courses as u JOIN courses as c
                        JOIN course_faculty as cf
                        ON u.course_id = c.course_id
                        AND c.course_faculty_id = cf.course_faculty_id
                        WHERE  u.email = '$email'";
    $result = mysqli_query($conn, $select_query);

    if(mysqli_num_rows($result) > 0){
        $answer = array();
        while($row = mysqli_fetch_assoc($result))
        {
            // $x = array_keys($row);
            // foreach ($x as $array_key) {
            //     echo $array_key;
            // }            
            array_push($answer,
            array("course_name" => $row["course_name"],
                "course_description" => $row["course_description"],
                "course_tasks" => $row["course_tasks"],
                "fac_name" => $row["name"],
                "completion_status" => $row["completion_status"],
                "url" => $row["url"],
                "image" => $row["image"])
            );

        }
        echo json_encode($answer);
    }
    else{
        echo "Does not exist";
    }
    
    CloseCon($conn);
