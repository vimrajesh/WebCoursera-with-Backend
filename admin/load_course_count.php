<?php
    include '../assets/php/db_connection.php';
    $conn = OpenCon();
    /*
    
        SELECT us.name, us.email, c.course_name, c.course_tasks,
                        cf.name as fac_name, u.completion_status, c.image
                        from user_enrolled_courses as u 
                        JOIN courses as c
                        JOIN course_faculty as cf
                        JOIN user_detail as us
                        ON u.course_id = c.course_id
                        AND c.course_faculty_id = cf.course_faculty_id
                        AND us.email = u.email
    */
    // course_name, course_faculty_name, course_faculty_university, count_registrants
    $select_query = "SELECT c.course_name, cf.name, cf.university, count(*) as enrolled_students 
                        from user_enrolled_courses as u 
                        JOIN courses as c
                        JOIN course_faculty as cf
                        ON u.course_id = c.course_id
                        AND c.course_faculty_id = cf.course_faculty_id
                        GROUP BY u.course_id";
    $result = mysqli_query($conn, $select_query);
    if(mysqli_num_rows($result) > 0)
    {    $answer = array();

        while($row = mysqli_fetch_assoc($result))
        {   
            array_push($answer,
              array("course name" => $row["course_name"],
                "faculty name" => $row["name"],
                "university offering" => $row["university"],
                "total registered students" => $row["enrolled_students"]
                )
            );
        }
        echo json_encode($answer);
      }
      else
      {
          echo "Does not exist";
      }
      
      CloseCon($conn);
?>