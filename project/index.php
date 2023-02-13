
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hands Organization</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container-fluid">

            <nav class="navbar fixed-top navbar-expand-sm navbar-dark ">
                <img src="images/care.png" width="70px" height="70px">
                
                <a href="index.html" class="navbar-brand mb-0 h1 cool-link" style="color: white;">HELPING HANDS ORGANIZATION</a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link ml-2 cool-link" style="color: white;">Home</a>

                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link ml-2 cool-link" style="color: white;">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="mission.html" class="nav-link ml-2 cool-link" style="color: white;">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a href="contactus.html" class="nav-link ml-2 cool-link" style="color: white;">Contact
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light ml-2 mt-1"><a href="paymode.html">Donate</a> </button>
                        </li>
                        <li class ="nav-item">
                            <button type="button" class="btn btn-light ml-2 mt-1"><a href="logout.php">Log out</a></button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section>
        <div id="carousel_1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel_1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_1" data-slide-to="1"></li>
                <li data-target="#carousel_1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/pic2.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block" style="color:black;">
                        <h1><b>The Helping Hands Organization</b></h1>
                        <p style="font-size:35px;"><b>We are so glad to have you here!</b></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/img10.png" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block" style="color:white;">
                        <h1><b>Giving</b></h1>
                        <p style="font-size: 35px;"><b>is not just about making a donation.Its about making a difference</b>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/img14.png" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>We make</h1>
                        <p style="font-size: 35px;">a living from what we get,but we make a life by what we give</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel_1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>



    <!-- bootstrap -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

</body>

</html>