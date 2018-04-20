<?php

?>
<!DOCTYPE html>
<html lang="he">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS --> 
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">
  </head>

  <body>
   
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Teach - חזור לדף הבית</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">התחבר</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="sign_in.php">הרשם</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">מעט עלינו</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">צור קשר</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/new.jpeg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
                <button type="button" class="btn btn-info btn-lg float-center"  data-toggle="modal" data-target="#myModal">
                  <h3>הרשם כמורה</h3></button>
                               <!-- Trigger the modal with a button-student -->
              <button type="button" class="btn btn-info btn-lg float-center"  data-toggle="modal" data-target="#myModal">
                  <h3>הרשם כתלמיד</h3></button>
                     <!-- Modal -->
                     <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        
                       <!-- Modal content-->
                         <div class="modal-content">
                              <div class="modal-header">
                           <h4 class="modal-title "; style= "color: black" text-align: center; >Sign in</h4>
        </div>
        <div class="modal-body" style="color: black">
          <!--here-->
          <p>
              <div class="container">
                  <div class="row centered-form">
                  <div class="col-xs-8 col-sm-19 col-md-19 col-sm-offset-19 col-md-offset-2">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">פרטים אישיים </h3>
                       </div>
                       <div class="panel-body">
                        <form role="form">
                          <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                              </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                              </div>
                            </div>
                          </div>
          
                          <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                          </div>
          
                          <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                              </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                              </div>
                            </div>
                          </div>
                          
                          <input type="submit" value="Register" class="btn btn-info btn-block">
                        
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
          </p>
          <!--end here-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
            </div>
          </div>
        </div>
      </div>
                     <!-- Modal -->
                     <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        
                       <!-- Modal content-->
                         <div class="modal-content">
                              <div class="modal-header">
                           <h4 class="modal-title "; style= "color: black" text-align: center; >Sign in</h4>
        </div>
        <div class="modal-body" style="color: black">
          <!--here-->
          <p>
              <div class="container">
                  <div class="row centered-form">
                  <div class="col-xs-8 col-sm-19 col-md-19 col-sm-offset-19 col-md-offset-2">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">פרטים אישיים </h3>
                       </div>
                       <div class="panel-body">
                        <form role="form">
                          <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                              </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                              </div>
                            </div>
                          </div>
          
                          <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                          </div>
          
                          <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                              </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                              <div class="form-group">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                              </div>
                            </div>
                          </div>
                          
                          <input type="submit" value="Register" class="btn btn-info btn-block">
                        
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
          </p>
          <!--end here-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
            </div>
          </div>
        </div>
      </div>
      
    </header>

    <!-- Main Content 
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
          <p></p>
        </div>
      </div>
    </div>-->

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Olla & Tall 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.js"></script>

  </body>

</html>
