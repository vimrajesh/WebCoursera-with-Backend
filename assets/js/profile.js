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
                    `<div class="my-5" style="font-size: 1.5em;">
                        You have not registered for any courses yet. Kindly visit 
                        <a href="/webcoursera/index.php">homepage</a> to view all available courses.
                    </div>
                    `
                ).insertAfter("#hrBreak")
                $("#footerLocation").css("position","fixed");
                $("#footerLocation").css("bottom","0px");
                $("#footerLocation").css("left","0px");
                $("#footerLocation").css("right","0px");
                $("#footerLocation").css("margin-bottom","0px");

                
            } else {
                // console.log("helloelse");
                // alert(JSON.stringify(data));
                let response = JSON.parse(data);
                response.forEach(element => {
                    console.log(element);
                });

            }
            console.log("Success!");
        }
    });
})