<?php
    if (isset($_POST['query'])) {
        include '../assets/php/db_connection.php';

        $conn = OpenCon();
        //check connection
        if (mysqli_connect_errno()) {
            echo 'Failed to connect to database: ' . mysqli_connect_error();
        } else {
            //echo 'Connected Successfully!!';
            $query = $_POST['query'];
            if ($conn->query($query) == true) {
                // echo "The Query you provided " . $query;
                $w1 = mysqli_query($conn, $query);
                $count =  mysqli_num_fields($w1);
                $i = 0;
                $t =  mysqli_fetch_fields($w1);
                // echo $count. "<br>"; 
                echo "<table id='example'>
                '<thead>'
                    <tr>";

                while ($fieldinfo = mysqli_fetch_field($w1)) {
                    echo "<th>" . $fieldinfo->name . "</th>";
                }
                echo "</tr></thead><tbody>";
                $i = 0;
                while ($row1 = mysqli_fetch_array($w1)) {
                    echo "<tr>";
                    for (; $i < $count; $i = $i + 1) {
                        echo "<td>" . $row1[$i] . "</td>";
                    }
                    echo "</tr>";
                    // echo $row1[1];
                    $i = 0;
                }
                echo "</tbody></table>";
            } else {
                echo "ERROR: "."$conn->error";
            }
        }
        CloseCon($conn);
    }
?>