$(window).on("load", function () {
    let email = getCookie("email");
    $.ajax({
        method: "POST",
        url: "loadProfile.php",
        data: {
            email: email
        },
        success: function (data) {
            if (data === "Does not exist") {
                $(
                    `<div class="my-5" style="font-size: 1.25em;">
                        You have not registered for any courses yet. Kindly visit 
                        <a href="/webcoursera/index.php">homepage</a> to view all available courses.
                    </div>
                    `
                ).insertAfter("#hrBreak");
                if (screen.width >= 992) {
                    $("#footerLocation").css("position", "fixed");
                    $("#footerLocation").css("bottom", "0px");
                    $("#footerLocation").css("left", "0px");
                    $("#footerLocation").css("right", "0px");
                    $("#footerLocation").css("margin-bottom", "0px");
                }
            } else {
                let response = JSON.parse(data);
                response.forEach(element => {
                    let count = (element["completion_status"].match(/1/g) || []).length;
                    let percentage = Math.round((count / element["course_tasks"]) * 100 * 100) / 100;
                    $(`<div class="container bcontent" style="margin:auto!important; display:inline-block;">
                        <div class="card" style="max-width: 800px; display:inline-block;">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <img class="card-img" src=${element["image"]} alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title" >${element["course_name"]}</h5>
                                        <p class="card-text">${element["course_description"]}</p>
                                        </div>
                                        <div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <b>Offered by:</b> ${element["fac_name"]}, ${element["designation"]} at ${element["university"]}
                                            </li>
                                            <li class="list-group-item">
                                                <label for="progress"><b>Progress:</b> ${percentage}%</label><br>
                                                <progress id="progress" value="${count}" max="${element["course_tasks"]}"> ${count} </progress>
                                            </li>
                                        </ul>
                                        <a href=${element["url"]} class="btn btn-primary">View Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>`).insertAfter("#hrBreak")
                });

            }
            console.log("Success!");
        }
    });
})