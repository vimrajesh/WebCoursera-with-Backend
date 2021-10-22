<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/webcoursera/assets/css/styles.css" />
</head>

<body>
  <header id="headerLocation"></header>
  <div class="container mt-4 mb-5" id="profileCourses" style="margin:0 auto!important;">
    <h1 class="display-4 mt-4" style="font-weight: 500">Dashboard</h1>
    <hr id="hrBreak" />

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

  </div>
  <p id="footerLocation"></p>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- .. -->
  <script src="../assets/js/admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>