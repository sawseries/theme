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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="./slicerevealer/css/base1.css" />
<link rel="stylesheet" type="text/css" href="./slicerevealer/css/uncover.css" />

<script>

$(document).ready(function () {



const uncoverOpts = [
    
    /*{
        // total number of slices.
        slicesTotal: 10,
        // slices color.
        slicesColor: '#FFF',
        // 'vertical' || 'horizontal'.
        orientation: 'vertical',
        // 'bottom' || 'top' for vertical orientation and 'right' || 'left' for horizontal orientation.
        slicesOrigin: {show: 'bottom', hide: 'bottom'}
    },*/
    {
      slicesTotal: 7, 
        slicesColor: '#FFF', 
        orientation: 'horizontal', 
        slicesOrigin:  {show: 'right', hide: 'right'}
    },
    {
        slicesTotal: 7, 
        slicesColor: '#FFF', 
        orientation: 'horizontal', 
        slicesOrigin:  {show: 'right', hide: 'right'}
    },
    {
        slicesTotal: 9,
        slicesColor: '#FFF',
        orientation: 'vertical',
        slicesOrigin:  {show: 'bottom', hide: 'bottom'}
    },
    {
        slicesTotal: 5,
        slicesColor: '#FFF',
        orientation: 'horizontal',
        slicesOrigin:  {show: 'left', hide: 'left'}
    },
    {
        slicesTotal: 6,
        slicesColor: '#FFF',
        orientation: 'vertical',
        slicesOrigin:  {show: 'bottom', hide: 'bottom'}
    }
];

class Slideshow {
    constructor(el) {
      
        this.DOM = {el: el};
        this.DOM.slides = Array.from(this.DOM.el.querySelectorAll('.slide'));
        this.slidesTotal = this.DOM.slides.length;
        this.current = 0;
        this.uncoverItems = [];
        this.DOM.slides.forEach((slide,pos) => this.uncoverItems.push(new Uncover(slide.querySelector('.slide__img'), uncoverOpts[pos])));
        this.init();
    }
    init() {
        this.isAnimating = true;
        this.DOM.slides[this.current].classList.add('slide--current');
        this.uncoverItems[this.current].show(true, {
            image: {
                duration: 800,
                delay: 350,
                easing: 'easeOutCubic',
                scale: [1.3,1]
            }
        }).then(() => this.isAnimating = false);
    }
    navigate(pos) {
      // alert("navagae :"+pos)
        //if ( this.isAnimating || this.current === pos || pos < 0 || pos > this.slidesTotal - 1 ) return;
        //this.isAnimating = true;
       
        const pagination = document.querySelector('.pagination');
        const triggers = Array.from(pagination.querySelectorAll('.pagination__item'));

        this.uncoverItems[this.current].hide(true).then(() => {
            this.DOM.slides[this.current].classList.remove('slide--current');
            this.current = pos;
            

            const newItem = this.uncoverItems[this.current];
            newItem.hide();
            this.DOM.slides[this.current].classList.add('slide--current');
          
            pagination.querySelector('.pagination__item--current').classList.remove('pagination__item--current');
            triggers[pos].classList.add('pagination__item--current');
          
            newItem.show(true, {
                image: {
                    duration: 100,
                    delay: 200,
                    easing: 'easeOutCubic',
                    scale: [1.3,2]
                }
            }).then(() => this.isAnimating = false);
        });
    }
}

// Preload all the images in the page..
imagesLoaded(document.querySelectorAll('.slide__img'), {background: true}, () => {
    document.body.classList.remove('loading');
    
    const slideshow = new Slideshow(document.querySelector('.slides'));
    const pagination = document.querySelector('.pagination');
    const triggers = Array.from(pagination.querySelectorAll('.pagination__item'));
    
    triggers.forEach((trigger,pos) => {

    
        if ( pos === 0 ) {
            trigger.classList.add('pagination__item--current');
        }
        trigger.addEventListener('click', () => {
          //alert("cl "+pos);
            if ( slideshow.isAnimating ) return;
            slideshow.navigate(pos);
            pagination.querySelector('.pagination__item--current').classList.remove('pagination__item--current');
            trigger.classList.add('pagination__item--current');
        })
       
    });

    document.addEventListener('keydown', (ev) => {
        if ( slideshow.isAnimating ) return;
        const keyCode = ev.keyCode || ev.which;
        //alert(keyCode);
        let newpos;
        if ( keyCode === 37 ) {
            newpos = slideshow.current > 0 ? slideshow.current-1 : slideshow.slidesTotal-1;
            //alert(newpos);
            slideshow.navigate(newpos);
        }
        else if ( keyCode === 39 ) {
            newpos = slideshow.current < slideshow.slidesTotal-1 ? slideshow.current+1 : 0;
            //alert(newpos);
            slideshow.navigate(newpos);
        }
        else return;
        pagination.querySelector('.pagination__item--current').classList.remove('pagination__item--current');
        triggers[newpos].classList.add('pagination__item--current');
    });
});

var i=2;
setInterval(function() {
alertFunc();
}, 8000);

function alertFunc() {

const slideshow = new Slideshow(document.querySelector('.slides'));
slideshow.navigate(i);

i=i+1;  
if(i>4){
i=0;
}
}
});


</script>


<script>
    $(window).scroll(function(){
    
            if($(this).scrollTop() > 100){
                $('.navbar').addClass('sticky')
            } else{
                $('.navbar').removeClass('sticky')
            }
        });


        $(document).ready(function () {

          document.getElementById("London").style.display = "block";

const img_slider_elements=document.querySelectorAll(".img-caroussel");
const arrows_elts= document.querySelectorAll(".arrows i")
const round_elts=document.querySelectorAll(".round");

const slide = Array.from(document.querySelectorAll(".img-caroussel"));
const dot = Array.from(document.querySelectorAll(".round"));

var i=0;
setInterval(function() {

    img_slider_elements.forEach((img)=>{
    img.classList.remove("active");
    img.classList.remove("fade");
    });

    round_elts.forEach((round_elt)=>{
    round_elt.classList.remove("active");
    });

    slide[i].classList.add('active');
    slide[i].classList.add('fade');

    dot[i].classList.add('active');
    i++; 

    if(i==4){
     i=0;
    }

}, 5000);


});

      
</script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
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
  src: url('./font/PSUStidtiWebfont/psu-stidti-regular.ttf');
}

@font-face {
  font-family: PSU-Stidti-Light;
  src: url('./font/PSUStidtiWebfont/psu-stidti-light.ttf');
}

@font-face {
  font-family:PSU-Stidti-Bold;
  src: url('./font/PSUStidtiWebfont/psu-stidti-bold.ttf');
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
    opacity:1;
}


*{
  padding: 0;
  margin: 0;
  font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
}

/*navbar*/


.arrow{
  float:right;width:20px;text-align:right;font-size:12px;
}

.navbar {
    
    box-shadow: 5px 0px 5px #ccc;
    width:100vm;  
    padding: 0px 40px;
    border:1px solid #CCD1D1;
    background-color:white;
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
    color:black;
    border:0px solid;

}

.navbar-logo{
    list-style-type: none;
    display: flex;
    width:auto;
    margin:10px;
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
  width:100vh;
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
  padding: 15px 20px;
  font-weight: 700;
  transition: 0.4s all;
  background-color:#0c4678;
  margin:5px;
}

.navbar-links{
  margin:10px;
}

.navbar-links li a {
  display: block;
  text-decoration: none;
  color:#000;
  padding: 10px 10px;
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
  padding: 10px 10px;
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
  padding:0;
  top:100%;
  left: 0;
  width:350px;
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
      padding: 15px 20px;
      color :#424949;
      
      cursor : pointer;
      display: block;
    }

    .navbar-links .navbar-dropdown .dropdown li{
      list-style-type:none;
      display:block;
      padding:1.5rem;
      border-bottom:1px solid #ccc;
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
 
  font-size: 15pt;
  padding: 1rem 0;
  color:white;
  background-clip: text;
  -webkit-background-clip: text;
  font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
}
.footer-items{
  cursor: pointer;

  font-size:10pt;
  padding: 0.2rem 0;
  font-family: "PSU-Stidti-Regular","PSU-Stidti-Light","PSU-Stidti-Bold",sans-serif;
}
.footer-items :hover {
  text-decoration: underline;
}
.footer-items :last-child {
  padding-bottom: 2rem;
}

.end-footer {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: var(--third-color);
  padding:0.4em;
}

   
@media (max-width: 920px) {

  .box{

  min-height:400px;

}

.flex-container{
  padding:0;
}

.flex-container > div{
 margin:0;
}

.flex-container > div > img{
 width:80%;
  
}

  .sticky{
    position:relative;
    opacity:1;
  }

    .navbar-login{
        display:none;
    }

    .navbar-toggle{
      display:block;
    }

    .navbar {
    padding: 0px;
    margin:0;
    left:0;
    }

  .navbar-links{
        width: 100%;
        transition: all 0.3s ease-in;
        top:0;
        display:block;
        position:relative;
        padding: 0px;
    margin:0;
    left:0;
    }

    .navbar-links li.navbar-dropdown .lbmenu span:hover{
    color: #4EACF8;
    background-color:#e9eef4;
  }


    .navbar-links .navbar-dropdown .dropdown li:hover{
      color: #4EACF8;
      background-color:#e9eef4;
      position:relative;
    }

    .navbar-links li.navbar-dropdown:hover .dropdown {
      visibility: hidden;
      opacity: 1;
      transform: translateY(0px);
      display:none;  
    }

   .navbar-links li.navbar-dropdown .lbmenu span{
    padding:2em;
    color : #000;
    font-variant : small-caps;
    cursor : pointer;
    width:95vw;
     display: block;
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
    width:100%;
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


/*slide*/

#caroussel{
    width: 90%;
    height: 500px;
    margin: auto;
    position: relative;
    -webkit-user-select: none; 
    -ms-user-select: none; 
    user-select: none; 
}


.img-caroussel{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: inherit;
    transition: 0.6s ease;
    opacity: 0;
    position: absolute;
    width: 100%;
    border-radius: 10px;
 
}

.img-caroussel :hover{

    transition-timing-function: linear;
    transition-timing-function: cubic-bezier(0, 0, 1, 1);
}

.img-caroussel.active{
    opacity: 1;
   
}

.farrows{
    color: white;
    font-size: 2rem;
    padding: 1rem;
    background-color: rgba(0,0,0,0.7);
}

.farrows:hover{
    cursor: pointer;
}


.fa-arrow-left{
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
}

.fa-arrow-right{
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}

.slider-position .round{
    display: inline-block;
    width: 5px;
    height: 5px;
    background-color: transparent;
    border-radius: 50%;
    border: white solid 1px;
    cursor: pointer;
    margin-right: 5px;
    transition: background-color 0.5s;
}


.slider-position .round.active{
    background-color: white;
}


.slider-position .round:hover{
    background-color: white;
}

.slider-position .round:last-child{
    margin: 0;
}


.slider-position{
    position: absolute;
    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);
}

.credit{
    background-color: rgba(228, 214, 214, 0.7) ;
    padding: 10px;
    bottom: 0;
    right: 0;
    position: absolute;
    z-index: 200;
    border-bottom-right-radius: 10px ;
}


.face{
    animation-name: fadeInOut, moveLeft300px, bounce;
    animation-duration: 2.5s, 5s, 1s;
    animation-iteration-count: 2, 1, 5;
}


@keyframes fade {
  from {opacity:0.2} 
  to {opacity: 1}
}

/*---------*/
.new-cols{
  background-color:transparent;border:0px solid gray;padding:0.5em;
}

.box{
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  border-radius:5px;
  min-height:350px;
  background-color:white;
  padding:1em;
  position:relative;
}

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

.flex-container {
  display: flex;
}

.flex-container > div {
  margin:2px;
  padding:0px;
  font-size:10px;
  border:0px solid gray;
  word-wrap: break-word;
}

.flex-container > div > img{
 width:100%;
 height: 100%;
}


/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  -webkit-animation: fadeEffect 1s;
  animation: fadeEffect 1s;
  background-color:#fff;
  min-height:400px;
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

</style>

</head>
<body> 
<div class="navbar">
      <ul class="navbar-logo" style="float:left;">
      <li class="navlogo"><img src="https://www.psu.ac.th/img/logos/psu_en.png" height="40px" /></li>     
      </ul>

      <ul class="navbar-toggle" style="float:right;">
        <li>
            <a><button  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="fa fa-bars"></span>
                </button>
            </a>
        </li>
      </ul>

      <div class="collapse navbar-collapse"  id="collapsibleNavbar">
      <ul class="navbar-links" style="float:left;">  
        <li class="navbar-dropdown">
          <label for="menu1" class="lbmenu"><span>เกี่ยวกับเรา <i class="arrow fa fa-angle-down" aria-hidden="true"></i></span>  </label>
          
          <input id="menu1" type="checkbox" name="menu" hidden> 
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu2" class="lbmenu"><span>หลักสูตร <i class="arrow fa fa-angle-down" aria-hidden="true"></i></span></label> 
          <input id="menu2" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu3" class="lbmenu"><span>ติดต่อ <i class="arrow fa fa-angle-down" aria-hidden="true"></i></span></label> 
          <input id="menu3" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu4" class="lbmenu"><span>ผู้เกี่ยวข้อง <i class="arrow fa fa-angle-down" aria-hidden="true"></i></span></label> 
          <input id="menu4" type="checkbox" name="menu" hidden>
          <ul class="dropdown"> 
            <li href="#">Tomato Soup</a>
            <li href="#">Veg Manchow Soup</a>
            <li href="#">Veg Hot Soup</a>
          </ul>
        </li>
        <li class="navbar-dropdown">
          <label for="menu5" class="lbmenu"><span>Chinese</span></label> 
         
        </li>
      </ul>
      <ul class="navbar-login" style="float:right;">
        <li><a href="#">Login</a></li>
      </ul>
    </div>
</div>
   
<div class="container-fluid">
  <div class="row" style="background-color:white;">
		
	<!--slide-->
  <div id="caroussel">
      <div class="img-caroussel active" data-img="1" style="background-image: url(https://nurpn.psu.ac.th/th/images/banners/VISION66.png)">
      <div class="credit">Photo de <a href="https://unsplash.com/fr/@vorosbenisop?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Benjamin Voros</a> sur <a href="https://unsplash.com/fr/photos/montagne-enneigee-sous-les-etoiles-phIFdC6lA4E?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a></a>
      </div>   
      </div>

      <div class="img-caroussel" data-img="2" style="background-image: url(./image/slide1.png)">
      <div class="credit">Photo de <a href="https://unsplash.com/fr/@vorosbenisop?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Benjamin Voros</a> sur <a href="https://unsplash.com/fr/photos/croissant-de-lune-au-dessus-de-la-montagne-U-Kty6HxcQc?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
      </div>
      </div>
      <div class="img-caroussel" data-img="3" style="background-image: url(https://images.unsplash.com/photo-1559128010-7c1ad6e1b6a5?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
      <div class="credit">Photo de <a href="https://unsplash.com/fr/@twinckels?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Tom Winckels</a> sur <a href="https://unsplash.com/fr/photos/alberi-verdi-sulla-scogliera-I7oLRdM9YIw?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
      </div>
      </div>
      <div class="img-caroussel" data-img="4" style="background-image: url(https://images.unsplash.com/photo-1532079890557-10d83624b9de?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
      <div class="credit">Photo de <a href="https://unsplash.com/fr/@appolinary_kalashnikova?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Appolinary Kalashnikova</a> sur <a href="https://unsplash.com/fr/photos/champs-de-fleurs-pendant-la-journee-2onvM-fFMmE?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
      </div>
      </div>

    <div class="arrows">
    <i class="farrows fa-solid fa-arrow-left" id="previous"></i>
    <i class="farrows fa-solid fa-arrow-right" id="next"></i>
    </div>

    <div class="slider-position">
    <span class="round active" data-img="1"></span>
    <span class="round" data-img="2"></span>
    <span class="round" data-img="3"></span>
    <span class="round" data-img="4"></span>
    </div>
</div>

<!--slide-->
    </div>
    
    <div class="row" style="background-color:#fff;">

    <div class="container-fluid">
    <div class="row">
    <div class="col col-md-5 col-sm-12" style="margin:20px;background-color:#003c71;min-height:450px;">
      111111
    </div>  
    <div class="col col-md-6 col-sm-12" style="margin:20px;">
      <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'London')">สมัครงาน</button>
      <button class="tablinks" onclick="openCity(event, 'Paris')">ประชาสัมพันธ์</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo')">จัดซื้อจัดจ้าง</button>
      </div>

      <div id="London" class="tabcontent">
      <h3>London</h3>
      <p>London is the capital city of England.</p>
      </div>

      <div id="Paris" class="tabcontent">
      <h3>Paris</h3>
      <p>Paris is the capital of France.</p> 
      </div>

      <div id="Tokyo" class="tabcontent">
      <h3>Tokyo</h3>
      <p>Tokyo is the capital of Japan.</p>
      </div>

    </div>
    </div>
    </div>
  </div>

    <div class="row" style="background-color:white;">
    <center>
    <div class="fade-in-text">
      <img src="./image/pro1.png" width="100%" style="text-align:center;" />
    </div>
    </center>
    </div>


    <div class="row" style="background-color:#f4f4f2;min-height:300px;padding:3em;">
    
    <h2>ข่าวสาร</h2> 
    <span style="margin:10px;color:#959596;"><b>ข่าวเด่น</b></span>  <span style="margin:10px;color:#959596;"><b>ข่าววิจัยและนวัตกรรม</b></span>
    
    <br> <br> 

    <div class="new-cols col col-md-3 col-sm-12" style="">
    <!--box1-->  
    <div class="box">
        <div id="pic1">
          <div><img src="https://www.psu.ac.th/admin/assets/images/news/1870_th.png" class="img-fluid" width="100%"></div>
          <div style="padding:0.5em;">
          ทีมนักวิจัย มหาวิทยาลัยสงขลานครินทร์ โดย ดร. กิตติคุณ ทองพูล สาขาวิชาวิศวกรรมไฟฟ้า คณะวิศวกรรมศาสตร์ และ พ.ต.อ. สิทธิศักดิ์ จันทรสว่าง ผกก.ปฏิบัติการพิเศษ ภ.จว.สงขลา
          </div>
        </div>
      </div>
    </div>
    <!--box2-->
    <div class="new-cols col col-md-3 col-sm-12" style="">
    <div class="box">
        <?php for($i=1;$i<=3;$i++){ ?>

          <div class="flex-container" style="width:100%;height:100px;border-bottom:1px solid #ccc;margin-bottom:5px;">
  <div style="width:50%;"><img src="https://www.psu.ac.th/admin/assets/images/news/1870_th.png" class="img-fluid"></div>
  <div style="width:50%;">ทีมนักวิจัย มหาวิทยาลัยสงขลานครินทร์ โดย ดร. กิตติคุณ ทองพูล สาขาวิชาวิศวกรรมไฟฟ้า คณะวิศวกรรมศาสตร์ และ พ.ต.อ. สิทธิศักดิ์ จันทรสว่าง ..</div>
</div>
       
        <?php } ?>
      </div>
    </div>
    <!--box3-->
    <div class="new-cols col col-md-3 col-sm-12" style="">
    <div class="box">
    <?php for($i=1;$i<=3;$i++){ ?>


<div class="flex-container" style="width:100%;height:100px;border-bottom:1px solid #ccc;margin-bottom:5px;">
  <div style="width:50%;"><img src="https://www.psu.ac.th/admin/assets/images/news/1870_th.png" class="img-fluid"></div> 
  <div style="width:50%;">ทีมนักวิจัย มหาวิทยาลัยสงขลานครินทร์ โดย ดร. กิตติคุณ ทองพูล สาขาวิชาวิศวกรรมไฟฟ้า คณะวิศวกรรมศาสตร์ และ พ.ต.อ. สิทธิศักดิ์ จันทรสว่าง ..</div>
</div>



<?php } ?>
      </div>
    </div>
    <!--box4-->
    <div class="new-cols col col-md-3 col-sm-12" style="">
    <div class="box">
    <?php for($i=1;$i<=6;$i++){ ?>

    <div id="pic2" style="width:100%;">
      <div style="font-size:10px;">
      ทีมนักวิจัย มหาวิทยาลัยสงขลานครินทร์ โดย ดร. กิตติคุณ สาข...
      </div>
    </div>
    <hr>
<?php } ?>
      </div>
    </div>
    
    <!--<center>
    <div class="fade-in-text">
      <img src="./image/activity1.png" width="90%" style="text-align:center;" />
    </div>
    </center>-->
   
    </div>
</div>

<!--<div class="container">
  <div class="row" style="background-color:white;">

<br><br><br><br> 
   
  <div class="fade-in-text">
    <p>Fade-in Text</p>
  </div>-->
  <!--endcon -->


  <div class="container-fluid">
  <div class="row" style="background-color:white;min-height:400px;">
    </div>
  </div>


  <div class="container-fluid">
  <div class="row" style="background-color:white;">
		
		<main style="background-color:#FFF;">
			<div class="content content--fixed">

				<nav class="pagination">
					<a id="item_1"  class="pagination__item">#1</a>
					<a id="item_2"  class="pagination__item">#2</a>
					<a id="item_3"  class="pagination__item">#3</a>
					<a id="item_4"  class="pagination__item">#4</a>
					<a id="item_5"  class="pagination__item">#5</a>  
				</nav>
			</div>
			<div class="slides" style="background-color:#FFF;">
				<div class="slide">
					<div class="slide__img" style="background-image: url('./image/slide1.png');"></div>
				</div>
				<div class="slide">
					<div class="slide__img" style="background-image: url(https://static.ybox.vn/2022/5/3/1653434516320-Thi%E1%BA%BFt%20k%E1%BA%BF%20ch%C6%B0a%20c%C3%B3%20t%C3%AAn%20(23).png);"></div>
				</div>
				<div class="slide">
					<div class="slide__img" style="background-image: url(./slicerevealer/img/8.jpg);"></div>
				</div>
				<div class="slide">
					<div class="slide__img" style="background-image: url(./slicerevealer/img/9.jpg);"></div>
				</div>
				<div class="slide">
					<div class="slide__img" style="background-image: url(./slicerevealer/img/6.jpg);"></div>
				</div>
			</div>
		</main>



    </div>
</div>


<!--#2c4988 -->
<div class="container-fluid top-footer">
      <!-- footer item 1 -->
      <div class="footer-item">
        <h2 class="footer-title">วัฒนธรรมองค์กร</h2>
        <div class="footer-items">
        ประโยชน์ของเพื่อนมนุษย์เป็นกิจที่หนึ่ง
        <br>(Our Soul is for the Benefit of Mankind)
        </div>
      </div>
      <!-- footer item 2 -->
      <div class="footer-item">
        <h2 class="footer-title">วิทยาเขต</h2>
        <div class="footer-items">
          วิทยาเขตหาดใหญ่
          <br>วิทยาเขตปัตตานี
          <br>วิทยาเขตภูเก็ต
          <br>วิทยาเขตสุราษฎร์ธานี
          <br>วิทยาเขตตรัง
        </div>
      </div>
      <!-- footer item 3 -->
      <div class="footer-item">
        <h2 class="footer-title">ข้อมูลทั่วไป</h2>
        <div class="footer-items">
          วิสัยทัศน์ / พันธกิจ / เป้าประสงค์
          <br>ตรามหาวิทยาลัย
          <br>ประวัติพระราชบิดา
          <br>ประวัติมหาวิทยาลัย
        </div>
      </div>
      <!-- footer item 4 -->
      <div class="footer-item">
        <h2 class="footer-title">ติดต่อ</h2>
        <div class="footer-items">
           มหาวิทยาลัยสงขลานครินทร์
          <br>15 ถ.กาญจนวณิชย์ อ.หาดใหญ่ จ.สงขลา 90110
    
        </div>
      </div>
    </div>
    <div class="container-fluid end-footer" style="background-color:#00305b;color:white;">
      <div class="copyright">© 2021 Copyright: Prince of Songkla University, All right reserved</b></div>
      <a class="designer" href="#">Thierry M</a>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="./slicerevealer/js/imagesloaded.pkgd.min.js"></script>
		<script src="./slicerevealer/js/anime.min.js"></script>
		<script src="./slicerevealer/js/uncover.js"></script>
		<script src="./slicerevealer/js/demo11.js"></script>
	</body>
</html>