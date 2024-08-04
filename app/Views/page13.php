<html>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<!--
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EaselPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/PixiPlugin.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>-->


<!-- RoughEase, ExpoScaleEase and SlowMo are all included in the EasePack file  
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script>-->   



<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>-->


//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js
https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js
https://s3-us-west-2.amazonaws.com/s.cdpn.io/56901/jonny-slice-image-gsap-jquery-plugin.js

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/56901/jonny-slice-image-gsap-jquery-plugin.js"></script>

<style>
/* apply a natural box layout model to all elements */
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body { 
  margin: 15px;
  font-family: "Raleway",sans-serif;
  font-size:14px;
}

h4 {
  font-size: 15px;
  margin-top:1.5em;
  text-transform: uppercase;
}

h4 > span{
  font-size: 12px;
  font-weight: normal;
  text-transform: lowercase;
}

/* required styles */
.sliced {
    position: relative;
    width: 670px;  /* required */
    height: 245px; /* required */
    overflow:hidden;
}

.sliced > img{
    visibility:hidden;
}

.tile {
    float: left;
    opacity: 1;
}
.tile-animated {
    visibility:hidden;
}
</style>

<script>


// USAGE - jonny sliced gsap jquery plugin
jQuery(function() { // on ready
  
  jQuery(window).bind("load", function(){ // on load

    // init sliced plugin
    
    // slice and animate image 1
    jQuery("#sliced1").sliced({
      x: 10, // number of tiles in x axis (pre row)
      y: 1, // number of tiles in y axis (per columns)
      duration: 0.4, // time length of animation
      staggerDelay: 0.1, // stagger length of each tile
      axis: "y", // x or y to animate
      direction: "down", // if axis x (left or right), if axis y (left or right)
      topMargin: 0, // to mimic metro grid 
      rightMargin: 0, // to mimic metro grid
      bottomMargin: 0, // to mimic metro grid
      leftMargin:0 // to mimic metro grid
    });
    
    // slice and animate image 2
    jQuery("#sliced2").sliced({
      x: 1, // number of tiles in x axis (pre row)
      y: 6, // number of tiles in y axis (per columns)
      duration: 0.6, // time length of animation
      staggerDelay: 0.1, // stagger length of each tile
      axis: "x", // x or y to animate
      direction: "right", // if axis x (left or right), if axis y (left or right)
      topMargin: 0, // to mimic metro grid
      rightMargin: 0, // to mimic metro grid
      bottomMargin: 0, // to mimic metro grid
      leftMargin:0 // to mimic metro grid
    });


    // trigger animation on load 
    // or trigger when you want with this snippet
     jQuery(".sliced").trigger("animate");

    
  }); // end window load
}); // end dom ready

</script>

<script>
 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(Flip,ScrollTrigger,Observer,ScrollToPlugin,Draggable,MotionPathPlugin,EaselPlugin,PixiPlugin,TextPlugin,RoughEase,ExpoScaleEase,SlowMo,CustomEase)

 });

</script>

<body>

Example #1 - from down to up using vertical slice<br>
<div id="sliced1" class="sliced1 sliced">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/56901/2d.jpg">
</div>

<br>
Example #2 - from right to left using horizontal slice<br>
<div id="sliced2" class="sliced2 sliced">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/56901/2d.jpg">
</div>

<h4>Jonny Image Slice GSAP jQuery Plugin <br><span>(various combination of options: number of tiles in x or y axis, duration, stagger delay, and direction)</span></h4>

</body>
</html>