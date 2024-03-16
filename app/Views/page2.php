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
  /*background: #e6edf2;*/
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
background-color: #00305b;       
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
    background-color:#FFF;
    border-bottom:3px solid gray;
    transform: translateX(10px);
    top:40px;
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

/*footerr*/

/* =============== FOOTER =============== */
.top-footer {
  background-color: var(--second-color);
  display: flex;
  flex-direction: column;
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

  /* ================= MAIN ================ */

  /* =============== FOOTER =============== */
  .top-footer {
    flex-direction: row;
    justify-content: space-around;
    padding-bottom: 8rem;
    padding-top: 2rem;
  }
  .footer-title {
    font-size: 1rem;
    padding: 1rem 0;
  }
  .footer-items h3 {
    font-size: 0.9rem;
  }

  .end-footer {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: var(--third-color);
  }
  .copyright {
    color: hsla(0, 0%, 98%, 0.747);
    padding: 1rem 0;
    font-size: 0.8rem;
  }
  .copyright b {
    font-size: 0.7rem;
  }
  .designer {
    color: hsla(0, 0%, 98%, 0.322);
    font-size: 0.8rem;
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
          <div class="dropdown" style="top:50px;">
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

<!--#2c4988 -->
    <div class="container-fluid top-footer" style="background-color:#00305b;color:white;">
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
    <div class="container-fluid end-footer" style="background-color:#2e3f61;color:white;">
      <div class="copyright">copyright © 2021 - Present • <b>DOWNTOWN TECH LIVER</b></div>
      <a class="designer" href="#">Thierry M</a>
    </div>
  
 
</body>
</html>


