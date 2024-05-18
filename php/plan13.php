<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan_13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">
    <link href="../css/plan1.css" rel="stylesheet">
</head>
<body>

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="../images/logo.jpg" alt="Logo" width="150" height="80" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
            <ul class="navbar-nav nav-underline ml-auto fs-6 fw-bold">
                <li>
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
    
<div class="container-fluid">
        <form id="paymentForm" action="../php/customer_order_file.php" method="post" class="mx-auto">
            <div class="row">
                <div class="col-sm-6 mt-4">
                    <h3 class="fw-bold">Morden flat house design</h3>
                    <p class="mt-4">
                       A design contained: Base garage, Dining and Lounge, 4 Bedroom, 2 Bathroom and 1 Open Kitchen
                    </p>
                    <p class="display-flex"><strong>From R2,000.00</strong></p>

                    <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                            <button class="btn btn-dark me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Buy</button>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title mt-3 w-100">Place an order for: <br>10 bedroom morden flat house design</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                            <div class="modal-body">
                                       
                                                    <h5 class="text-center">Printing & Deliver</h5>
                                                    <p class="text-center fw-light">
                                                    This plan is delivered in digital format (PDF) which you can download
                                                    and and the link will be sent to your email. We also offer:
                                                    Printing & Courier the Prints to your door We charge <b>R50.00</b> / Page 
                                                    plus <b>R100.00</b> for courier.
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-sm-6 mt-1">
                                                            <select class="rounded p-2" name="price">
                                                                <option id="price" value="2100">Digital copy (PDF)</option>
                                                                <option id="price" value="2050">Printing</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 mt-3 ps-5">
                                                            <p>Sub Total : <b>ZAR</b> </p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="id" value="13">
                                                    <input type="hidden" name="document" value="../house_plan_documents/Flat Roofs Double Story House Plan.pdf">
                                                    <input type="hidden" name="name" value="Morden flat house design">
                                                    <p class="text-center mt-3">Total Order: <b>R2,000.00</b></p>
                                                    <div class="modal-footer">
                                                        <button type="button" onclick="submit_form()" class="btn btn-secondary btn-lg">Next</button>
                                                    </div>
                                                
                                            </div>
                                    </div>
                                </div>
                            </div>
                        <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#myModalPrice">Pricing</button>
                            <div class="modal" id="myModalPrice">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title mt-3 w-100">Non Approval<br><b>R2,000.00</b></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ul>
                                                <li>Site Plan</li>
                                                <li>Dimensioned Floor Plans</li>
                                                <li>Roof layout</li> 
                                            </ul>
                                        </div>
                                        <div class="modal-footer justify-content-md-center">
                                            <button type="button" onclick="submit_form()" class="btn btn-secondary btn-lg" id="myModal">Place an order</button>
                                        </div>
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title mt-3 w-100">Municipal<br><b>R2,000.00 plus R400 for enquiry</b></h4>
                                        </div>
                                        <div class="modal-body">
                                            <ul>
                                                <li>Municipal approvals are handled by Nova.</li>
                                                <li>Municipal approvals are not compulsory 
                                                    if the project will be based in an area where there are no municipal
                                                    rules and regulations. Unless a commercial property.
                                                </li>
                                            </ul>  
                                        </div>
                                        <div class="modal-footer justify-content-md-center">
                                            <button type="button" onclick="submit_form_order()" class="btn btn-secondary btn-lg" id="myModal">Place an order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            
                <div id="carouselExampleIndicators" class="carousel carousel-dark slide col-sm-6">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="../images/slide12/slide12-1.webp" class="d-block w-100" alt="image1">
                    </div>
                    <div class="carousel-item">
                    <img src="../images/slide12/slide12-2.webp" class="d-block w-100" alt="image2">
                    </div>
                    <div class="carousel-item">
                    <img src="../images/slide12/slide12-3.webp" class="d-block w-100" alt="image3">
                    </div>
                    <div class="carousel-item">
                    <img src="../images/slide12/slide12-4.webp" class="d-block w-100" alt="image4">
                    </div>
                    <div class="carousel-item">
                    <img src="../images/slide12/slide12-5.webp" class="d-block w-100" alt="image5">
                    </div>
                    <div class="carousel-item">
                    <img src="../images/slide12/slide12-6.webp" class="d-block w-100" alt="image6">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-black" style="--bs-bg-opacity: 1;" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-black" style="--bs-bg-opacity: 1;" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
        </form>
    </div>
    
    <?php include 'footer.php'; ?>

    <script src="../javascript/submit_payment_form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>