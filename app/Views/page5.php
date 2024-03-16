﻿https://codepen.io/ThiagoFerreir4/pen/eNMxEp

<html>
<!-- Update 29.9.2015: <head></head> and <body></body> tags are included in this pen for quick copy/paste in case you to try this challenge offline -->
<head>
    <title>Infinito Web Design Studio</title>

   <style>

body,
html {
    width: 100%;
    height: 100%;
    
}

body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}

.topnav {
    font-size: 16px;
    border-bottom: 1px outset rgba(192, 192, 192, 0.5);
    background: rgba(192, 192, 192, 0.9);
    box-shadow: 0px 1px rgba(0, 0, 0, 0.3);
}
.topnav ul.navbar-nav li a {
background: rgba(28, 28, 28, 0.1);
color: #000;
}
.topnav ul.navbar-nav li a:hover,
.topnav ul.navbar-nav li a:focus
 {
background: rgba(255, 255, 255, 0.5);
color: #000;
}

.topnav .navbar-brand {
  background: rgba(28, 28, 28, 0.0);
  color: #000;
}

.topnav .navbar-brand:hover,
.topnav .navbar-brand:focus {
  background: rgba(255, 255, 255, 0.5);
  color: #000;
}

.lead {
    font-size: 18px;
    font-weight: 400;
}
/*top background*/
.intro-header { 
    padding-top: 50px; /* If you're making other pages, make sure there is 50px of padding to make sure the navbar doesn't overlap content! */
    padding-bottom: 50px;
    text-align: center;
    background: url('https://40.media.tumblr.com/1b916597d3e174399cb7adadddb66ede/tumblr_nt5uk4psl31ud7rr3o1_1280.jpg') no-repeat center center fixed;
    background-size: cover;
    height: 855px;
}
.bg-overlay {
  background:rgba(0,0,0, 0.3);
  height: 855px;
}

.intro-message {
    position: relative;
    padding-top: 20%;
    padding-bottom: 20%;
}
/*Big header*/
.intro-message > h1 {
    margin-top: -50px;
    text-shadow: 2px 1px 2px #000;
    font-size: 5em;
    color: rgba(255, 255, 255, 0.7);
}

.intro-divider {
    width: 400px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}
/*small header*/
.intro-message > h3 {
    text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
  color: black;
}

@media(max-width:767px) {
    .intro-message {
        padding-bottom: 15%;
    }

    .intro-message > h1 {
        font-size: 3em;
    }

    ul.intro-social-buttons > li {
        display: block;
        margin-bottom: 20px;
        padding: 0;
    }

    ul.intro-social-buttons > li:last-child {
        margin-bottom: 0;
    }

    .intro-divider {
        width: 100%;
    }
}
/*line*/
hr.intro-divider {
  border: 1px outset rgba(255, 255, 255, 0.2);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.6);
  width: 100%;
}
/* social buttons */
.btn {
  display: inline-block;
  color: #000;
  border: 2px outset rgba(0, 0, 0, 0.9);
  background: #C0C0C0;
  text-shadow: 1px 1px 1px rgba(0,0,0, 20);
  box-shadow: 3px 3px 3px rgba(0,0,0,0.5);
  letter-spacing: 2px;
  transition: 0.2s;
}

.btn:hover {
	color: #fff;
  border: 2px outset rgba(0, 0, 0, 0.9);
  background: rgba(0,0,0, 0.9);
  transform:scale(1.1);
  transition: 0.2s;
  text-shadow: 1px 1px 1px rgba(0,0,0, 20);
  box-shadow: 3px 3px 3px rgba(0,0,0,0.5);
  letter-spacing: 2px;
}

/*section 2*/
.content-section-a {
    padding: 50px 0;
    background: url('https://68.media.tumblr.com/eb2382a5a4c996cfdab27bc0d1eb51ff/tumblr_nt5umxS1FY1ud7rr3o1_540.jpg') no-repeat center center fixed;
    background-size: cover;
    height: 855px;
}
.bg-overlay2 {
  margin-top: -50px;
  background: rgba(255, 255, 255, 0.2);
  height: 855px;
}
  /*self-taught*/
.container .link {
  color: rgb(255, 255, 255);
  font-weight: bold;
  font-size: 22px;
}
.container .link-footer {
  color: rgb(0, 0, 0);
  font-weight: bold;
  font-size: 32px;
}
.container .link-footer:hover {
  color:rgba(24,39,40, 0.8);
  font-weight: bold;
  font-size: 32px;
}

.container .link:hover {
  color: rgb(0,0,128);
  font-weight: bold;
  font-size: 22.5px;
}

h2.section-heading {
    margin-top: 100px;
    font-size: 3em;
    color: rgba(0, 0, 0, 0.9);
}

  /*text*/
 .content-section-a p {
    font-size: 22px;
   font-weight: bold;
    color: #000;
  }
.content-section-a p a {
  color: silver;
  font-weight: bold;
}
/*profile picture*/
.img-circle {
  margin-top: 150px;
  border: 1px outset rgba(255, 255, 255, 0.3);
  box-shadow: 1px 1px 1px rgba(0,0,0,0.6);
  
}


/* Portfolio section*/
section {
  color: black;
  background: url('https://68.media.tumblr.com/d3fd545cd977a174beef12c1106880bf/tumblr_nt505iKkul1ud7rr3o1_1280.jpg') no-repeat center center fixed;
  background-size: cover;
}

 #below-section {
  color: #000;
}

#small-text {
  color: white;
}

/*.portfolio-item {
  overflow: hidden;
  padding: 7px;
  color: white;
  height: 308px;
}*/
/*Portfolio items*/

#portfolio .portfolio-item {
  margin: 0 0 15px;
  right: 0;
  border: 1px outset rgba(255, 255, 255, 0.6);
}

#portfolio .portfolio-item:hover {
  transition: 0.5s;
  box-shadow: 5px 10px 5px rgba(0,0,0,0.9);
}

#portfolio .portfolio-item .portfolio-link {
  display: block;
  position: relative;
  max-width: 400px;
  margin: 0 auto;
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover {
  background: rgba(0, 0, 0, .7);
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: all ease .5s;
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s,
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover:hover {
  opacity: 1;
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content {
  position: absolute;
  width: 100%;
  height: 20px;
  font-size: 20px;
  text-align: center;
  top: 50%;
  margin-top: -12px;
  color: #fff;
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content i {
  margin-top: -12px;
}

#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content h3,
#portfolio .portfolio-item .portfolio-link .portfolio-hover .portfolio-hover-content h4 {
  margin: 0;
}

#portfolio .portfolio-item .portfolio-caption {
  max-width: 400px;
  margin: 0 auto;
  background-color: rgba(0,0,0, 0.8);
  text-align: center;
  padding: 25px;
}

#portfolio .portfolio-item .portfolio-caption h4 {
  color: #fff;
  text-transform: none;
  margin: 0;
}

#portfolio .portfolio-item .portfolio-caption p {
  font-family: "Droid Serif", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-style: italic;
  font-size: 13px;
  margin: 0;
}

#portfolio * {
  z-index: 2;
}

@media (min-width:767px) {
  #portfolio .portfolio-item {
    margin: 0 0 30px;
  }
}

/*.col-md-4 {
  overflow: hidden;
  display: inline-block;
  border: 1px outset rgba(255, 255, 255, 0.6);
  background: rgba(0, 0, 0, 0.6);
  border-radius: 1%;
  text-align: center;
  box-shadow: 2px 3px 2px rgba(0,0,0,0.3);
  text-shadow: 1px 2px 1px rgba(0,0,0,0.3);
  cursor: pointer;
}
.col-md-4:hover {
  transition: 0.5s;
  box-shadow: 5px 10px 5px rgba(0,0,0,0.9);  
}*/

.section-heading-spacer {
    float: left;
    width: 200px;
    border-top: 3px solid #e7e7e7;
}

.banner {
    padding: 100px 0;
    background: url('https://68.media.tumblr.com/ac46aa24b44b5036e9200abb71f810d9/tumblr_nt5vzxV6Us1ud7rr3o1_1280.jpg') no-repeat center center fixed;
    background-size: cover;
    height: 755px;
}

.bg-overlay4 {
  margin-top: -100px;
  padding: 100px 0;
  background: rgba(255,255,255, 0.3);
  height: 755px;
}

.banner ul {
    margin-bottom: 0;
}

.banner-social-buttons {
    float: right;
    margin-top: 0;
}

@media(max-width:1199px) {
    ul.banner-social-buttons {
        float: left;
        margin-top: 15px;
    }
}



    ul.banner-social-buttons > li {
        display: block;
        margin-bottom: 20px;
        padding: 0;
    }

    ul.banner-social-buttons > li:last-child {
        margin-bottom: 0;
    }

h2.connect {
   margin: 0;
   color: rgba(0, 0, 0, 0.9);
}

footer {
    padding: 50px 0;
    background: rgba(192, 192, 192, 0.9);
}

p.copyright {
    margin: 15px 0 0;
}

   </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="http://virtual-dawn.com/index_english.html" target="_blank">Thiago Ferreira</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>
                   <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
      <div class="bg-overlay">
        <div class="container">
  

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Infinito Web Design Studio</h1>
                        <h3>Where Awesomeness Is Brought To Life.</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/Ferreir4Thiago" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/ThiagoFerreir4" target="_blank" class="btn btn-default btn-lg "><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/thiagoferreir4" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                            <li>
                                <a href="https://www.freecodecamp.com/thiagoferreira" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-free-code-camp fa-fw"></i> <span class="network-name">freeCodeCamp</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
      </div>
    </div>
    <!-- /.intro-header -->

 <!-- Page Content -->

	<a  name="about"></a>
    <div class="content-section-a">
      <div class="bg-overlay2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    
                    <div class="clearfix"></div>
                  <h2 class="section-heading">Infinito Web Design Studio.</h2>
                  </br>
                    <p class="lead">I'm a <a class="link" target="_blank" href="https://www.freecodecamp.com/thiagoferreira">self taught</a> web designer, developer, co-founder and entrepreneur based in Finland.</br>
              I'm currently part of a small VR(Virtual Reality) development team in an upcoming <a class="link" target="_blank" href="https://www.facebook.com/Virtual-Dawn-802163799892155/">start-up called Virtual-Dawn</a>, developing awesome VR games. I'm also responsible for all of my company's web development needs.</br> 
My passion is to use technology based solutions, to help solve real world challenges.</br>
Competences:</br>
Languages and Frameworks:</br>
Javascript, C#m HTML5, CSS3, jQuery, Bootstrap3, Angular.js, Meteor.js.</br>
Tools & expertise:</br>
Git, Responsive Web Design, Agile Methodologies, Unity5 3D, Photoshop, VR Level Design, and Unity Generalist.
</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6 collapse navbar-collapse">
                    <img class="img-circle img-responsive" src="https://68.media.tumblr.com/ccd0e1b1bdb3492eecdac39b8d42d7ad/tumblr_nwh4pmSv8k1ud7rr3o1_400.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
      </div>
     </div>
    </div>
  
     <!-- Portfolio Grid Section -->
   <a  name="portfolio"></a>
    <section id="portfolio" class="bg-light-gray bounds">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Awesomeness Portfolio.</h2>
                    <h3 id="below-section" class="section-subheading text-muted">Below you'll find some of my recent work.</h3>
                </div>
            </div>
          <!-- Portfolio img1 -->
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="https://codepen.io/ThiagoFerreir4/full/gpvJOK" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-fire fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://68.media.tumblr.com/a4a06b925ad2ad936ba2ce6c3343c444/tumblr_nwh4epTtMV1ud7rr3o1_1280.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Twitch.tv API project</h4>
                        <p id="small-text" class="text-muted">Bootstrap and Angularjs</p>
                    </div>
                </div>
              <!-- End of Portfolio img1 -->
              
              <!-- Portfolio img2 -->
                <div class="col-md-4 col-sm-6 portfolio-item portfolio2">
                    <a href="https://codepen.io/ThiagoFerreir4/full/vOyXre" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-fire fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://40.media.tumblr.com/a73e79ce9844761d7cdc93d202b5cea1/tumblr_nwh4iomduD1ud7rr3o1_1280.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Wikipedia Search Engine</h4>
                        <p id="small-text" class="text-muted">Bootstrap and jQuery</p>
                    </div>
                </div>
              <!-- End of Portfolio img2 -->
              
              <!-- Portfolio img3 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="https://codepen.io/ThiagoFerreir4/full/QbKWGO" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-fire fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://68.media.tumblr.com/5abea52ea28e9ea20ab995ebd23299a1/tumblr_nwh4iomduD1ud7rr3o2_1280.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Stainless Steel Calculator</h4>
                        <p id="small-text" class="text-muted">SCSS and Vanilla Javascript</p>
                    </div>
                </div>
              <!-- End of Portfolio img3 -->
              
              <!-- Portfolio img4 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="https://codepen.io/ThiagoFerreir4/full/vOaRQz/" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-fire fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://40.media.tumblr.com/7512ad23b7e68304a65182988b9c804a/tumblr_nwy76xfEXi1ud7rr3o1_1280.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pomodoro Timer Zipline</h4>
                        <p id="small-text" class="text-muted">Bootstrap and Angular.js</p>
                    </div>
                </div>
              <!-- End of Portfolio img4 -->
              
              <!-- Portfolio img5 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="https://codepen.io/ThiagoFerreir4/full/oXwKJV" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-fire fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://68.media.tumblr.com/59b50efb8f7435fef9f87fd871b90d7a/tumblr_nxhm4k1jI81ud7rr3o1_1280.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Weather App</h4>
                        <p id="small-text" class="text-muted">Bootstrap and Vanilla Javascript</p>
                    </div>
                </div>
              <!-- End of Portfolio img5 -->
              
              <!-- Portfolio img6 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="https://codepen.io/ThiagoFerreir4/full/EjwGoX/" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-fire fa-3x"></i>
                            </div>
                        </div>
                        <img src="https://68.media.tumblr.com/030b4966650a0d1dac0bbcca6fe572e8/tumblr_nxhm7qz6Y91ud7rr3o1_1280.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pacman Tic Tac Toe</h4>
                        <p id="small-text" class="text-muted">CSS and jQuery</p>
                    </div>
                </div>
              <!-- End of Portfolio img6 -->
            </div>
        </div>
    </section>

	<a  name="contact"></a>
    <div class="banner">
      <div class="bg-overlay4">
        <div class="container">         
            <div class="row">
                <div class="col-lg-6">
                  <h2 class="connect">Check out some of my latest work at <a class="link-footer" target="_blank" href="https://www.facebook.com/Virtual-Dawn-802163799892155/">Virtual-Dawn's Facebook page.</a></h2>
                </div>
              </br>
      
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                                <a href="https://twitter.com/Ferreir4Thiago" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/ThiagoFerreir4" target="_blank" class="btn btn-default btn-lg "><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/thiagoferreir4" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                            <li>
                                <a href="https://www.freecodecamp.com/thiagoferreira" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-free-code-camp fa-fw"></i> <span class="network-name">freeCodeCamp</span></a>
                            </li>
                      
                    </ul>
                </div>
        </div>
        <!-- /.container -->
    </div>
</div>
</div>
</div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Infinito Web Design Studio 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    

</body>

</html>