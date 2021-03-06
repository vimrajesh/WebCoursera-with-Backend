$(window).on("load", function () {
    let course_name = $("title")[0].innerText;
    console.log(course_name);
    let email = getCookie("email");

    $.ajax({
        method: "POST",
        url: "courses_registered_count.php",
        data: {
            course_name: course_name
        },
        success: function (data) {
            let registeredUsers = document.querySelector("#registeredUsers");
            // registeredUsers.innerHTML = `Registered Users for ${course_name}: ${data}`;
            registeredUsers.innerHTML = `Enrolled Users for ${course_name} course : ${data}`;
            // registeredUsers.innerHTML = `${data} Users have already joined ${course_name} course. Register soon.`;
            console.log("Success fetched registered users!");
        }
    });

    $.ajax({
        method: "POST",
        url: "checkboxesLoad.php",
        data: {
            email: email,
            course_name: course_name
        },
        success: function (data) {
            if (data === "Does not exist") {
                console.log(`${course_name} not registered by ${email}`);
                $("#registerButton").css("display","block");
                $("#profile-tab").css("display", "none");
                $("#contact-tab").css("display", "none");
            } else {
                let completion_status = data.split(" ");
                let total_tasks = parseInt(completion_status[1]);
                completion_status = completion_status[0];
                let x = $("input:checkbox");
                completion_status = completion_status.split(",");
                for (let i = 0; i < total_tasks; i++) {
                    if (completion_status[i] == "1") {
                        x[i].checked = true;
                    }
                }
            }
            console.log("Success!");
        }
    });
})

$("input:checkbox").change(function () {
    let course_name = $("title")[0].innerText;
    let email = getCookie("email");
    let val = this.checked ? 1 : 0;
    let index = $(this).attr('name').replace(/[^0-9]/g, "");

    $.ajax({
        method: "POST",
        url: "updateCourseTask.php",
        data: {
            val: val,
            email: email,
            index: index,
            course_name: course_name
        },
        success: function (data) {
            if(data.match(/^All tasks/)){
                if(!alert(data)){
                    window.location.reload();
                }                
            }
            console.log("Success!");
        }
    });
});

$("#registerButton").on("click", function () {
    let course_name = $("title")[0].innerText;
    let email = getCookie("email");
    if(email !== ""){
    if (confirm(`Do you want to register for the ${course_name} course?`)) {
        $.ajax({
            method: "POST",
            url: "registerCourse.php",
            data: {
                email: email,
                course_name: course_name
            },
            success: function (data) {
                if(data === "Successfully Registered."){
                    console.log("Success!");
                    $("#profile-tab").css("display", "block");
                    $("#contact-tab").css("display", "block");
                    $("#registerButton").css("display","none"); 
                    window.location.reload();   
                }
                else{
                    alert("Could not register. Try again.");
                }
                
            }
        });   
    }} else{
        alert("Kindly login before registering.")
    }
})