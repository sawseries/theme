<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./slicerevealer/css/base.css" />
		<link rel="stylesheet" type="text/css" href="./slicerevealer/css/uncover.css" />
<script>

function doSomething(){
    alert("1");
}

$(document).ready(function () {

});




    $(window).scroll(function(){
    
            if($(this).scrollTop() > 100){
                $('.navbar').addClass('sticky')
            } else{
                $('.navbar').removeClass('sticky')
            }
        });
      
</script>


<style>
    html {
   min-height: 100%;
}
body{

    font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
    width: 100vw;
    height: 100vh;
}

@font-face {
  font-family: PSU-Stidti-Regular;
  src: url('./font/PSUStidti/PSU-Stidti-Regular.otf');
}

@font-face {
  font-family: PSU-Stidti-Light;
  src: url('./font/PSUStidti/PSU-Stidti-Light.otf');
}

@font-face {
  font-family:PSU-Stidti-Bold;
  src: url('./font/PSUStidti/PSU-Stidti-Bold.otf');
}


/*Navigation Bar with Animated Dropdown*/
/*font-https://www.facebook.com/MungmingMoror/posts/1197628123725198*/
/*color-#193c6c,#003c71*/
.sticky{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    transition: max-height 0.2s ease-in;
    opacity: 0.8;
}


*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
}


.navbar {
    
    box-shadow: 5px 0px 5px #ccc;
    width:100vm;  
    padding: 0px 70px;
}


.navbar-toggle{
    list-style-type: none;
    display: flex;
    width:auto;  
    float:right; 
}

.navbar-toggle button{
    background-color:transparent;
    padding:0.2rem;
    font-size:18pt;
    border-radius:5px;
}

.navbar-logo{
    list-style-type: none;
    display: flex;
    width:auto;
}

.navbar-logo li a{
  display: block;
  text-decoration: none;
  color: #444;
  padding: 20px 20px;
  font-weight: 700;
  transition: 0.5s all;
}


.navbar-links {
  list-style-type: none;
  display: flex;
  width:auto;
}

.navbar-login{
    list-style-type: none;
    display: flex;
    width:auto;
}

.navbar-login li a {
  display: block;
  text-decoration: none;
  color: #FFF;
  padding: 20px 20px;
  font-weight: 700;
  transition: 0.4s all;
}

.navbar-links li a {
  display: block;
  text-decoration: none;
  color: #FFF;
  padding: 20px 20px;
  font-weight: 700;
  transition: 0.4s all;
}

.navbar-links li.navbar-dropdown {
  position: relative;
}

.navbar-links .navbar-dropdown .dropdown a{
  display: block;
  text-decoration: none;
  color: #444;
  padding: 20px 20px;
  font-weight: 700;
  transition: 0.4s all;
}

.navbar-links li.navbar-dropdown:hover .dropdown {
  visibility: visible;
  opacity: 1;
  transform: translateY(0px);
  display:block;  
}

.navbar-links li.navbar-dropdown .dropdown {
  /*visibility: hidden;*/
  opacity: 0;
  position: absolute;
  padding: 20px 0;
  top:100%;
  left: 0;
  width: 250px;
  background-color: #fff;
  box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.5);
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  z-index: 111;  
}

.dropdown{
    /*display:none;*/
    transition: transform .5s cubic-bezier(0.88,-0.72, 0, 1), opacity .3s ease-in-out;
	  transform: translateY(-4rem);
    opacity: 1;
    visibility: visible;
    transform: translateY(0px);
   display:none;  
}


.navbar-links li.navbar-dropdown .dropdown a {
  font-weight: 400;
  padding:15px; 
}
.navbar-dropdown .dropdown a:hover {
  padding-left: 30px;
}
.navbar-links li a:hover {
  color: #4EACF8;
  background-color:#e9eef4;
}

.navbar-toggle{
    display:none;
}

.navbar-collapse{
    width:auto;
}

.navbar-links li.navbar-dropdown .lbmenu span:hover{
      color: #4EACF8;
  background-color:#e9eef4;
    }

    .navbar-links li.navbar-dropdown .lbmenu span{
      padding: 20px 25px;
      color : white;
      font-variant : small-caps;
      cursor : pointer;
      display: block;
    }

    .navbar-links .navbar-dropdown .dropdown li{
      list-style-type:none;
      display:block;
      padding:1.5rem;
    }

    .navbar-links .navbar-dropdown .dropdown li:hover{
      color: #4EACF8;
  background-color:#e9eef4;
    }



/*----- footer ---*/

.top-footer {
    background-color:#003c71;color:white;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    padding-bottom: 8rem;
    padding-top: 2rem;
    font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
  }
  
.footer-title {
  font-weight: 500;
  font-size: 16pt;
  padding: 1rem 0;
  color:white;
  background-clip: text;
  -webkit-background-clip: text;
  font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
}
.footer-items h3 {
  cursor: pointer;
  font-weight: 300;
  font-size:14pt;
  padding: 0.1rem 0;
  font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
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

   
@media (max-width: 920px) {
    .navbar-login{
        display:none;
    }

    .navbar-toggle{
      display:block;
    }

    .navbar {
    padding: 0px;
    }

    .navbar-links{
        width: 100vh;
        transition: all 0.3s ease-in;
        top:0;
        display:block;
    }


    .navbar-links li.navbar-dropdown:hover .dropdown {
      visibility: hidden;
      opacity: 1;
      transform: translateY(0px);
      display:none;  
    }

   /* .navbar-links li.navbar-dropdown:hover .dropdown {
    visibility: visible;
    opacity: 1;
    transform: translateY(0px);
    display:block;
    position:relative;
    }*/

 

    .navbar-links li.navbar-dropdown .lbmenu span{
      padding:2em;
    
     color : white;
    font-variant : small-caps;
    cursor : pointer;
    display: block;
    width:100vh;
    }


 
  

    .navbar-links li.navbar-dropdown .dropdown {
    visibility: hidden;
    opacity: 0;
    padding: 20px 0;
    transform: translateY(50px);
    left: 0;
    background-color: #fff;
    box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.5);
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    z-index: 111;
    transition: 0.4s all;
    width:100vh;
   }

   .dropdown{
    display:none;
    transition: transform .6s cubic-bezier(1,-0.72, 0, 1), opacity .6s ease-in-out;
	transform: translateY(-10rem);
    }

    #menu1:checked +ul{
      visibility: visible;
    opacity: 1;
    transform: translateY(0px);
    display:block;
    position:relative;  
    }

    #menu2:checked +ul{
      visibility: visible;
    opacity: 1;
    transform: translateY(0px);
    display:block;
    position:relative;  
    }

    #menu3:checked +ul{
      visibility: visible;
    opacity: 1;
    transform: translateY(0px);
    display:block;
    position:relative;  
    }

    #menu4:checked +ul{
      visibility: visible;
    opacity: 1;
    transform: translateY(0px);
    display:block;
    position:relative;  
    }

    #menu5:checked +ul{
      visibility: visible;
    opacity: 1;
    transform: translateY(0px);
    display:block;
    position:relative;  
    }

   
}

/*-----------*/



@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

.fade-in-text {
  font-family: Arial;
  font-size: 150px;
  animation: fadeIn 5s;
}

</style>

</head>
<body class="demo-1 loading">
<div class="navbar">
      <ul class="navbar-logo" style="float:left;">
      <li class="navlogo"><img src="./image/logo2.png" height="60px" /></li>     
      </ul>

      <ul class="navbar-toggle" style="float:right;">
        <li>
            <a><button  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="fa fa-bars"></span>
                </button>
            </a>
        </li>
      </ul>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-links" style="float:left;">  
        <li class="navbar-dropdown">
          <label for="menu1" class="lbmenu"><span>เกี่ยวกับเรา</span></label> 
          <input id="menu1" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu2" class="lbmenu"><span>หลักสูตร</span></label> 
          <input id="menu2" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu3" class="lbmenu"><span>ติดต่อ</span></label> 
          <input id="menu3" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu4" class="lbmenu"><span>ผู้เกี่ยวข้อง</span></label> 
          <input id="menu4" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu5" class="lbmenu"><span>Chinese</span></label> 
          <input id="menu5" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
      </ul>
      <ul class="navbar-login" style="float:right;">
        <li><a href="#">Login</a></li>
      </ul>
    </div>
</div>
   
<div class="container-fluid">
  <div class="row" style="background-color:white;">
		
	

    <main>
			<div class="content content--fixed">
				<header class="codrops-header">
					<div class="codrops-links">
						<a class="codrops-icon codrops-icon--prev" href="https://tympanus.net/Development/OutdoorsTemplate/" title="Previous Demo">
							<svg class="icon icon--arrow">
								<use xlink:href="#icon-arrow"></use>
							</svg>
						</a>
						<a class="codrops-icon codrops-icon--drop" href="https://tympanus.net/codrops/?p=33895" title="Back to the article">
							<svg class="icon icon--drop">
								<use xlink:href="#icon-drop"></use>
							</svg>
						</a>
					</div>
					<h1 class="codrops-header__title">Slice Revealer</h1>
					<nav class="demos">
						<a class="demo" href="index.html"><span>Demo 1</span></a>
						<a class="demo demo--current" href="index2.html"><span>Demo 2</span></a>
						<a class="demo" href="index3.html"><span>Demo 3</span></a>
					</nav>
				</header>
				<a class="github" href="https://github.com/codrops/SliceRevealer" title="Find this project on GitHub">
					<svg class="icon icon--github">
						<use xlink:href="#icon-github"></use>
					</svg>
				</a>
				<nav class="pagination">
					<span class="pagination__item">#1</span>
					<span class="pagination__item">#2</span>
					<span class="pagination__item">#3</span>
					<span class="pagination__item">#4</span>
					<span class="pagination__item">#5</span>
				</nav>
			</div>
			<div class="content">
				<div class="slides">
					<div class="slide slide--current">
						<div class="slide__img slide__img-size1" style="background-image: url(./slicerevealer/img/6.jpg);"></div>
					</div>
					<div class="slide">
						<div class="slide__img slide__img-size2" style="background-image: url(./slicerevealer/img/9.jpg);"></div>
					</div>
					<div class="slide">
						<div class="slide__img slide__img-size1" style="background-image: url(./slicerevealer/img/8.jpg);"></div>
					</div>
					<div class="slide">
						<div class="slide__img slide__img-size3" style="background-image: url(./slicerevealer/img/10.jpg);"></div>
					</div>
					<div class="slide">
						<div class="slide__img slide__img-size2" style="background-image: url(./slicerevealer/img/2.jpg);"></div>
					</div>
				</div>
			</div>

			<!-- replace "slide__img" with the following structure:

			<div class="revealer slide__img">
				<div class="revealer__img" style="background-image: url(img/1.jpg)"></div>
				<div class="revealer__slices revealer__slices--vertical">
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
					<div class="revealer__slice"></div>
				</div>
			</div> 

		    -->

			<!-- 

				- apply revealer layout class to "revealer__slices":
						- revealer__slices--vertical 
						(translate slices either up or down e.g. translate3d(0,-100%,0) and then animate to 0)

						- revealer__slices--vertical-double -> also set e.g. "grid-template-columns: repeat(5,20%)" ; first value slices/2, second value is 100%/slices/2 
						(translate first half of items up and second half down)

						- revealer__slices--horizontal (translate to sides)
						
						- revealer__slices--horizontal-double (first half left, second half right)
					
				- add revealer__slice divs; note that the "-double" layouts spread them over the sides, i.e. 8 divs results in 4 on each side 

				- apply background color to "revealer__slice"

			-->
		</main>


    </div>
</div>

<div class="container">
  <div class="row" style="background-color:white;">

<br><br><br><br> 
   
  <div class="fade-in-text">
    <p>Fade-in Text</p>
  </div>
   
   <h2 class="link"><a>new blog</a></h2>
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
        </div>
      </div>
      <!-- footer item 2 -->
      <div class="footer-item">
        <h2 class="footer-title">SERVICES</h2>
        <div class="footer-items">
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
        </div>
      </div>
      <!-- footer item 4 -->
      <div class="footer-item">
        <h2 class="footer-title">INVESTMENT</h2>
        <div class="footer-items">
          <h3>Adipisicing elit.</h3>
          <h3>Adipisicing elit.</h3>
        </div>
      </div>
    </div>
    <div class="container-fluid end-footer" style="background-color:#00305b;color:white;">
      <div class="copyright">copyright © 2021 - Present • <b>DOWNTOWN TECH LIVER</b></div>
      <a class="designer" href="#">Thierry M</a>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="./slicerevealer/js/imagesloaded.pkgd.min.js"></script>
		<script src="./slicerevealer/js/anime.min.js"></script>
		<script src="./slicerevealer/js/uncover.js"></script>
		<script src="./slicerevealer/js/demo11.js"></script>
    <script src="./slicerevealer/js/demo2.js"></script>
	</body>
</html>