$(window).on("load", function () {
    let course_name = document.querySelector("title").innerText;
    let email = getCookie("email");
    $.ajax({
        method: "POST",
        url: "checkboxesLoad.php",
        data: {
            email: email,
            course_name: course_name
        },
        success: function (data) {
            if (data === "Does not exist") {
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
    let course_name = document.querySelector("title").innerText;
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
    let course_name = document.querySelector("title").innerText;
    let email = getCookie("email");
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
                // console.log(data)
                $("#profile-tab").css("display", "block");
                $("#contact-tab").css("display", "block");
                $("#registerButton").css("display","none");    
            }
            else{
                alert("Could not register. Try again.");
            }
            
        }
    });
})