<!DOCTYPE html>
<html lang="en">
<head>


                 <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <script src="{{ url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
                 <!-- END additional CSS -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan your task</title>
</head>
<body>
 
            <!--  Header -->
<div class="container-fluid p-0">
    <img src = "{{ url('img/banner.jpg') }}" style="width: 100%;" >
</div>
             <!-- End Header -->

            <!--   Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Page d'acceuil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Planifiez une tache</a></li>
                              <li><a class="dropdown-item" href="#">Taches en cours</a></li>
                              <li><a class="dropdown-item" href="#">Taches terminer</a></li>
                              
                              
                            </ul>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Planifiez une tache</a>
                        </li>
                       
                                <li class="nav-item">
                          <a class="nav-link" href="#">Taches en cours</a>
                        </li>
                                <li class="nav-item">
                          <a class="nav-link" href="#">Taches terminer</a>
                        </li>
                                
                                        <li class="nav-item">
                          <a class="nav-link" href="#">Nouveautés</a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link" href="#">Contacter nous</a>
                        </li>
                      </ul>
                      <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                      </form>
                    </div>
                  </div> 
              </nav>
            <!--  End Navbar-->

<!-- Sidenav & Body & Sidbar  -->
<div class = "container" >
    <div class ="row" style = "margin-top: 20px;">
    
                      <!-- 4.1)  Sidenav avec 4 colonnes -->
    <div class="col-4">



        <div class="card border-primary  mb-3" style="max-width: 18rem;">
            <div class="card-header bg-primary" style="color:white;">Menu principale</div>
            <div class="card-body text-primary" style="padding:0px;">
        <div class="vertical-menu" >
           
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
            <a href="#">Link 4</a>
          </div>
          </div></div>
         

        <div class="card border-primary  mb-3" style="max-width: 18rem;">
            <div class="card-header bg-primary" style="color:white;">Formulaire de connexion</div>
            <div class="card-body text-primary">

                
 <!--  Login Form -->

 <div class="container login-container" >
    <div class="row">
        <div class="col-md-6 login-form-1" style="width:290px;">
            
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email *" value="" />
                </div>
                <br />
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" value="" />
                </div>
                <br />
                <div class="form-group" style="width:200px;">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <br />
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Mot de passe oublier?</a>
                </div>
            </form>
        </div>
        </div>
    </div>
    


    <!-- End Login Form -->





            </div>
          </div> 
     

             

      

</div>



                                <!-- End Sidenav-->
    
    
                         <!-- BODY avec 8 colonnes-->
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;">
                Description
              </div>
              <div class="card-body">
                <p class="card-text">
                Your Content Here ! ... Your Content Here ! ... Your Content Here !...  ...<br />
                <br /><br /><br /><br /><br /><br />
                Your Content Here ! ... Your Content Here ! ... Your Content Here ! ...<br />
                <br /><br /><br /><br /><br /><br /><br />
				Your Content Here ! ... Your Content Here ! ... Your Content Here ! ...<br />
            </p>
                      <a href="#" class="btn btn-primary">Lire plus !</a>
              </div>
    </div>
    </div>
    </div>
    </div>
    <br />
                                         <!-- End Body-->
    

 <div class = "container-fluid p-0" >
 <div class ="row" style = "margin-top: 20px;">                                       
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Inscrivez vous pour recevoir des nouvelles</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Adresse email</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              S'abonner
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://www.dashmake.com/fr">dashmake.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</div>



</body>
</html>