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
    @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap')
body {
   margin: 0;

  -moz-osx-font-smoothing: grayscale;
  /*background: #e6edf2;*/
}

a {
  text-decoration: none;
  color: gray;
}

*, *:before, *:after {
  box-sizing: inherit;
  font-weight: 400;
  font-family: "Prompt", sans-serif;
  font-size:16px;    
  -webkit-font-smoothing: antialiased;
/*   border: 1px solid red; */
}


a:hover {
  color: black;
}

* {
  box-sizing: border-box;
  font-family: "Prompt", sans-serif;
  font-size:16px;    
  -webkit-font-smoothing: antialiased;
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


/*stricky-nav-bar*/

.sticky{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%
}

.navbar {
/*background-color: #00305b;*/    

width: 100%;
  background-color: white;
  box-shadow: 0px 0px 5px gray;
width:100%;  
height:70px;

}

    .navbar-brand {
      color: #000;
      font-weight: bold;
      padding:1rem;
    }

    .navbar-nav .nav-item{
        
        padding:2rem;
        list-style: none;
        display:block;
        height:auto;
        background-color:white;
    }

    .navbar-nav .nav-item .nav-link {
      color: #999;
      position: relative; 
      font-weight: 400;
      font-family: "Prompt", sans-serif;
      font-size:16px;    
    }


.dropdown{
  
    top:62px;
    position:absolute;
    display:none;
    background-color:#FFF;
    transform: perspective(1000px);
   -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
  }

  .dropdown-nav {
	opacity: 0;
	transition: transform .3s cubic-bezier(0.88,-0.72, 0, 1), opacity .3s ease-in-out;
	transform: translateY(-4rem);
	list-style: none;
	margin: 0;
	padding: 0;
	position: absolute;
	z-index: 1;
	background: rgba(225,255,225,.9);
	a {
		font-weight: 300;
		font-size: 1.2rem;
	}
}




.nav-item:hover .dropdown{
  display:block;
  pointer-events: auto;
  -webkit-transition: max-height 0.2s ease-in;
  transition: max-height 0.2s ease-in;
  -webkit-transition: all .5s, background, 2s .5s linear;
  transition: all .5s, background 2s .5s linear;
}

.dropdown .flex-container > ul > li:hover{
padding:1rem;
background-color:#E5E8E8;

}

.flex-container {
  display: flex;
  background-color: #FFF;
}


.flex-container .dropdown-nav{
  min-width: 200px;
  margin: 10px;
}

.dropdown-nav  li {
    display:block;
    padding:1.2rem;
    color:black;
    min-width: 200px;
}

.dropdown-nav  li:hover{
  background-color:#e9eef4;
  color:black;
}


.navbar-toggler {
  flex: 1;
  display: none;
  float:right;
  width:100%;
  
}

.dropdown:hover {
	.dropdown-nav {
		opacity: 1;
		transform: translateY(0);
		box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
   
	}
}

.dropdown-nav {
	opacity: 0;
	transition: transform .5s cubic-bezier(0.88,-0.72, 0, 1), opacity .3s ease-in-out;
	transform: translateY(-4rem);
	list-style: none;
	margin: 0;
	padding: 0;
	position: absolute;
	z-index: 1;
	background: white;
	a {
		font-weight: 300;
		font-size: 1.2rem;
	}
}


@media (max-width: 920px) {

.navbar-brand{
   
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
  background-color: #fff;
  display:block;
}

.flex-container > ul {
width:100%;
}

.dropdown_menu-7{
    animation: rotateMenu 400ms ease-in-out forwards
    transform-origin: top center
}

.flex-container > ul > li {
    display:block;
    padding:1rem;
    border-bottom:1px solid #ccc;
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
<!--<nav class="top-nav-bar">
  <a class="brand">
  <img src="./image/logo.png" />
  </a>
  <a class="link" href="#">login</a>
  <a class="link" href="#">logout</a>
</nav>-->

<nav class="navbar navbar-dark">
  <div class="container">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <img src="./image/logo.png" height="55px" />
    </a>

    <div class="navbar-toggler">
    <button  type="button" style="" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fas fa-bars"></span>
    </button>
    </div>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav" style="float:left;">
        <li class="nav-item">
          <a class="nav-link" href="#">หน้าแรก</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link" href="#">เกี่ยวกับเรา v</a>          
          <div class="dropdown">
                <ul class="dropdown-nav">
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
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">บริการ v</a>
          <div class="dropdown">
          <ul class="dropdown-nav">
					<li><a href="">Lawn Care</a></li>
					<li><a href="">Walling &amp; Fencing</a></li>
					<li><a href="">Landscape design</a></li>
					<li><a href="">Grounds Maintenance</a></li>
				 </ul>
         </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">หลักสูตร v</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ติดต่อ</a>
        </li>
      </ul>
      <ul class="navbar-nav" style="float:right;">
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
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


