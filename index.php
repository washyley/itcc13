<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ITCC 13 PROJECT</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans+Mono:wght@300&display=swap" rel="stylesheet">

</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">JoashQuotes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active bg-dark" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-dark" href="#first">Quotes of the Week!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-dark" href="#about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-dark" href="#third">Submit Quote</a>
        </li>
       
        
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators bg-transparent">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pp1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>TOP 1!</h3>
        <p>“We cannot solve problems with the kind of thinking we employed when we came up with them.”
        — Albert Einstein
        </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pp2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>TOP 2!</h3>
        <p>“Learn as if you will live forever, live like you will die tomorrow.”— Mahatma Gandhi</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pp3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>TOP 3!</h3>
        <p>“When you change your thoughts, remember to also change your world.”—Norman Vincent Peale</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <div id="about.php"></div>
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
              <img src="images/pic1.jpg" class="img-fluid aboutimg">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
              <h2 class="display-4">JoashQuotes!</h2>
              <p clas="py-3">Share your best quote to display! The "JoashQuotes" page is a greate place to share your quotes and it also display the best quote of the Week! 
                The reason for this is to enocourage people and to make them feel better when they are having a bad day!</p>
              
          </div>
      </div>
    </div>
</section>
<section class="my-5 bg-dark text-light">
    <div class="py-5">
        <h2 class="text-center"><b>Quotes of the Week!</b></h2>
        <div id="first"></div>
    </div>
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
              <img class="card-img-top " src="images/a2.png" alt="Card image">
              <div class="card-body">
                  <h4 class="card-title text-dark">Murphy Almuete</h4>
                  <p class="card-text text-dark">"It is better to fail in originality than to succeed in imitation."</p>
                  
                          <div class="popup" id="popup-1">
                              <div class="overlay"></div>
                                   <div class="content">
                                    <div class="close-btn" onclick="togglePopup1()">&times;
                                    </div>
                                        <h1>Murphy Almuete's Profile</h1>
                                        <p>Username:MurphyA 
                                          <br>
                                           Email:murphy@gmail.com
                                           <br>
                                           Mobile Number:123321412
                                        </p>
                              </div>
                            
                                    <button onclick="togglePopup1()">See Profile</button>

                                   </div>
  </div>
</div>

          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
              <img class="card-img-top" src="images/a1.png" alt="Card image">
              <div class="card-body">
                  <h4 class="card-title text-dark">Augustine Sabunod</h4>
                  <p class="card-text text-dark">"Success is not final; failure is not fatal: It is the courage to continue that counts."</p>
                  


                  <div class="popup" id="popup-2">
                              <div class="overlay"></div>
                                   <div class="content">
                                    <div class="close-btn" onclick="togglePopup2()">&times;
                                    </div>
                                        <h1>Augustine Sabunod's Profile</h1>
                                        <p>Username:Abunod
                                          <br>
                                           Email:August@gmail.com
                                           <br>
                                           Mobile Number:612312312312
                                        </p>
                              </div>
                            
                                    <button onclick="togglePopup2()">See Profile</button>

                                   </div>





  </div>
</div>

          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
              <img class="card-img-top " src="images/f1.png" alt="Card image">
              <div class="card-body">
                  <h4 class="card-title text-dark">Noah Sanblas</h4>
                  <p class="card-text text-dark">“I never dreamed about success. I worked for it.”</p>
                  



                  <div class="popup" id="popup-3">
                              <div class="overlay"></div>
                                   <div class="content">
                                    <div class="close-btn" onclick="togglePopup3()">&times;
                                    </div>
                                        <h1>Noah Sanblas's Profile</h1>
                                        <p>Username:Noahs
                                          <br>
                                           Email:NoseBlas@gmail.com
                                           <br>
                                           Mobile Number:91231265123
                                        </p>
                              </div>
                            
                                    <button onclick="togglePopup3()">See Profile</button>

                                   </div>





  </div>
</div>

          </div>
      </div>  
    </div> 
</section>

<section class="my-5 bg-dark text-light">
    <div class="py-5">
        <div id="third"></div>
        <h2 class="text-center">Submit your quote!</h2>
    </div>
    <div class="w-50 m-auto ">
      
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email ID</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile Number</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Your Quote</label>
          <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
</section> 
<footer>
  <p class="p-3 bg-dark text-light text-center">JoashQuotes</p>
</footer>   

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>