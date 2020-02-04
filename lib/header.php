<?php
 $_SESSION['title1']="বই";
 $_SESSION['title2']="দোকান";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Old books | Home</title>
    
    <!-- Font awesome -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
    <header id="aa-header">
      <!--start headwe top--->
      <div class="aa-header-top" style="background-color: #eff7f2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-header-top-area">
                <!-- start header left-->
                <div class="aa-header-top-left">
                  <!--start language -->
                  <div class="aa-language">
                    <div class="dropdown">
                      <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expand="true">
                        <img src="" alt="">Language<span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-lablledby= "dropdownMenu1">
                        <li><a href="#"><img src="img/flag/english.jpg" alt="english flag">English</a></li>
                        <li><a href="#"><img src="img/flag/flag.jfif" alt="english flag">বাংলা </a></li>
                      </ul>
                    
                    </div>
                  </div>
                  <!-- end language -->
                  <!-- start currency -->
                  <div class="aa-currency">
                    <div class="dropdown">
                      <a href="" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true">
                        <i class="fa fa-usd" ></i>USD
                      <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                        <li><a href="#"><i class="fa fa-bdt"></i>টাকা</a></li>
                      </ul>
                        </a>
                    </div>
                  </div>
                  <!--end currency-->
                   <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+88 01971-709670</p>
                </div>
                <!-- / cellphone -->
                </div>
                <!-- / header top left -->
                <div class="aa-header-top-right">
                  <ul class="aa-head-top-nav-right">
                    <li><a href="account.php">My Account</a></li>
                    <!--<li class="hidden-xs"><a href="wishlist.php">Wishlist</a></li>-->
                    <li class="hidden-xs"><a href="cart.php">My Cart</a></li>
                    <li class="hidden-xs"><a href="checkout.php">Checkout</a></li>
                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- end header top-->
<!-- start header bottom-->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area">
            <!--logo -->
            <div class="aa-logo">
              <!-- Text based logo -->
                <a href="index.php">
                  <span class="fas fa-book-open"></span>
                  <p><?php echo $_SESSION['title1'];?><strong><?php echo $_SESSION['title2'];?></strong> <span>Read books yourself and share it with other </span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.php"><img src="img/logo.jpg" alt="logo img"></a> -->
            </div>
            <!--/ logo -->
            <!--/ chart box  -->
            <div class="aa-cartbox">
              <a href="#" class="aa-cart-link">
                <span class="fa fa-shopping-basket"></span>
                <span class="aa-cart-title">Your Cart </span>
                <span class="aa-cart-notify">2</span></a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">books Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">books Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                    
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.php">Checkout</a>
                </div>
            </div>
            <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search your books here...">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->  
          </div>
        </div>
      </div>
    </div>
    
    </header>
      <!-- menu -->
  <section id="menu"> <!--change: background-color -->
    <div class="container"style="background-color: #222222; width: 100%;">
      <div class="menu-area" >
        <!-- Navbar -->
        <div class="navbar navbar-inverse" role="navigation" style="border-color: #background-color: #222222; border: 0px;margin-bottom: 0px;"> <!--change: default to inverse -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse ">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Books <span class="caret"></span></a>
                <ul class="dropdown-menu"> 
                    <li><a href="#">Buy & Sell <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="catagori/buy/academic.php">Academic</a></li>
                      <li><a href="#">Novel</a></li>
                      <li><a href="#">Story book</a></li>
                      <li><a href="#">Politics</a></li>
                      <li><a href="#">Entertainment</a></li>                                                
                      <li><a href="#">Science Fiction</a></li>
                      <li><a href="#">Dictionaries</a></li>
                      <li><a href="#">Religious Books</a></li>
                      <li><a href="#">General knowledge</a></li>                                 
                    </ul>
                  </li>

                  <li><a href="#">Rent Books <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="catagori/buy/academic.php">Academic</a></li>
                      <li><a href="#">Novel</a></li>
                      <li><a href="#">Story book</a></li>
                      <li><a href="#">Politics</a></li>
                      <li><a href="#">Entertainment</a></li>                                                
                      <li><a href="#">Science Fiction</a></li>
                      <li><a href="#">Dictionaries</a></li>
                      <li><a href="#">Religious Books</a></li>
                      <li><a href="#">General knowledge</a></li>                                 
                    </ul>
                  </li>

                  <li><a href="#">Share Books <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="catagori/buy/academic.php">Academic</a></li>
                      <li><a href="#">Novel</a></li>
                      <li><a href="#">Story book</a></li>
                      <li><a href="#">Politics</a></li>
                      <li><a href="#">Entertainment</a></li>                                                
                      <li><a href="#">Science Fiction</a></li>
                      <li><a href="#">Dictionaries</a></li>
                      <li><a href="#">Religious Books</a></li>
                      <li><a href="#">General knowledge</a></li>                                 
                    </ul>
                  </li>

                  
                  <li><a href="#">Donation Books <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="catagori/buy/academic.php">Academic</a></li>
                      <li><a href="#">Novel</a></li>
                      <li><a href="#">Story book</a></li>
                      <li><a href="#">Politics</a></li>
                      <li><a href="#">Entertainment</a></li>                                                
                      <li><a href="#">Science Fiction</a></li>
                      <li><a href="#">Dictionaries</a></li>
                      <li><a href="#">Religious Books</a></li>
                      <li><a href="#">General knowledge</a></li>                                 
                    </ul>
                  </li>
                      
                  <li><a href="#">And more.. <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Motivational Books</a></li>
                      <li><a href="#">Poetry book</a></li>
                      <li><a href="#">Histry</a></li>                                      
                      <li><a href="#">Design book</a></li>                                 
                    </ul>
                  </li>
                </ul>
              </li>

              <li><a href="#">Exchange</a></li>
            
              <li><a href="#">Merchant Store</a></li>            
              <li><a href="blog-archive.php">Read here<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="blog-archive.php">Newspapers</a></li>
                  <li><a href="blog-archive-2.php">Science</a></li>
                  <li><a href="blog-single.php">Religious</a></li>                
                </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
              
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->


