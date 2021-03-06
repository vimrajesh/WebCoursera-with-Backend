<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SQL Query</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="jstable.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/webcoursera/assets/css/styles.css" />
</head>

<body>
    <header id="headerLocation"></header>
    <div class="container mt-4 mb-5" id="profileCourses" style="margin:0 auto!important;">
        <!-- <form class="p-4 p-md-4 border rounded-3 bg-light" method="post"> -->
            <label for="query" class="display-4 mt-4" style="font-weight: 500">Enter your own SQL Query</label>
            <hr id="hrBreak" />
            <textarea type="text" id="query" name="query" placeholder="Enter your SQL Query" maxlength="512" cols="150" rows="5" required></textarea>
            <br>
            <button class="btn btn-md btn-primary" id ="submitButton" >Submit</button>
            <button class="btn btn-md btn-warning" id ="resetButton" >Reset</button>
        <!-- </form> -->
        <hr>
        <div id="queryDetails" style="font-size: 1.2em; font-style: italic">
        </div>
        <div id="tableSample" style="text-align:left!important;">
        </div>
    </div>
    
    
    <p id="footerLocation"></p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="jstable.min.js"></script>
    <script src="../assets/js/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>