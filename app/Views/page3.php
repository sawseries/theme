﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- STYLES -->

    <style>
    html, body {
  font-family: 'Open Sans', sans-serif;
  height: 100%;
}
body {
    background: #E9EEF4;
  float: left;
  width: 100%;
  height: 100vh;
  word-wrap: break-word;
  font-family: Raleway, sans-serif;
}
img {
  max-width: 100%;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
a {
  text-decoration: none;
}
.navbar {
  float: left;
  width: 100%;
  background: #ffffff;
  position: relative;
}



.white-label { 
  max-width: 210px;
  min-height: 42px;
  background: #279BE4;
 
}

.white-label .brand a{
    padding:1rem;
}

.white-label img {
  max-height: 43px;
}

.headernav {
  min-height: 42px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: #279BE4;

}

.menu-button {
  float: left;
  font-size: 29px;
  color: #fff;
  padding: 12px 19px;
}
.nav ul {
  height: 64px;
  float:left;
}
.nav ul li {
  float: left;
  position: relative;
  padding: 11px;
}
.nav > ul > li:first-child {
  border-left: none;
}
.nav ul li a {
  color: #fff;
  padding: 1px;
  float: right;
}
.nav ul li i {
  color: #fff;
}
.nav ul li:hover {
  background: #01A9F0;
  color: #fff;
}
.user-profile {
  float: right;
}
.user-profile > div {
  float: left;
  padding: 20px 8px;
  position: relative;
}
.user-profile i {
  font-size: 1.2em;
  color: #5F6F86;
}
.user-profile i:hover {
  color: #397AC5;
}
.font-icon i:after {
  position: absolute;
  content: '3';
  background: #E74C3C;
  color: #fff;
  font-size: 12px;
  border-radius: 50%;
  width: 10px;
  height: 10px;
  padding: 3px 4px 4px 3px;
  text-align: center;
  top: 12px;
  right: 11px;
}
.font-icon {
  padding:0;
  
}
.font-icon a{
    color:white;
}

.font-icon i {
  font-size: 20px;
  
}
.nav-mail .font-icon i:after {
  background: #2ECC71;
}
div.user-image {
  padding: 9px 5px;
  margin: 0 5px;
  border-left: 1px solid #ccc;
  border-right: 1px solid #ccc;
}
.nav-profile {
  background: #0274BD;
}
.nav-profile-image img {
  width: 39px;
  height: 41px;
  border-radius: 50%;
  float: left;
}
.nav-profile-name {
  float: right;
  margin: 11px 7px 8px 14px;
  color: #fff;
}
.nav-profile-name i {
  padding: 0 0 0 11px;
}
.nav-chat i:after {
  display: none;
}
.sidebar {
  overflow: hidden;
  width: 210px;
  height: 100%;
  float: left;
  background: #FFFFFF;
  border:1px solid gray;
  /*background: #2A2D33;*/
}
.sidebarnav {
  width:15%;
  height:100vh;
  padding: 0;
  background: #FFFFFF;;
  border-right: 1px solid #E0E0E0;
 
  float:left;
}
.sidebarnav h2 {
  color: #60636B;
  float: left;
  width: 100%;
  font-size: .8em;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  padding: 3px 0 2px 20px;
  border-top: 1px solid #4D4C4C;
  box-sizing: border-box;
  margin: 10px 0;
}
.sidebarnav ul {

}
.sidebarnav ul li {

}
.sidebarnav ul li a {
  color: #000;
  font-size: .90em;
  padding: 12px 18px;
  float: left;
  width: 100%;
  font-weight: 400;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.sidebarnav ul li:hover a, .sidebarnav ul li:hover a i, .sidebarnav li.active a, .sidebarnav li.active a i {
  color: #333;
}
.sidebarnav ul li:hover a {
  background: #D5D6EA;
  color:#4682B4;
}
.sidebarnav ul li.active a {
  background: #fff;
  color: #333;
}
.sidebarnav ul li.active a i {
  background: #fff;
}
.sidebarnav i {
  padding-right: 8px;
  font-size: 1.3em;
  color: #60636B;
  width: 25px;
  text-align: center;
}
.containner {

}
::-webkit-scrollbar {
    width: 12px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
.content {
  float: left;
  background: #E9EEF4;
  width: 84%;
  height:100vh;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.contentheader {
  background: #fff;
  float: left;
  width: 100%;
  margin-bottom: 15px;
  padding: 15px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-bottom: 1px solid #ccc;
  
}
.contentheader h1 {
  margin: 0;
  font-weight: normal;
  padding-bottom: 5px;
}
.contentheader p {
  margin: 0;
  padding-left: 2px;
}


.widgetbox {
  background: #fff;
  border: 1px solid #E0E0E0;
  float: left;
  width: 98%;
  margin: 0 0 15px 15px;
}
.widgetheader {
  background: #279BE4;
}
.widgetheader h2 {
  font-size: 15px;
  font-weight: normal;
  margin: 0;
  padding: 11px 15px;
  color: #F9F9F9;
  display: inline-block;
}
.samplewidget {max-width: 47%;}
.widgetbox .fa-cog {
  float: right;
  color: #fff;
  margin: 11px 11px 0 0;
  font-size: 20px;
}
    </style>
</head>
<body>

  <div class="navbar">
    <div class="headernav">
      <div class="menu-button">
      </div>
      <div class="nav">
        <ul>
          <li class="navsettings">
            <div class="fonticon"><a href="#"><b>HOME</b></a></div>            
          </li>
          <li class="navsettings">
            <div class="fonticon"><a href="#"><b>HOME</b></a></div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="sidebarnav">   
    <ul>      
      <li><a href="#"><i class="fa fa-desktop"></i> My Website</a></li>
      <li><a href="#"><i class="fa fa-usd"></i> Ecommerce</a></li>
      <li><a href="#"><i class="fa fa-pencil-square-o"></i> My Blog</a></li>
      <li><a href="#"><i class="fa fa-sitemap"></i> SEO Tools</a></li>
    </ul>
  </div>

<div class="content">
    <div class="contentheader">
      <h1>Dashboard</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
   
    <div class="widgetbox">
      <div class="widgetheader">
        <h2>Widget Header</h2>
        <i class="fa fa-cog"></i>
      </div>
      <div class="widgetcontent">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png">
      </div>
    </div>
</div>

</body>
</html>
