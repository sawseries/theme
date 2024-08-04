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

//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js
//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js
//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>

<style>

body {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
  margin: 0;
  background: white;
  font-family: "Trebuchet MS", sans-serif;
}

#parent {
  position: relative;
  width: 600px;
  height: 400px;
}

#mask-outer {
  position: absolute;
  top: -100px;
  left: 0;
  width: 600px;
  height: 600px;
  padding: 100px 0;
  box-sizing: border-box;
  pointer-events: none;
}

#mask-inner {
  position: relative;
  width: 100%;
  height: 100%;
}

.mask {
  position: absolute;
  right: 0;
  height: 12.5%;
  width: 100%;
  background-color: white;
  transform-origin: right center;
}

.a { top: 0; }
.b { top: 12.5%; }
.c { top: 25%; }
.d { top: 37.5%; }
.e { top: 50%; }
.f { top: 62.5%; }
.g { top: 75%; }
.h { top: 87.5%; }

</style>

<script>


</script>

<script>

 // use a script tag or an external JS file
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(Flip,ScrollTrigger,Observer,ScrollToPlugin,Draggable,MotionPathPlugin,EaselPlugin,PixiPlugin,TextPlugin,RoughEase,ExpoScaleEase,SlowMo,CustomEase)

  let cont = $("#mask-outer")[0],
    masks = $(".mask").toArray(),
    tl = new TimelineMax({repeat: -1, paused: true});

TweenLite.defaultEase = Power2.easeOut;

tl.staggerTo(masks, 1, {scaleX: 0}, 0.2)
  .set(cont, {padding: "0 100px", rotation: "-=90", scaleY:1})
  /*.staggerTo(masks, 1, {scaleX: 1}, 0.2)
  .set(cont, {padding: "100px 0", rotation: "-=90", scaleY:-1})
  .staggerTo(masks, 1, {scaleX: 0}, 0.2)
  .set(cont, {padding: "0 100px", rotation: "-=90", scaleY:1})
  .staggerTo(masks, 1, {scaleX: 1}, 0.2)
  .set(cont, {padding: "100px 0", rotation: "-=90", scaleY:-1})
  .staggerTo(masks, 1, {scaleX: 0}, 0.2)
  .set(cont, {padding: "0 100px", rotation: "-=90", scaleY:1})
  .staggerTo(masks, 1, {scaleX: 1}, 0.2)
  .set(cont, {padding: "100px 0", rotation: "-=90", scaleY:-1})
  .staggerTo(masks, 1, {scaleX: 0}, 0.2)
  .set(cont, {padding: "0 100px", rotation: "-=90", scaleY:1})
  .staggerTo(masks, 1, {scaleX: 1}, 0.2);*/

$("#image").load(() => { tl.play(); });

 });

</script>

<body>
<div id="parent">
  <img id="image" src="https://u.cubeupload.com/Acccent/pexelsphoto584636.jpeg" alt="Photo by Tejas Prajapati">
  <div id="mask-outer">
    <div id="mask-inner">
      <div class="mask a"></div>
      <div class="mask b"></div>
      <div class="mask c"></div>
      <div class="mask d"></div>
      <div class="mask e"></div>
      <div class="mask f"></div>
      <div class="mask g"></div>
      <div class="mask h"></div>
    </div>
  </div>
</div>

<span><a href="https://www.pexels.com/photo/animal-avian-beak-biology-584636/">Photo by Tejas Prajapati</a></span>
</body>
</html>