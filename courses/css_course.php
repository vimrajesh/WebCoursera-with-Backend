<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="/webcoursera/assets/images/logo.png" />
    <title>CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/webcoursera/assets/css/styles.css">

</head>

<body>
    <header id="headerLocation"></header>

    <div class="container mt-4 mb-5">
        <h1 class="display-4" style="font-weight: 500;">CSS</h1>
        <hr />
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/webcoursera/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">CSS</li>
            </ol>
        </nav>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Course Recording
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Course Material
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card mb-3 mt-3" style="max-width: 840px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/webcoursera/assets/images/CSS.png" class="img-fluid rounded-start pt-3" alt="...">
                        </div>
                        <div class="col-md-8">
                            <h5 class=" card-header text-center mt-2 bg-secondary text-white bg-secondary text-white">
                                CSS
                            </h5>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item list-group-item-header">
                                        Course Features
                                    </li>
                                    <li class="list-group-item">
                                        Advanced Online CSS training for beginners.
                                    </li>
                                    <li class="list-group-item">
                                        Offered by Dr.P Arjun, Professor at University of Michigan
                                    </li>
                                    <li class="list-group-item">
                                        Rating: 4.0/5<br />
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFBF00" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFBF00" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFBF00" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFBF00" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFBF00" class="bi bi-star" viewBox="0 0 16 16">
                                                <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="list-group-item" id="registerButton" style="display:none;">
                                        <button type="button" class="btn btn-primary btn-md btn-block">Register</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button"  id="registeredUsers" class="btn btn-outline-primary btn-md btn-block" style="cursor: default;"></button>
                                    </li>
                                </ul>
                            </div>
                            <!-- <h5 class="card-title">CSS</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Short
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Medium
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Long
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <table class="table table-bordered table-striped mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">SNo.</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col" style="width: 8.33%;">Checkbox</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>CSS Crash Course 1</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a>
                                    </td>
                                    <td>3 mins</td>
                                    <td><input type="checkbox" name="myTextEditBox1" /></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>CSS Crash Course 2</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                    <td>30 mins</td>
                                    <td><input type="checkbox" name="myTextEditBox2" /></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CSS Crash Course 3</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                    <td>30 mins</td>
                                    <td><input type="checkbox" name="myTextEditBox3" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table table-bordered table-striped mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">SNo.</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col" style="width: 8.33%;">Checkbox</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>Introduction to CSS</td>
                                <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                <td>1 hr</td>
                                <td><input type="checkbox" name="myTextEditBox4" /></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Intermediate CSS</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                    <td>45 mins</td>
                                    <td><input type="checkbox" name="myTextEditBox5" /></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Advanced CSS</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                    <td>1 hr</td>
                                    <td><input type="checkbox" name="myTextEditBox6" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table table-bordered table-striped mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">SNo.</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col" style="width: 8.33%;">Checkbox</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Introduction to CSS - With Hands on</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                    <td>4hr 30 mins</td>
                                    <td><input type="checkbox" name="myTextEditBox7" /></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Intermediate CSS - With Hands on</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                    <td>3hr 30 mins</td>
                                    <td><input type="checkbox" name="myTextEditBox8" /></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Advanced CSS - With Hands on</td>
                                    <td><a class="link-primary" href="https://www.youtube.com/watch?v=ieTHC78giGQ">Link</a></td>
                                    <td>4hr</td>
                                    <td><input type="checkbox" name="myTextEditBox9" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-striped table-hover table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">S No.</th>
                            <th scope="col">Book Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Link</th>
                            <th scope="col" style="width: 8.33%;">Checkbox</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Fundamentals of CSS</td>
                            <td>Dr. P Arjun</td>
                            <td><a class="link-primary" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">Link</a>
                            </td>
                            <td>
                                <input type="checkbox" name="myTextEditBox10" />
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Learning CSS made easy</td>
                            <td>Thomas A. Powell</td>
                            <td><a class="link-primary" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">Link</a>
                            </td>
                            <td><input type="checkbox" name="myTextEditBox11" /></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>CSS for Dummies</td>
                            <td>Dr. Neelima Sajeev</td>
                            <td><a class="link-primary" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference">Link</a>
                            </td>
                            <td><input type="checkbox" name="myTextEditBox12" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <p id="footerLocation"></p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/webcoursera/assets/js/index.js"></script>
    <script src="/webcoursera/assets/js/courses.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>