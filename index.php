<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/navbar-fixed.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/blogo.png">
  <title>Banned Book</title>
</head>
<body>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top mx-auto py-3">
    <div class="container">
      <a class="navbar-brand" href="#booklogo">
        <img src="img/blogo.png" alt="Banned Book" class="img-fluid" width="50" height="50">
        <h3 class="d-inline align-middle">Banned Book</h3>
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#booklogo">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#authors">Meet The Author</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
 <!-- Subscribe Area -->
 <section id="subscribe" class="py-5">
    <div class="container">
      <form method="POST" action="process.php" class="row">
      <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <div class="form-group mb-0">
            <label style="color:#fff" for="shape">Shape: </label>
            <select name="shape" id="">
                <option value="circle">Circle</option>
                <option value="triangle">Triangle</option>
                <option value="rectangle">Rectangle</option>
            </select>
          </div>
        </div>
        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <div class="form-group mb-0"></div> 
        </div>
        <div class="col-lg-4">
          <div class="form-group mb-0">
            <label style="color:#fff" for="measurement">Measurement :</label>
            <input type="text" name="measurement" placeholder="Give your value" class="form-control form-control-lg">
          </div>
        </div>
         <!--
        <div class="col-lg-4 py-2 py-lg-0">
          <div class="form-group mb-0">
            <input type="email" placeholder="Email" class="form-control form-control-lg">
          </div>
        </div> -->
        <div class="col-lg-4">
          <button class="btn btn-primary btn-lg btn-block" value="" type="submit">
            <i class="fa fa-envelope-open-o"></i> Calculate Area
          </button>
        </div>
      </form>
    </div>
  </section>


  <footer id="footer-area" class="py-5 bg-primary text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p class="lead">Copyright &copy; 2019 | All right reserved.</p>
        <p class="lead">Designed by: <a class="text-light" target="_blank" href="http://fb.com/ahsanul.moyej">Ahsanul Moyej</a></p>
      </div>
    </div>
  </div>
</footer>
  <!-- JS SCRIPT -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
</body>
</html>