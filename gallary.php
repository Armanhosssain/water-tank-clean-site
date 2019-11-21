<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/uikit.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/a.png">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>gallery</title>
</head>
<body>
  <?php include('header.php') ?>
  <!-- start page title -->
  <section id="top-title" class="text-center text-info">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-4 scale mt-5 pt-5">
          <h2 class="text-light">About us</h2>
          <p class="animated infinite pulse lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, alias?
          </p>
        </div>
        <div class="col-1"></div>
        <div class="col-4 mt-5 pt-5">
          <p class="animated infinite flash">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, alias? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
      </div>
  </section>
  <!--end page title -->
    <!-- start gallery -->
  <section id="gallery" class="py-5" uk-lightbox>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/prj1.jpg">
              <img src="img/prj1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/prj2.jpg">
              <img src="img/prj2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/prj2.jpg">
              <img src="img/prj2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/prj2.jpg">
              <img src="img/prj2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/prj2.jpg">
              <img src="img/prj2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div>
            <a href="img/prj1.jpg">
              <img src="img/prj1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end gallery -->
  <?php include('footer.php') ?>
   <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
</body>
</html>