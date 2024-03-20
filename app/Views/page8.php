<html>
<head>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.sticky{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    transition: max-height 0.2s ease-in;
}


* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Lato", sans-serif;
}

.navbar {
    width: 100%;
    background-color: white;
    box-shadow: 5px 0px 5px #ccc;
    width:100%;  
    padding: 0px 70px;
}

.navbarlogo {
    text-decoration: none;
    font-size: 25px;
}

.navbarlogo li a{
    padding:0;
    background-color:red;
}

.navbar-links {
  list-style-type: none;
  display: flex;
  width:auto;
}
.navbar-links li a {
  display: block;
  text-decoration: none;
  color: #444;
  padding: 20px 20px;
  font-weight: 700;
  transition: 0.4s all;
}

.navbar-links li.navbar-dropdown {
  position: relative;
}

.dropdown{
    display:none;
}

.navbar-links li.navbar-dropdown:hover .dropdown {
  visibility: visible;
  opacity: 1;
  transform: translateY(0px);
  display:block;
  
}

.navbar-links li.navbar-dropdown .dropdown {
  visibility: hidden;
  opacity: 0;
  position: absolute;
  padding: 20px 0;
  top:100%;
  transform: translateY(50px);
  left: 0;
  width: 250px;
  background-color: #fff;
  box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.5);
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  z-index: 111;
  transition: 0.4s all;
  
}
.navbar-links li.navbar-dropdown .dropdown a {
  padding-top: 10px;
  padding-bottom: 10px;
  font-weight: 400;
}
.navbar-dropdown .dropdown a:hover {
  padding-left: 30px;
}
.navbar-links li a:hover {
  color: #ff3f34;
}

/*--------*/


.top-footer {
    background-color:#003c71;color:white;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    padding-bottom: 8rem;
    padding-top: 2rem;
  }
  
.footer-title {
  font-weight: 500;
  font-size: 1.2rem;
  padding: 1rem 0;
  background-image: -webkit-linear-gradient(
    120deg,
    var(--primary-color-alt),
    var(--primary-color)
  );
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.footer-items h3 {
  cursor: pointer;
  font-weight: 300;
  font-size: 1.1rem;
  padding: 0.1rem 0;
  color: var(--white-color-alt);
}
.footer-items h3:hover {
  text-decoration: underline;
}
.footer-items h3:last-child {
  padding-bottom: 2rem;
}

.end-footer {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: var(--third-color);
}
.copyright {
  color: var(--white-color-alt);
  padding: 1rem 0;
  font-size: 0.9rem;
}
.copyright b {
  font-weight: inherit;
  font-size: 0.9rem;
}
.designer {
  color: hsla(0, 0%, 98%, 0.541);
  padding-bottom: 0.5rem;
  font-size: 0.9rem;
}
.designer:hover {
  text-decoration: underline;
}


/*.ico{
    width:10px;
    display:block;
    height:20px;
    background:black;
    color:white;
    text-decoration:none;
    padding-left:20px;
}
.ico:before{
    content: '';
    background:url('https://res.cloudinary.com/trobes/image/upload/v1547223073/drop-down-arrow.png');
    background-size:cover;
        position:absolute;
    width:20px;
    height:20px;
    margin-left:-20px;
}*/

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
<nav class="navbar">
    
       
      <ul class="navbar-links" style="float:left;">
        <li class="navlogo"><img src="./image/logo.png" height="60px" /></li>       
        <li class="navbar-dropdown">
          <a href="#">Soups</a>
          <div class="dropdown">
            <a href="#">Tomato Soup</a>
            <a href="#">Veg Manchow Soup</a>
            <a href="#">Veg Hot Soup</a>
          </div>
        </li>
        <li class="navbar-dropdown">
          <a href="#">Sweets</a>
          <div class="dropdown">
            <a href="#">Ladoo</a>
            <a href="#">Besan Ladoo</a>
            <a href="#">Ghee Besan Ladoo</a>
            <a href="#">Nariyal Ladoo</a>
            <a href="#">Kaju Katli</a>
            <a href="#">Rasgulla</a>
          </div>
        </li>
        <li class="navbar-dropdown">
          <a href="#">Breads</a>
          <div class="dropdown">
            <a href="#">Lachha Paratha</a>
            <a href="#">Rumali Roti</a>
            <a href="#">Tandoori Roti</a>
            <a href="#">Butter Roti</a>
            <a href="#">Plain Naan</a>
            <a href="#">Butter Naan</a>
          </div>
        </li>
        <li class="navbar-dropdown">
          <a href="#">Rice</a>
          <div class="dropdown">
            <a href="#">Plain Rice</a>
            <a href="#">Veg Pulao</a>
            <a href="#">Veg Biryani</a>
            <a href="#">Paneer Biryani</a>
            <a href="#">Lemon Rice</a>
            <a href="#">Veg Kashmiri Pulao</a>
          </div>
        </li>
        <li class="navbar-dropdown">
          <a href="#">Chinese</a>
          <div class="dropdown">
            <a href="#">Paneer Chill Dry</a>
            <a href="#">Paneer Garlic</a>
            <a href="#">Veg Garlic</a>
            <a href="#">Veg Chilli</a>
          </div>
        </li>
        
      </ul>
      <ul class="navbar-links login" style="float:right;">
        <li><a href="#">Login</a></li>
      </ul>
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

<!--#2c4988 -->
    <div class="container-fluid top-footer">
      <!-- footer item 1 -->
      <div class="footer-item">
        <h2 class="footer-title">ADDRESS</h2>
        <div class="footer-items">
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing st18</h3>
        </div>
      </div>
      <!-- footer item 2 -->
      <div class="footer-item">
        <h2 class="footer-title">SERVICES</h2>
        <div class="footer-items">
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
        </div>
      </div>
      <!-- footer item 3 -->
      <div class="footer-item">
        <h2 class="footer-title">SUPPLIERS</h2>
        <div class="footer-items">
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
        </div>
      </div>
      <!-- footer item 4 -->
      <div class="footer-item">
        <h2 class="footer-title">INVESTMENT</h2>
        <div class="footer-items">
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
        </div>
      </div>
    </div>
    <div class="container-fluid end-footer" style="background-color:#00305b;color:white;">
      <div class="copyright">copyright © 2021 - Present • <b>DOWNTOWN TECH LIVER</b></div>
      <a class="designer" href="#">Thierry M</a>
    </div>


</html>