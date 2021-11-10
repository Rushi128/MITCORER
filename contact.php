<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>MIT Railway Engineearing College</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MIT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Topics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Tachnology</a></li>
                            <li><a class="dropdown-item" href="#">Web </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Write for us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contact.php">contact us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <form action=" " method="POST">
    <div class="container my-4">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="Firstname" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="Lasttname" placeholder="Last name" aria-label="Last name">
            </div>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Tell us about yourself</label>
            <input type="text" name="Tellusaboutyourself" class="form-control" id="formGroupExampleInput" placeholder="Type about yourself">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">What we need to improve</label>
            <input type="text" name="Whatweneedtoimprove" class="form-control" id="formGroupExampleInput2" placeholder="Type here.">
            <div class="mb-3 my-4">
                <input type = "Submit">
            </div>
        </div>

    </div>
</form>
    <p>© 2017–2021 MIT, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php
$dbhost = "localhost"; 
$dbuser="root";
$dbpass="";
$dbname="mit_form";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die (mysqli_error());

if($_POST)
{
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lasttname'];
    $Tellusaboutyourself=$_POST['Tellusaboutyourself'];
    $Whatweneedtoimprove=$_POST['Whatweneedtoimprove'];

    $qry=mysqli_query($con,"INSERT INTO `rushi`(`Firstname`, `Lastname`, `Tellusaboutyourself`, `Whatweneedtoimprove`)  VALUES ('$Firstname','$Lastname','$Tellusaboutyourself','$Whatweneedtoimprove')" );

    if($qry==true)
    {
        $Rushi="<script>alert (' YOUR FORM WAS SUCCESSFULLY SUBMITTED')</script>";
        echo $Rushi;
    }

    else
    {
        echo "not ".mysqli_error();
    }

}
?>
