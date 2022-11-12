<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="./img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container-fluid header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="list-group list-group-horizontal-md">
                        <li class="list-group-item mx-2"><i class="fa-solid fa-envelope"></i> info@bauet.ac.bd</li>
                        <li class="list-group-item"><i class="fa-solid fa-phone"></i> +8801708503504, +8801708503510</li>
                    </ul>
                </div>
                <div class="col-md-7 d-flex justify-content-end">
                    <ul class="list-group list-group-horizontal-md right-border">
                        <li class="list-group-item">
                            <a href="#"><i class="fa-brands fa-facebook-f small mx-2"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube small mx-2"></i></a>
                        </li>
                        <li class="list-group-item"><a href="#">Upcoming Events</a></li>
                        <li class="list-group-item"><a href="#">News Events</a></li>
                        <li class="list-group-item"><a href="#">Notice</a></li>
                        <li class="list-group-item"><a href="#">IEEE Student Branch</a></li>
                        <li class="list-group-item"><a href="#">Alumni</a></li>
                        <li class="list-group-item"><a href="#">Webmail</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>  

    <div class="container header">
        <div class="row">
            <div class="col-md-6">
                <img src="./img/logo.png" alt="logo">
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="login.php" class="btn btn-primary ">Login</a>
                    </div>
                    <div class="col-md-6">
                        <input type="search" id="search" class="form-control" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
        <a href="student/dashboard.php" class="btn btn-primary clearence-button">Clearence Form</a>
    </div>

    <div class="container-fluid nav-bg sticky">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Academic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Administration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Department</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Archive</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">IQAC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SDG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container marquee py-1">
        <div class="row py-1 d-flex align-items-center">
            <div class="col-md-2">
                <h6 class="small"><i class="fa-solid fa-bullhorn"></i> Important Notice:</h6>
            </div>
            <div class="col-md-10 d-flex align-items-center">
                <marquee class="small" behavior="scroll" direction="left"><i class="fa-solid fa-bullhorn"></i> নোটিশ- ১৩ তম ব্যাচের শিক্ষার্থীদের রেফার্ড-ইম্প্রভমেন্ট পরীক্ষা (ফল-2021) <i class="fa-solid fa-bullhorn"></i> Routine 1st Year 2nd Semester <i class="fa-solid fa-bullhorn"></i> Ref-Imp Examination Fall 2021  <i class="fa-solid fa-bullhorn"></i> নোটিশ, পবিত্র ঈদে মিলাদুন্নবী (স.) ছুটি  <i class="fa-solid fa-bullhorn"></i> Admission Circular Fall 2022 Revised  <i class="fa-solid fa-bullhorn"></i> Mid Term Examination</marquee>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="./img/slider1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./img/slider2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./img/slider3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./img/slider4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="./img/slider5.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4 notice">
                <div>
                    <ul class="list-group list-group-horizontal-md right-border">
                        <li class="list-group-item active"><a href="#"><i class="fa-solid fa-bullhorn"></i> Notice</a></li>
                        <li class="list-group-item"><a href="#"><i class="fa-solid fa-book"></i> Exam</a></li>
                        <li class="list-group-item"><a href="#"><i class="fa-solid fa-briefcase"></i> Tender</a></li>
                    </ul>
                </div>
                <div>
                    <div class="row notice-single mx-1">
                        <div class="col-md-2 text-center">
                            <h4>06</h4>
                            <h6>OCT</h6>
                            <h6>2022</h6>
                        </div>
                        <div class="col-md-10 d-flex align-items-center">
                            <h6>Routine 1st Year 2nd Semester Ref-Imp Examination Fall 2021</h6>
                        </div>
                    </div>
                    <div class="row notice-single mx-1">
                        <div class="col-md-2 text-center">
                            <h4>08</h4>
                            <h6>OCT</h6>
                            <h6>2022</h6>
                        </div>
                        <div class="col-md-10 d-flex align-items-center">
                            <h6>Admission Circular Fall 2022 Revised</h6>
                        </div>
                    </div>
                    <div class="row notice-single mx-1">
                        <div class="col-md-2 text-center">
                            <h4>11</h4>
                            <h6>OCT</h6>
                            <h6>2022</h6>
                        </div>
                        <div class="col-md-10 d-flex align-items-center">
                            <h6>বিশ্ববিদ্যালয়ের ছুটির মেয়াদ বৃদ্ধি প্রসংগে</h6>
                        </div>
                    </div>
                    <div class="row notice-single mx-1">
                        <div class="col-md-2 text-center">
                            <h4>15</h4>
                            <h6>OCT</h6>
                            <h6>2022</h6>
                        </div>
                        <div class="col-md-10 d-flex align-items-center">
                            <h6>Mid Term Examination (BBA, LLB, MA English)</h6>
                        </div>
                    </div>
                    <div class="row notice-single mx-1">
                        <div class="col-md-2 text-center">
                            <h4>18</h4>
                            <h6>OCT</h6>
                            <h6>2022</h6>
                        </div>
                        <div class="col-md-10 d-flex align-items-center">
                            <h6>Course Registration Form</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <h3>Welcome Message</h3>
                <hr class="hr">
                <div class="card my-4 text-center profile" style="width: 18rem;">
                    <img src="./img/imageprofile.jpg" class="card-img-top rounded-circle" alt="imageprofile">
                    <div class="card-body">
                        <h5 class="card-title">Brig Gen Prof M. Mustafa Kamal</h5>
                        <h6 class="card-title">Vice Chancellor</h6>
                        <hr class="hr1">
                        <p class="card-text">I take the privilege to express my deepest feeling of gratitude to Almighty for providing me the opportunity to serve as 2nd Vice Chancellor of this prestigious university..</p>
                        <a href="#" class="btn btn-primary">Read More <i class="fa-solid fa-arrow-right small"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>BAUET Video Gallery</h3>
                <hr class="hr">
                <div class="embed-responsive embed-responsive-16by9 my-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/jem87rtSTL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-3 pb-5 text-center">
        <h1>News & Events</h1>
        <h5 class="text-secondary mb-5">GLORIOUS CAMPUS LIFE & EVENTS</h5>
        <div class="row">
            <div class="col-md-3">
            <div class="card notice">
                <img src="./img/notice1.jpg" class="card-img-top">
                <div class="card-body">
                    <a href="#"><h5 class="card-title">Debate Competition 2021 held</h5></a>
                </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card notice">
                <img src="./img/notice2.jpg" class="card-img-top">
                <div class="card-body">
                    <a href="#"><h5 class="card-title">আন্তঃ বিশ্ববিদ্যালয় বিতর্ক প্রতিযোগিতা</h5></a>
                </div>
                </div>
            </div>
            <div class="col-md-3">
            <div class="card notice">
                <img src="./img/notice3.jpg" class="card-img-top">
                <div class="card-body">
                    <a href="#"><h5 class="card-title">‘ওয়েভার’ এর জন্য দরখাস্ত আহবান সামার-২০২২</h5></a>
                </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary mt-5 btn-bg">VIEW ALL <i class="fa-solid fa-arrow-right small"></i></a>
    </div>

    <div class="container pt-3 pb-5 text-center">
        <h1>Research</h1>
        <h5 class="text-secondary mb-5">“RESEARCH IS TO SEE WHAT EVERYBODY ELSE HAS SEEN, AND TO THINK WHAT NOBODY ELSE HAS THOUGHT.”</h5>
        <div class="row">
            <div class="col-md-4">
            <div class="card research">
                <img src="./img/research1.jpg" class="card-img-top">
                <div class="card-body">
                    <small>Posted on 06, Nov 2020</small>
                    <a href="#"><h5 class="card-title">COVID-19 Detection from Chest X-Ray Image using Deep Convolutional Neural Network</h5></a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card research">
                <img src="./img/research2.jpg" class="card-img-top">
                <div class="card-body">
                    <small>Posted on 06, Nov 2020</small>
                    <a href="#"><h5 class="card-title">High Performance Optical Character Recognition (OCR) Software for Digitizing Bengali Literature</h5></a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card research">
                <img src="./img/research3.jpg" class="card-img-top">
                <div class="card-body">
                    <small>Posted on 06, Nov 2020</small>
                    <a href="#"><h5 class="card-title">PLASTIC WASTE RECYCLING PRACTICE IN NATORE DISTRICT, BANGLADESH</h5></a>
                </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary mt-5 btn-bg">VIEW ALL <i class="fa-solid fa-arrow-right small"></i></a>
    </div>

    <div class="container-fluid footer pt-5 pb-3">
        <div class="container">
            <div class="row text-light text-center">
                <div class="col-md-5">
                    <h4>About BAUET</h4>
                    <hr class="hr2">
                    <img src="./img/BAUET-Logo.png" width="100px" height="100px">
                    <p class="small px-2 mt-2">Bangladesh Army University of Engineering & Technology (BAUET) the pioneer Technical Institutes of Armed Forces, started its journey from 2015. It was the visionary leadership of the Honorable Prime Minister of People’s Republic of Bangladesh Sheikh Hasina to establish a Technical Institute of Armed Forces.</p>
                </div>
                <div class="col-md-2">
                    <h4 class="text-start">Featured Links</h4>
                    <hr class="hr3">
                    <ul class="list-group">
                        <li class="list-group-item">About Us</li>
                        <li class="list-group-item">All Notice</li>
                        <li class="list-group-item">All News & Events</li>
                        <li class="list-group-item">Admission</li>
                        <li class="list-group-item">Contact</li>
                    </ul>
                </div>
                <div class="col-md-2">
                <h4 class="text-start">Links</h4>
                    <hr class="hr3">
                    <ul class="list-group">
                        <li class="list-group-item">Important Notice</li>
                        <li class="list-group-item">Exam Notice</li>
                        <li class="list-group-item">Campus Life/Gallery</li>
                        <li class="list-group-item">Job Notice</li>
                        <li class="list-group-item">All News & Events</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="text-start">Contact Us</h4>
                        <hr class="hr3">
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa-solid fa-house-user"></i> Qadirabad, Dayarampur</li>
                            <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> Natore-6431, Bangladesh</li>
                            <li class="list-group-item"><i class="fa-solid fa-phone"></i> +880 1708503510</li>
                            <li class="list-group-item"><i class="fa-solid fa-envelope"></i> registrar@bauet.ac.bd</li>
                            <li class="list-group-item"><i class="fa-solid fa-envelope"></i> registrarbauet@gmail.com</li>
                        </ul>
                </div>
            </div>
            <hr class="hr4">
            <div><p class="text-center text-light mt-3">Copyright ©2022, BAUET All Rights Reserved.</p></div>
        </div>
    </div>
    
</body>
</html>