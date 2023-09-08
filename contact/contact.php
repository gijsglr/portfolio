<?php 
include ("../php_connect/conection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-md navbar-dark header fixed-top" style="background-color: #de5252;">
            <div class="container">
                <a href="../index/index.html" class="navbar-brand">Gijs Weijer</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-label="Expand Navigation">
                    <div class="navbar-toggler-icon"></div>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../index/index.html" class="nav-link " aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../projectpagina/projectpagina.html" class="nav-link" aria-current="page">Projecten</a>
                    </li>
                    <li class="nav-item">
                        <a href="../cv/cv.html" class="nav-link " aria-current="page">CV</a>
                    </li>
                    <li class="nav-item">
                        <a href="../contact/contact.html" class="nav-link active" aria-current="page">Contact</a>
                    </li>
                </ul>
               </div>
            </div>
        </nav>
    </section>
    <section class="mb-4">
        <div clas="container">
    
        <div class="row">
    
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
    
                    <div class="row">
    
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Naam</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">E-Mail</label>
                            </div>
                        </div>

    
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Onderwerp</label>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
    
                        <div class="col-md-12">
    
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Jouw Bericht</label>
                            </div>
    
                        </div>
                    </div>
    
                </form>
    
                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Grafisch Lyceum Rotterdam</p>
                    </li>
    
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>06 81 19 16 06</p>
                    </li>
    
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>089803@glr.nl</p>
                    </li>
                </ul>
            </div>
           
    
        </div>
    </div>
    </section>


</body>
</html>

<!--Nc969ud!5-->