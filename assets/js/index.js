/*jshint esversion: 6 */


// To get a cookie in Javascript
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    // console.log(ca);
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function levenshtein(a, b) {
    if (a.length === 0) return b.length;
    if (b.length === 0) return a.length;

    var matrix = [];

    // increment along the first column of each row
    var i;
    for (i = 0; i <= b.length; i++) {
        matrix[i] = [i];
    }

    // increment each column in the first row
    var j;
    for (j = 0; j <= a.length; j++) {
        matrix[0][j] = j;
    }

    // Fill in the rest of the matrix
    for (i = 1; i <= b.length; i++) {
        for (j = 1; j <= a.length; j++) {
            if (b.charAt(i - 1) == a.charAt(j - 1)) {
                matrix[i][j] = matrix[i - 1][j - 1];
            } else {
                matrix[i][j] = Math.min(matrix[i - 1][j - 1] + 1, // substitution
                    Math.min(matrix[i][j - 1] + 1, // insertion
                        matrix[i - 1][j] + 1)); // deletion
            }
        }
    }

    return matrix[b.length][a.length];
}

// const levenshteinDistance = (s, t) => {
//     if (!s.length) return t.length;
//     if (!t.length) return s.length;
//     const arr = [];
//     for (let i = 0; i <= t.length; i++) {
//         arr[i] = [i];
//         for (let j = 1; j <= s.length; j++) {
//             arr[i][j] =
//                 i === 0
//                     ? j
//                     : Math.min(
//                         arr[i - 1][j] + 1,
//                         arr[i][j - 1] + 1,
//                         arr[i - 1][j - 1] + (s[j - 1] === t[i - 1] ? 0 : 1)
//                     );
//         }
//     }
//     return arr[t.length][s.length];
// };

const links = {
    "html": "courses/html_course.html",
    "hyper text markup language": "courses/html_course.html",
    "ajax": "courses/ajax_course.html",
    "python": "courses/python_course.html",
    "java": "courses/java_course.html",
    "cascading": "courses/css_course.html",
    "stylesheets": "courses/css_course.html",
    "css": "courses/css_course.html",
    "javascript": "courses/javascript_course.html",
    "homepage": "index.php",
    "home": "index.php",
    "terms": "terms.html",
    "privacy policy": "privacy_policy.html",
    "help and support": "faq.html",
    "help": "faq.html",
    "support": "faq.html",
    "about us": "about_us.html",
    "about": "about_us.html",
    "contact us": "contact_us.html",
    "contact": "contact_us.html",
    "login": "login/login.php",
    "sign in": "login/login.php",
    "sign up": "login/signup.php"
};

function searchQuery() {
    let q = document.querySelector("#SearchBar").value.trim().toLowerCase().replace(/[^\w ]/, '');
    // console.log(q);
    if(q.length < 2){
        return false;
    }
    obj = Object.keys(links);
    let textDiff = 999;
    let searchText = "";
    for (let i = 0; i < obj.length; i++) {
        if (q === obj[i]) {
            searchText = obj[i];
            break;
        }
        let l = levenshtein(q, obj[i]);
        // console.log(obj[i] + " : " + l);
        if (l < textDiff) {
            searchText = obj[i];
            textDiff = l;
        }
    }
    // console.log(links[searchText])
    // setTimeout(() => {
    //     location.href = '/webcoursera/' + links[searchText];
    // }, 1500);
    window.location.href = "/webcoursera/" + links[searchText];
    return true;
}


// To set a cookie in Javascript
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// For locations in root directory for header and footer

document.querySelector("#footerLocation").innerHTML =
    `<footer class="pt-4 pb-1 mt-5 text-white bg-dark" style="background-color: white;text-align: left;">
            <div class="row row-cols-sm-1 row-cols-md-3" style="color: white!important;">
                <div class="col-sm-6 col-md-3 mb-2 mx-4">
                    <h5>Browse</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/webcoursera/courses/html_course.html" class="nav-link p-0">HTML</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/courses/css_course.html" class="nav-link p-0">CSS</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/courses/javascript_course.html" class="nav-link p-0">JavaScript</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/courses/java_course.html" class="nav-link p-0">Java</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/courses/ajax_course.html" class="nav-link p-0">AJAX</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/courses/python_course.html" class="nav-link p-0">Python</a></li>
                    </ul>
                </div>

                <div class="col-sm-6 col-md-3 mb-2 mx-4">
                    <h5>More</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/webcoursera/terms.html" class="nav-link p-0">Terms</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/privacy_policy.html" class="nav-link p-0">Privacy Policy</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/faq.html" class="nav-link p-0">Help and Support</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/about_us.html" class="nav-link p-0">About Us</a></li>
                        <li class="nav-item mb-2"><a href="/webcoursera/contact_us.html" class="nav-link p-0">Contact Us</a></li>
                    </ul>
                </div>


                <div class="col-md-4 offset-md-1 mb-2 mx-4">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of the latest exciting courses from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="email" class="form-control" placeholder="Email address">
                            <button class="btn btn-light text-black" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-center py-4 border-top">
                <p>&copy; 2021 WebCoursera, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-light"
                                        href="https://twitter.com/udemy?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                            <path d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z"/>
                        </svg>
                    </a></li>
                    <li class="ms-3"><a class="link-light" href="https://www.instagram.com/udemy/">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px">
                            <path d="M 15 2 C 7.832 2 2 7.832 2 15 C 2 22.168 7.832 28 15 28 C 22.168 28 28 22.168 28 15 C 28 7.832 22.168 2 15 2 z M 11.666016 6 L 18.332031 6 C 21.457031 6 24 8.5420156 24 11.666016 L 24 18.332031 C 24 21.457031 21.457984 24 18.333984 24 L 11.667969 24 C 8.5429688 24 6 21.457984 6 18.333984 L 6 11.667969 C 6 8.5429688 8.5420156 6 11.666016 6 z M 11.666016 8 C 9.6450156 8 8 9.6459688 8 11.667969 L 8 18.333984 C 8 20.354984 9.6459688 22 11.667969 22 L 18.333984 22 C 20.354984 22 22 20.354031 22 18.332031 L 22 11.666016 C 22 9.6450156 20.354031 8 18.332031 8 L 11.666016 8 z M 19.667969 9.6660156 C 20.035969 9.6660156 20.333984 9.9640312 20.333984 10.332031 C 20.333984 10.700031 20.035969 11 19.667969 11 C 19.299969 11 19 10.700031 19 10.332031 C 19 9.9640312 19.299969 9.6660156 19.667969 9.6660156 z M 15 10 C 17.757 10 20 12.243 20 15 C 20 17.757 17.757 20 15 20 C 12.243 20 10 17.757 10 15 C 10 12.243 12.243 10 15 10 z M 15 12 A 3 3 0 0 0 15 18 A 3 3 0 0 0 15 12 z"/>
                        </svg>
                    </a></li>
                    <li class="ms-3"><a class="link-light" href="https://www.facebook.com/udemy/">
                        <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="30px" height="30px">
                            <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z"/>
                        </svg>
                    </a></li>
                </ul>
            </div>
        </footer>`;


document.querySelector("#headerLocation").innerHTML =
    `<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-3">
            <div class="container-fluid">
                <a class="navbar-brand hover-effect" href="/webcoursera/index.php">
                    <img src="/webcoursera/assets/images/logo.png" width="25" height="25" alt="..."/>
                    WebCoursera
                </a>
                <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li>
                            <a class="nav-link hover-effect" href="/webcoursera/courses/html_course.html">HTML</a>
                        </li>
                        <li>
                            <a class="nav-link hover-effect" href="/webcoursera/courses/css_course.html">CSS</a>
                        </li>
                        <li>
                            <a class="nav-link hover-effect" href="/webcoursera/courses/javascript_course.html"
                            >JavaScript</a
                            >
                        </li>
                        <li>
                            <a class="nav-link hover-effect" href="/webcoursera/courses/java_course.html"> Java</a>
                        </li>
                        <li>
                            <a class="nav-link hover-effect" href="/webcoursera/courses/ajax_course.html">AJAX</a>
                        </li>
                        <li>
                            <a class="nav-link hover-effect" href="/webcoursera/courses/python_course.html"
                            >Python</a
                            >
                        </li>
                    </ul>
                    <div class="d-flex">
                    <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            id="SearchBar"
                            name="SearchBar"
                            aria-label="Search"
                    />
                    <button class="css-button-sliding-to-left--green me-2"
                    onclick="return searchQuery()">
                        Search
                    </button>
                    </div>
                    <div class="d-flex justify-content-center login-front">
                        <a type="button" href="/webcoursera/login/login.php"
                        class="btn-md btn-nav btn btn-outline-info me-2 justify-content-evenly">
                            Login
                        </a>
                        <a type="button" href="/webcoursera/login/signup.php"
                        class="btn-md btn-nav btn btn-outline-warning justify-content-evenly">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </nav>`;
let user = getCookie("user");
if (user !== "") {
    if (screen.width < 992) {
        document.querySelector(".login-front").innerHTML =
            `<a type="button" href="javascript:void(0)"
        class="btn-md btn-nav btn btn-outline-info me-2 justify-content-evenly">
                <img class="me-md-1" src="/webcoursera/assets/images/placeholder.png" width="25px" height="25px" alt="...">
                <span class="style="color:white;">
                ${user}
        </a>
        <a type="button" href="/webcoursera/login/logout.php"
        class="btn-md btn-nav btn btn-outline-warning justify-content-evenly">
            Logout
        </a>
        `;

    } else {
        document.querySelector(".login-front").innerHTML =
            `
            <div class="collapse navbar-collapse me-md-2" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                    <img class="me-md-1" src="/webcoursera/assets/images/placeholder.png" width="30px" height="30px" alt="...">
                    <span class="style="color:white;">
                    ${user}
                </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="javascript:void(0)">Profile</a></li>
                    <li><a class="dropdown-item" href="/webcoursera/login/logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>

            </div>
        `;

    }
}

let docTitle = document.querySelector("title").innerText.toLowerCase();
let navLinks = document.querySelectorAll("a.nav-link.hover-effect");
for (let i = 0; i < navLinks.length; i++) {
    if (navLinks[i].innerText.toLowerCase() === docTitle) {
        navLinks[i].classList.add("active");
    }
}
