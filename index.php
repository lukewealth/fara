<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Faraba Market</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSS Links -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
  <!-- Header Section Start -->
  <div class="header_section background_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Logo"></a></div>
        </div>
        <div class="col-md-9">
          <div class="menu_text">
            <ul>
              <li>
                <div class="togle_3">
                  <div class="menu_main">
                    <a href="signup.html"><img src="images/user-icon.png" alt="User Icon"><span class="padding_left0">LOGIN / REGISTER</span></a>
                  </div>
                  <div class="shoping_bag"><img src="images/bag-icon.png" alt="Bag Icon"><span class="padding_left_40"><img src="images/search-icon.png" alt="Search Icon"></span></div>
                </div>
                <div id="myNav" class="overlay">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <div class="overlay-content">
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                    <a href="services.html">Services</a>
                    <a href="gallery.html">Gallery</a>
                    <a href="contact.html">Contact Us</a>
                  </div>
                </div>
                <span class="navbar-toggler-icon"></span>
                <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu" alt="Toggle Menu"></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Section End -->

  <!-- Banner Section Start -->
  <div class="banner_section">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- First Slide: Retailers Market -->
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <h1 class="retailer_text">Retailers Market</h1>
                <h1 class="retailer_text_1">Buy Directly from Farmers</h1>
                <p class="textarea">Purchase farm products directly from the farmers by selecting the quantity of products and making payments inside the app.</p>
              </div>
              <div class="col-md-6">
                <div><img src="images/1690273533489.jpg" class="image_1" alt="Retailers Market Image"></div>
              </div>
            </div>
          </div>
          <!-- Second Slide: Managing Farmers Financial -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="retailer_text">Financial Management</h1>
                <h1 class="retailer_text_1">Faraba credits</h1>
                <p class="textarea">Manage farmers' finances through a credits system with zero-interest loans, providing them with essential financial support.</p>
              </div>
              <div class="col-md-6">
                <div><img src="images/farm-shop-local-market.jpg" class="image_1" alt="Farm Shop"></div>
              </div>
            </div>
          </div>
          <!-- Third Slide: Business Investment Opportunities -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="retailer_text">Investment Opportunities</h1>
                <h1 class="retailer_text_1">Business Asset</h1>
                <p class="textarea">Explore business investment opportunities for third-party investors to support farmers in growing their agricultural enterprises.</p>
              </div>
              <div class="col-md-6">
                <div><img src="images/Build-An-Organic-Ecommerce-Platform.png" class="image_1" alt="Investment Opportunities"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <img src="images/left-icon.png" alt="Previous">
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <img src="images/right-icon.png" alt="Next">
        </a>
      </div>
      <!-- Filter Section -->
      <div class="form_section">
        <ul>
          <li class="padding_right_border"><a href="#">Filter By keyword</a></li>
          <li class="padding_right_border"><a href="#">Location</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">One</a>
              <a class="dropdown-item" href="#">Two</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Three</a>
            </div>
          </li>
          <li class="search_bt"><a href="#" style="color: #ffffff">Search</a></li>
        </ul>
      </div>
      <!-- Buttons Section -->
      <div class="btn_main">
        <div class="more_bt"><a href="#">More Info</a></div>
        <div class="contact_bt"><a href="#">Contact Us</a></div>
      </div>
    </div>
  </div>
  <!-- Banner Section End -->

  <!-- About Section Start -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="about_text">About Faraba <span><img src="images/img-2.png" alt="Faraba Logo"></span></h1>
          <p class="lorem_text">
            <i>
              <img src="images/logo.png" alt="Faraba" class="logo"> is an agricultural produce online market that connects consumers, retailers, and businesses directly to Ghanaian farmers, providing a transparent and convenient platform for fresh, local produce with fair pricing. Farmers benefit from a reliable market and reduced post-harvest losses.
            </i>
          </p>
        </div>
        <div class="col-md-6">
          <div id="scroll_slider" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
              <!-- Carousel Slides -->
              <div class="carousel-item active">
                <img src="images/Wonder.jpg" class="d-block w-100" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="images/farmfield.jpg" class="d-block w-100" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="images/15201763625_9328118183805_2501534183871.jpg" class="d-block w-100" alt="Image 3">
              </div>
              <div class="carousel-item">
                <img src="images/photo_6021478462218419926_y.jpg" class="d-block w-100" alt="Image 4">
              </div>
              <div class="carousel-item">
                <img src="images/Wonder.jpg" class="d-block w-100" alt="Image 5">
              </div>
            </div>
            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#scroll_slider" role="button" data-slide="prev">
              <i class="fa fa-angle-left" style="font-size:36px"></i>
            </a>
            <a class="carousel-control-next" href="#scroll_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right" style="font-size:36px"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Gallery Section Start -->
  <div class="gallery_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="gallery_text">Our Work</h1>
          <h1 class="gallery_text">Gallery</h1>
          <p class="ipsum_text">Faraba provides a convenient platform for consumers and retailers to buy fresh farm produce, and for businesses to invest in local agriculture.</p>
        </div>
        <div class="col-md-6">
          <div class="image_7"><img src="images/DSC_0079.jpg" alt="Gallery Image"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="gallery_box">
            <img src="images/IMG_20170919_124723_722.jpg" class="img-responsive" alt="Gallery Image 1">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="gallery_box">
            <img src="images/IMG_20170919_124723_722.jpg" class="img-responsive" alt="Gallery Image 2">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="gallery_box">
            <img src="images/IMG_20170919_124723_722.jpg" class="img-responsive" alt="Gallery Image 3">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="gallery_box">
            <img src="images/IMG_20170919_124723_722.jpg" class="img-responsive" alt="Gallery Image 4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery Section End -->

  <!-- Services Section Start -->
  <div class="services_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="about_text">Our Services</h1>
          <div class="image_main"><img src="images/Wonder.jpg" alt="Our Services Image"></div>
        </div>
        <div class="col-md-6">
          <div class="services_text">
            <p>
              <i class="fa fa-check"></i> Access to quality farm produce<br>
              <i class="fa fa-check"></i> Fair prices<br>
              <i class="fa fa-check"></i> Reduced post-harvest losses<br>
              <i class="fa fa-check"></i> Direct link to Ghanaian farmers<br>
              <i class="fa fa-check"></i> Business investment opportunities<br>
              <i class="fa fa-check"></i> Farmers financial management
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Services Section End -->

  <!-- Contact Section Start -->
  <div class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="contact_text">Request a call back</h1>
          <p class="ipsum_text">For more information, contact us via phone or email, or submit the form below.</p>
        </div>
        <div class="col-md-6">
          <div class="input_main">
            <div class="container">
              <form action="/submit" method="POST">
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Name" name="name" required>
                </div>
                <div class="form-group">
                  <input type="email" class="email-bt" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Phone" name="phone" required>
                </div>
                <div class="form-group">
                  <textarea class="massage-bt" placeholder="Message" rows="5" name="message" required></textarea>
                </div>
                <div class="send_btn">
                  <button type="submit" class="main_bt">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Section End -->

  <!-- Footer Section Start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1 class="footer_text">Address</h1>
          <p class="footer_text1">Accra - Ghana</p>
        </div>
        <div class="col-md-3">
          <h1 class="footer_text">Email</h1>
          <p class="footer_text1">farabaagricmarket@gmail.com</p>
        </div>
        <div class="col-md-3">
          <h1 class="footer_text">Links</h1>
          <p class="footer_text1"><a href="index.html" style="color: #ffffff">Home</a></p>
          <p class="footer_text1"><a href="about.html" style="color: #ffffff">About</a></p>
          <p class="footer_text1"><a href="services.html" style="color: #ffffff">Services</a></p>
          <p class="footer_text1"><a href="gallery.html" style="color: #ffffff">Gallery</a></p>
          <p class="footer_text1"><a href="contact.html" style="color: #ffffff">Contact</a></p>
        </div>
        <div class="col-md-3">
          <h1 class="footer_text">Social</h1>
          <div class="social_icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Section End -->

  <!-- JavaScript Links -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>
</html>
