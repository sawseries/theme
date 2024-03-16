<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Poppins Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
  
  <style>
body {
   margin: 0;
   font-family: 'Poppins', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background: #e6edf2;
}

a {
  text-decoration: none;
  color: gray;
}

*, *:before, *:after {
  box-sizing: inherit;
/*   border: 1px solid red; */
}


a:hover {
  color: black;
}

* {
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


ul {
  padding: 0;
  margin: 0;
}

li {
  list-style: none;
}

a:focus,
a:hover {
  text-decoration: none;
  outline: 0;
}

p {
  font-size: 16px;
  line-height: 30px;
  color: #898b96;
  font-weight: 300;
}

h4 {
  font-family: "Poppins", sans-serif;
  margin: 0;
  font-weight: 400;
  padding: 0;
  color: #363940;
}

a {
  color: #5867dd;
}


.row{
    background-color:#fff;
}


.page-container {
  margin-top: 50px;
  margin-bottom: 100px;
  display: flex;
  justify-content: center;
}

.page-container > .post {
  flex: 1;
  max-width: 500px;
  background-color:#fff;
}

.post > .link {
  text-align: center;
  font-family: courier;
  font-size: 2.5em;
  font-weight: lighter;
  margin: 50px 0px;
  
}


/*top-nav-bar*/

.top-nav-bar {
  
  align-items: flex-end;
  justify-content: flex-end;
  top: 0;
  left: 1;
  z-index: 9999;
  width: 100%;
  height: 80px;
  background-color: white;
  box-shadow: 0px 0px 10px gray;
  display: flex;
  line-height: 50px;
}

.top-nav-bar .brand{
    padding: 1em;
}


nav img {
  height: 50px;
}

nav .brand {
  flex: 1;
  align-self: flex-start;
  height: 50px;
  margin-left: 10px;
}

nav .link {
  flex: 1;
  max-width: max-content;
  margin-right: 40px;
}


/*stricky-nav-bar*/

.sticky{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%
}

.navbar {
background-color: #30475e;       
width:100%;  
}

    .navbar-brand {
      color: #ffffff;
      font-weight: bold;
      padding:1rem;
    }

    .navbar-nav .nav-item{
        
        padding:1rem;
        list-style: none;
        display:block;
    }

    .navbar-nav .nav-item .nav-link {
      color: #fff;
      position: relative; 
      transition: 0.3s;
      font-weight: 400;
      color:#fff;
      
    }

    .navbar-nav .nav-item .nav-link::before {
      content: '';
      position: absolute;
      width: 0%;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #f8b739;
      transition: 0.3s;
      color:#fff;
    }

    .navbar-nav .nav-item .nav-link:hover::before {
      width: 100%; 
      color: #fff;
    }


.dropdown{
    position:absolute;
    display:none;
    background-color:white;
    border-bottom:2px solid gray;
    transform: translateX(10px);
}


/*.nav-item:hover .dropdown{
  
}*/

.nav-item:hover .dropdown{
    transition: .5s;
  display:block;
  pointer-events: auto;
}

/*.nav-item:hover > .dropdown,
.flex-container .dropdown-link:hover>.dropdown {

}*/

.dropdown.second {
  left: 100%;
  padding-left: .9rem;
  cursor: pointer;
  transform: translateX(10px);
  min-width: 200px;
  margin: 10px;
}

.dropdown .flex-container > ul > li:hover{
padding:1rem;
background-color:#E5E8E8;

}

.flex-container {
  display: flex;
  background-color: #f1f1f1;
}

.flex-container > ul {
  min-width: 200px;
  margin: 10px;
  border-right:2px solid white;
}

.flex-container > ul > li {
    display:block;
    padding:0.5rem;
}


.navbar-toggler {
  flex: 1;
  display: none;
  float:right;
  width:100%;
  
}


@media (max-width: 920px) {

.navbar-brand{
    display:none;
}

.navbar-nav .nav-item{
    display:block;
    width:100%;   
}

.collapse .navbar-collapse{
    top:10;
}

.navbar-toggler {
  
  display: flex;
  align-items: center;
  justify-content: flex-end;
  float:right;
  width:100%;
  
}

.navbar-toggler > button{
    height: 2.5rem;
    background-color:transparent;
}

.nav-item:hover > .dropdown,
.dropdown-link:hover>.dropdown {
  transform: translateX(30px);
  pointer-events: auto;
  display:block;
}

.dropdown{
    position:relative;
    background-color:white;
    border-bottom:2px solid gray;
    display:none;
}

.dropdown .flex-container > ul > li:hover{
padding:1rem;
background-color:#E5E8E8;
}

.flex-container {
  background-color: #f1f1f1;
  display:block;
}

.flex-container > ul {
width:100%;
border-left:1px solid white;
}

.flex-container > ul > li {
    display:block;
    padding:0.5rem;
}


}


/*footer*/

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

/* Responsive Css Code created by : Shift Code Design */



.footer-big {
  padding: 105px 0 65px 0;
}

.footer-big .footer-widget {
  margin-bottom: 40px;
}

.footer--light {
  background: #001441;
}

.footer-big .footer-menu ul li a,
.footer-big p,
.footer-big ul li {
  color: #898b96;
}

/* Responsive Css Code created by : Shift Code Design */

.footer-menu {
  padding-left: 48px;
}

.footer-menu ul li a {
  font-size: 15px;
  line-height: 32px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

.footer-menu ul li a:hover {
  color: #ce1a19;
}

.footer-widget-title {
  line-height: 30px;
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 500;
}

.mini-footer {
  background: #30475e;
  text-align: center;
  padding: 32px 0;
}

.mini-footer p {
  margin: 0;
  line-height: 26px;
  font-size: 15px;
  color: #999;
}

.mini-footer p a {
  color: #ce1a19;
  font-weight: 500;
}

.mini-footer p a:hover {
  color: #34bfa3;
}

/* Responsive Css Code created by : Shift Code Design */

.widget-about img {
  display: block;
  margin-bottom: 30px;
  max-width: 70%;
}

.widget-about p {
  font-weight: 400;
}

.widget-about .contact-details {
  margin: 30px 0 0 0;
}

.widget-about .contact-details li {
  margin-bottom: 10px;
}

.widget-about .contact-details li:last-child {
  margin-bottom: 0;
}

.widget-about .contact-details li i {
  padding-right: 10px;
  color: #333;
}

.widget-about .contact-details li a {
  color: #5867dd;
}





@keyframes animation {
  from {
    opacity: 0;
    transform: translateY(15px);
  }

  to {
    opacity: 1;
    transform: translateY(0px);
  }
}



@media (max-width: 991px) {
  .footer-menu {
    padding-left: 0;
  }
  .widget-about img {
    max-width: 50%;
  }
}
  </style>
<script>

$(window).scroll(function(){
            if($(this).scrollTop() > 100){
                $('.navbar').addClass('sticky')
            } else{
                $('.navbar').removeClass('sticky')
            }
        });

</script>
  </head>
  <body>
<nav class="top-nav-bar">
  <a class="brand">
  <img src="./image/logo.png" />
  </a>
  <a class="link" href="#">login</a>
  <a class="link" href="#">logout</a>
</nav>

<nav class="navbar navbar-dark">
  <div class="container">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <i class="fas fa-code"></i> Your Logo
    </a>

    <div class="navbar-toggler">
    <button  type="button" style="" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fas fa-bars"></span>
    </button>
    </div>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">หน้าแรก</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link" href="#">เกี่ยวกับเรา</a>          
          <div class="dropdown">
            <div class="flex-container">
                <ul>
                  <li class="dropdown-link">
                    <a href="#">Link 1</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Link 2</a>
                  </li>
                  
                  <li class="dropdown-link">
                    <a href="#">Link 4</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Link 5</a>
                  </li>
                </ul>
                <ul>
                  <li class="dropdown-link">
                    <a href="#">Link 1</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Link 2</a>
                  </li>
                
                  <li class="dropdown-link">
                    <a href="#">Link 4</a>
                  </li>
                  <li class="dropdown-link">
                    <a href="#">Link 5</a>
                  </li>
                </ul>
            </div>    
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">บริการ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ติดต่อ</a>
        </li>
      </ul>
    </div>
       
  </div>
</nav>



<div class="container">
  <div class="row">
<center>
  <img src="./image/img2.png" width="90%" style="text-align:center;" />
    </center>
    <h2 class="link"><a>new blog</a></h2>
    <h2 class="link"><a>sweet blog</a></h2>
    <h2 class="link"><a>sweeter blog</a></h2>    <h2 class="link"><a>new blog</a></h2>
    <h2 class="link"><a>sweet blog</a></h2>
    <h2 class="link"><a>sweeter blog</a></h2>    <h2 class="link"><a>new blog</a></h2>
    <h2 class="link"><a>sweet blog</a></h2>
    <h2 class="link"><a>sweeter blog</a></h2>    <h2 class="link"><a>new blog</a></h2>
    <h2 class="link"><a>sweet blog</a></h2>
    <h2 class="link"><a>sweeter blog</a></h2>
  </div>
</div>
<h1 style="text-align: center; color: #b32139;">Responsive Footer UI Design</h1>
  <!-- Responsive Html Code created by : Shift Code Design -->
  <footer class="footer--light">
    <div class="footer-big">
      <!-- start .container -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <div class="widget-about">
                <img decoding="async" src="images/bg-1.png" alt="" class="img-fluid">
                <p>There are many variations of users of YouTube available.</p>
                <ul class="contact-details">
                  <li>
                    <i class="fas fa-phone-alt"></i> Call Us:
                    <a href="#">011-23456789</a>
                  </li>
                  <li>
                    <i class="fas fa-envelope-open-text"></i>
                    <a href="#">support@scd.com</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Ends: .footer-widget -->
            <!-- Responsive Html Code created by : Shift Code Design -->
          </div>
          <!-- end /.col-lg-4 -->
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <div class="footer-menu">
                <h4 class="footer-widget-title">Popular Category</h4>
                <ul>
                  <li>
                    <a href="#">WordPress Theme</a>
                  </li>
                  <li>
                    <a href="#">Bootstrap Template</a>
                  </li>
                  <li>
                    <a href="#">ReactJS Template</a>
                  </li>
                  <li>
                    <a href="#">Dashboard Theme</a>
                  </li>
                  <li>
                    <a href="#">HTML5 Template</a>
                  </li>
                </ul>
              </div>
              <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
            <!-- Responsive Html Code created by : Shift Code Design -->
          </div>
          <!-- end /.col-lg-3 -->

          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <div class="footer-menu">
                <h4 class="footer-widget-title">Our Company</h4>
                <ul>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">How It Works</a>
                  </li>
                  <li>
                    <a href="#">Affiliates</a>
                  </li>
                  <li>
                    <a href="#">Testimonials</a>
                  </li>
                  <li>
                    <a href="#">Contact Us</a>
                  </li>
                  <li>
                    <a href="#">Plan & Pricing</a>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>
                </ul>
              </div>
              <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
          </div>
          <!-- end /.col-lg-3 -->

          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <div class="footer-menu p-0">
                <h4 class="footer-widget-title">Help Support</h4>
                <ul>
                  <li>
                    <a href="#">Support Forum</a>
                  </li>
                  <li>
                    <a href="#">Terms & Conditions</a>
                  </li>
                  <li>
                    <a href="#">Support Policy</a>
                  </li>
                  <li>
                    <a href="#">FAQs</a>
                  </li>
                </ul>
              </div>
              <!-- end /.footer-menu -->
            </div>
            <!-- Ends: .footer-widget -->
          </div>
          <!-- Ends: .col-lg-3 -->

        </div>
        <!-- end /.row -->
      </div>
      <!-- end /.container -->
    </div>
    <!-- end /.footer-big -->
    <!-- Responsive Html Code created by : Shift Code Design -->

    <div class="mini-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>© 2024
                <a href="#">Shift Code Design</a>. All rights reserved. Created by
                <a href="#">SCD</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
 
</body>
</html>


