<?php
    include '../assets/php/db_connection.php';
    $conn = OpenCon();

    $select_query = "SELECT ud.name, ud.email from user_detail as ud";
    $result = mysqli_query($conn, $select_query);
    if(mysqli_num_rows($result) > 0)
    {    $answer = array();

        while($row = mysqli_fetch_assoc($result))
        {   
            $email = $row["email"] ;
            $fetch_courses = "SELECT GROUP_CONCAT(c.course_name SEPARATOR ', ') as enr_courses
            from courses as c 
            join user_enrolled_courses as uc
            on uc.course_id = c.course_id
            where uc.email = '$email'";
            $result1 = mysqli_query($conn, $fetch_courses);
            $courses = "None";
            if(mysqli_num_rows($result1) > 0){
              $courses = mysqli_fetch_assoc($result1)["enr_courses"];
            }
            array_push($answer,
              array("name" => $row["name"],
                "email" => $row["email"],
                "courses enrolled" => $courses
                )
            );
        }
        // $x = array_keys($row);
        // foreach ($x as $array_key) {
        //     echo $array_key;
        // }      
        echo json_encode($answer);
      }
      else
      {
          echo "Does not exist";
      }
      
      CloseCon($conn);
?>