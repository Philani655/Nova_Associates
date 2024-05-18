<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page_3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
     integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">
    <link href="../css/properties.css" rel="stylesheet">
  </head>
  <body>

  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="../images/logo.jpg" alt="Logo" width="150" height="80" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
            <ul class="navbar-nav nav-underline ml-auto fs-6 fw-bold">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.html">HOME</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="../php/properties.php">PROPERTIES</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../php/about_us.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../php/login.php"><i class="fa fa-sign-in"></i>LOGIN</a>
                </li>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../php/register.php"><i class="fa fa-user-plus"></i>REGISTER</a>
                </li>
            </ul>
         </div>
      </div>
    </nav>
</section>

    <div class="container-fluid text-center bg-grey mt-3">
        <h1 class="fw-bold">Nova Properties And Designs</h1>
        <h3 class="mb-5">Our Designs</h3>
    <div class="row text-center mb-3">
        <div class="col-sm-4">
        <div class="thumbnail">
            <a href="../php/plan1.php"><img src="../images/slide1/image1.jpg " alt="image1"></a>
            <p><strong>3 bedroom flat house plan</strong></p>
            <p></p>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="thumbnail">
            <a href="../php/plan14.php"><img src="../images/slide2/slide2-1.jpg"></a>
            <p><strong>Morden flat house plan</strong></p>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="thumbnail">
            <a href="../php/plan15.php"><img src="../images/slide3/slide3-1.jpg"></a>
            <p><strong>A fanciable house design</strong></p>
        </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-sm-4">
        <div class="thumbnail">
            <a href="../php/plan16.php"><img src="../images/slide4/slide4-1.jpg"></a>
            <p><strong>1 eight corner rondavels and garage</strong></p>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="thumbnail">
            <a href="../php/plan17.php"><img src="../images/slide5/slide5-1.jpg"></a>
            <p><strong>Morden flat house plan</strong></p>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="thumbnail">
            <a href="../php/plan18.php"><img src="../images/slide6/slide6-1.jpg"></a>
            <p><strong>2 eight corner rondavels</strong></p>
        </div>
        </div>
    </div>

    <div class="next-page">
        <a href="page2.php" class="previous round">&#8249;</a>
        <a href="page4.php" class="next round">&#8250;</a>
    </div>

    <div class="container-fluid bg-grey">
    <h2 class="text-center mt-4">CONTACTS</h2>
    <div class="row">
        <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Newcastle 2940, Blauubosch</p>
        <p><i class="fa fa-mobile" aria-hidden="true"></i> +27 66 144 9631</p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i> sfundozulu105@gmail.com</p>
        </div>
        <div class="col-sm-5">
        <div class="row">
            <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group mb-3">
            <button class="btn btn-default pull-right bg-secondary" type="submit">Send</button>
            </div>
        </div>
        </div>
    </div>
    </div>

    <footer class="text-center bg-dark">
    <div class="container pt-4">
        <section class="mb-4 bg-black.bg-gradient">
        <a
            class="btn btn-link btn-floating btn-lg text-body-emphasis m-1"
            href="https://www.facebook.com/sfundo.zulu.90857"
            role="button"
            data-mdb-ripple-color="dark"
            style="background-color: #3b5998; border-radius: 50px; height: 50px; width: 50px"
            ><i class="fa-brands fa-facebook"></i
        ></a>

        <a
            class="btn btn-link btn-floating btn-lg text-body-emphasis m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            style="background-color: #2a2a30; border-radius: 50px; height: 50px; width: 50px;"
            ><i class="fa-brands fa-x-twitter"></i
        ></a>

        <a
            class="btn btn-link btn-floating btn-lg text-body-emphasis m-1"
            href="https://www.instagram.com/nova_properties_and_designs/"
            role="button"
            data-mdb-ripple-color="dark"
            style="background-color: #ac2bac; border-radius: 50px; height: 50px; width: 50px"
            ><i class="fa-brands fa-instagram"></i
        ></a>

        </section>
        </div>
        
        <div class="text-center p-3 bg-dark">
            <small class="text-white-50">Copyright &copy;2024 Nova Associates. All rights reserved</small>
        </div>
   
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>