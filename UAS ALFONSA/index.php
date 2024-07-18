<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <style>
    #cat{
        width: 150px;
        border-radius: 16px;
    }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ms-auto">
        <div class="container-fluid justify-content-center w-100 " style="margin-left: 100px;">
        <a class="navbar-brand" href="#"><img style="height: 55px;" src="logo.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Montserrat'; font-weight: 700; margin-right: 5px; margin-left: 10px; margin-top: 5px; color: #12225B;">Sports Catalog</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Archery</a></li>
                    <li><a class="dropdown-item" href="#">Badminton</a></li>
                    <li><a class="dropdown-item" href="#">Baseball</a></li>
                    <li><a class="dropdown-item" href="#">Basketball</a></li>
                    <li><a class="dropdown-item" href="#">Billiard</a></li>
                    <li><a class="dropdown-item" href="#">Boxing</a></li>
                    <li><a class="dropdown-item" href="#">Fishing</a></li>
                    <li><a class="dropdown-item" href="#">Football</a></li>
                    <li><a class="dropdown-item" href="#">Golf</a></li>
                    <li><a class="dropdown-item" href="#">Gym & Fitness</a></li>
                    <li><a class="dropdown-item" href="#">Hiking & Camping</a></li>
                    <li><a class="dropdown-item" href="#">Ice Hockey</a></li>
                    <li><a class="dropdown-item" href="#">Ping Pong</a></li>
                    <li><a class="dropdown-item" href="#">Self-Defense Arts</a></li>
                    <li><a class="dropdown-item" href="#">Soccer</a></li>
                    <li><a class="dropdown-item" href="#">Swimming</a></li>
                    <li><a class="dropdown-item" href="#">Volley</a></li>
                    <li><a class="dropdown-item" href="#">Yoga & Pilates</a></li>
                </ul>
                </li>
                <form class="d-flex" style="margin-left: 40px;">
                    <input class="form-control me-2" style="width: 800px; height: 40px; margin-top: 5px" type="search" placeholder="Search" aria-label="Search">
                </form>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="shopping-cart.png" style="width: 25px; margin-top: 5px; margin-right: 5px; margin-left: 10px;"></a>  
                </li>
                <li class="nav-item" style="font-family: 'Poppins', sans-serif;">
                    <a href="login.php"><button style="background-color: #212A3E; border-color: #212A3E; margin-top: 10px; margin-left: 20px;" type="button" class="btn btn-primary btn-sm">LOG IN</button></a>
                    <a href="register.php"><button style="margin-top: 10px; margin-left: 10px;" type="button" class="btn btn-secondary btn-sm">REGISTER</button></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</head>
<body style="background-color: #EEEEEE;">
    <div class="container w-100 mt-4 mb-5">
        <div class="row ">
            <div class=" ">
                <img src="banner.jpg" style="width: 1300px; border-radius: 20px;" class="img-fluid" alt="...">
            </div>
        <div class="d-flex mt-4" style="background-color: #ffffff; border-radius: 20px; height: 275px; box-shadow: 0 0 8px rgba(0,0,0,0.1);">
            <div class="card-body mt-3" id="cat-body">
                <div class="d-flex">
                    <div class="cat-cont ms-3">
                        <h3 class="card-title ms-1 mb-3" style="font-family: 'Krona One', sans-serif; color: #12225B;">Category Selection</h3>
                        <img id="cat" src="boxing.jpg"  class="img-fluid" alt="Responsive image">
                        <img id="cat" src="footbal.jpg"  class="img-fluid ms-2" alt="Responsive image">
                        <img id="cat" src="pingpong.jpg"  class="img-fluid ms-2" alt="Responsive image">  
                    </div>
                </div>
            </div>   

            <div class="nav-cont mt-3">
                <h3 class="card-title mb-2" style="margin-left: 100px; font-family: 'Krona One', sans-serif; color: #12225B;">Pre-Order</h5>
                    <div class="card" style="margin-left: 90px; width: 700px; height: 190px;">
                        <div class="card-body d-flex">
                        <div class="mb-3">
                            <label for="" class="form-label text-left">Nama</label>
                            <input type="" class="form-control" id="exampleInputPassword1" readonly>
                            <button type="button" class="btn btn-light mt-2">Kirim</button>
                        </div>
                        <div class="ms-3 ">
                            <label for="" class="form-label text-left">Barang</label>
                            <input type="" class="form-control" id="exampleInputPassword1" readonly>
                        </div>
                        <div class="ms-3 ">
                            <label for="" class="form-label text-left">Catatan</label>
                            <input type="" class="form-control" id="exampleInputPassword1" readonly>
                        </div>
                        </div>
                    </div> 
            </div> 
        </div>
        </div>
    </div>

    <div style="background-color: #ffffff; height: 425px;">
        <h3 class="shop-title d-flex" style="margin-left: 100px; font-family: 'Krona One', sans-serif; color: #12225B;">For You</h5>
        <div>
            <div style="margin-left: 100px; width: 225px; margin-top: 30px;" class="d-flex">
                <img id="shop" src="redbauer.jpg"  class="img-fluid" alt="Responsive image" style="border-radius: 8px;">
                <img id="shop" src="busch.jpg"  class="img-fluid ms-5" alt="Responsive image" style="border-radius: 8px;">
                <img id="shop" src="easton.jpg"  class="img-fluid ms-5" alt="Responsive image" style="border-radius: 8px;">
                <img id="shop" src="bauer.jpg"  class="img-fluid ms-5" alt="Responsive image" style="border-radius: 8px;">  
                <img id="shop" src="graf.jpg"  class="img-fluid ms-5" alt="Responsive image" style="border-radius: 8px;">
            </div>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
          <section class="mb-2">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/highsxhooler/" role="button"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-pinterest"></i></a>
          </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-white" href="#">EPEDIA</a>
        </div>
    </footer>
</body>
</html>