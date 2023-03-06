<style>
  body {
    background-image: url(images/salad.jpg);
    color: white;
    text-align: center;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    mmargin-top: 90px;

  }

  #content {
    width: 80%;
    height: 100%;
    margin: 0 auto;

  }

  .top {
    /* margin-left: 10%; */
    height: auto !important;
    color: white;


  }

  .mt-5 {
    font-size: 17px;
  }

  #Linediv {
    display: contents;
  }

  .form-control:active,
  .form-control:focus {
    border: none;
    outline: none;
    box-shadow: none;
  }

  h1 {
    font-family: 'Dancing Script', cursive;
    font-size: 55px;
  }


  h2 {
    font-size: 25px;
    color: rgb(255, 119, 0);
  }

  a,
  nav a:visited,
  nav a:active {
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-weight: bold;
  }

  a:hover {
    color: rgb(255, 138, 4);
  }

  nav {

    /* margin-top: 10px; */
    /* width: 85%; */
    /* margin-left: 135px; */
    pposition: fixed;
    width: 85%;
    font-weight: bold;
  }

  #navend {
    border-right: 2px solid gray;
    padding-right: 5px;
  }

  .dropdown-item {
    font-size: 20px;
  }

  .navbar li {
    margin-left: 5px;
    margin-right: 5px;
  }

  #facebook,
  #twitter {
    padding-left: 5px;
  }

  .modal-footer p,
  .overlay .btn p {
    padding-top: 6px;
  }

  /* image hover*/
  .imagehover2 {
    position: relative;
    width: 100%;
  }

  .image2 {
    display: block;
    width: 100%;
    height: 100%;
  }

  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: transparent;
  }

  .imagehover2:hover .overlay {
    opacity: 1;
  }

  .text2 {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
  }

  #footer1 {
    margin: 0 auto;
    background-color: rgb(172, 107, 72);
    height: 100%;
    color: white;
    text-align: center;
    ffont-size: 20px;
    ppadding-left: 5px;
    display: flex;
    padding: 0 10% 5px 10%;
  }

  h3 {
    font-family: 'Frutiger', cursive;
    font-size: 35px;
  }

  #footer3text {
    padding-left: 12%;
  }

  #footer2 {
    margin: 0 auto;
    bbackground-color: rgb(49, 44, 44);
    color: white;
    text-align: center;
    font-size: 19px;
    padding-top: 5px;
    hheight: 270px;
    bbackground-image: url(images/back2.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .carousel-image {
    height: 308.49px;
    wwidth: 290px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

  #Dubai {
    smargin-left: 250px;
  }

  #footer3 {
    margin: 0 auto;
    vbackground-color: rgb(56, 56, 56);
    height: 100%;
    color: white;
    text-align: start;
    font-size: 15px;
    padding-left: 5px;
    padding-top: 15px;
    height: 346px;
    background-image: url(images/back4.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  }

  hr.style1 {
    border-top: 4px solid #fefefe;
  }

  #firstcol {
    padding: 15px 0 0 0;
  }

  .AppStore {
    width: 100px;
  }

  @media (min-width: 1200px) {
    .container {
      width: 100%;
    }
  }

  @media (max-width: 791px) {
    nav {
      /* margin-top: 20px; */
      /* width: 85%; */
      /* margin-left: 0; */
      position: relative;
      justify-content: center;
    }
  }
</style>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php echo $title ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Sofia+Sans:wght@200&display=swap"
    rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../CSS_files/Home page.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png">
  <link rel="stylesheet" href="../CSS_files/style.css">
  <link rel="stylesheet" href="../CSS_files/registr.css">
  <link rel="stylesheet" href="../CSS_files/register.css">
  <script src="../js/register.js"></script>
  <script src="../js/BookaTable.js"></script>


  <link rel="icon" href="https://png.pngtree.com/png-vector/20220623/ourmid/pngtree-food-logo-png-image_5297921.png">

  <style>
    label {
      color: white;
    }
  </style>
</head>

<div class="">
  <div class="top">
    <nav class="navbar navbar-expand-sm navbar-dark fs-3">
      <div class="container-fluid">
        <img class="" src="images/R3.png" alt="Moroccan tomato salad" width="100px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="index.php">
                <p style="color: rgb(255, 106, 0);"><b>HOME</b></p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="">ABOUT US</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle nav-link text-light" href="#" role="button"
                data-bs-toggle="dropdown">MENU</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item text-white bg-dark" href="index-food.php">FOOD</a></li>
                <li><a class="dropdown-item text-white bg-dark" href="index-salad.php">SALAD</a></li>
                <li><a class="dropdown-item text-white bg-dark" href="index-drink.php">DRINK</a></li>
                <li><a class="dropdown-item text-white bg-dark" href="ex4.php">Exercise4</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="Bookatable.php">RESERVATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link text-light" href="login.php">Login</a>
            </li>
        
            <li class="nav-item" id="navend">
              <a class="nav-link nav-link text-light" href="">BLOG</a>
            </li>
            <li class="nav-item" id="facebook">
              <a class="nav-link nav-link text-light" href="#"><i class="bi bi-facebook"></i></i></a>
            </li>
            <li class="nav-item" id="twitter">
              <a class="nav-link nav-link text-light" href="#"><i class="bi bi-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
