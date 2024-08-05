<html>
    <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/56901/jonny-slice-image-gsap-jquery-plugin.js"></script>



        <style>

.sliced {
    position: relative;

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

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(#1896df,#5300ee);
}


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


i{
    color: white;
    font-size: 2rem;
    padding: 1rem;
    background-color: rgba(0,0,0,0.7);
}

i:hover{
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


.fade1{
  animation-name: fade;
  animation-duration: 2s;
}


.face{
    animation-name: fadeInOut, moveLeft300px, bounce;
    animation-duration: 2.5s, 5s, 1s;
    animation-iteration-count: 2, 1, 5;
}


.simg{
  animation-name: shape-image;
  animation-duration: 7s;
}

@keyframes shape-image {
  0% {
    width: 40%;
    border: 5px solid blue;
  }
  40% {
    width: 70%;
    border: 1px solid red;
    border-radius: 50%;
  }
  75% {
    width: 50%;
    border: 30px solid green;
  }
  100% {
    width: 100%;
    border: 7px solid purple;
  }
}

@keyframes fade {
  from {opacity:0.2} 
  to {opacity: 1}
}

        </style>
        <script>



$(document).ready(function () {


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

}, 3000);


});
function alertFunc(i) {

   // alert(i);
    //$("#a_"+i).click();
}

/*const img_slider_elements=document.querySelectorAll(".img-caroussel");
const arrows_elts= document.querySelectorAll(".arrows i")
const round_elts=document.querySelectorAll(".round");



let current_img= 1;

round_elts.forEach((round_elt)=>{

    round_elt.addEventListener("click", change_img_slider)
})



arrows_elts.forEach((arrow)=>{
    arrow.addEventListener("click", change_img_slider)
    
})




function change_img_slider(e){


    let index_img_to_show=null


    if (e.currentTarget.id === "previous"){

        index_img_to_show= parseInt(current_img) - 1 < 1 ? img_slider_elements.length  :  parseInt(current_img) - 1
    }


    else if(e.currentTarget.classList.contains("round")){

        index_img_to_show=e.currentTarget.getAttribute("data-img")
    
    }

    else{

        index_img_to_show= parseInt(current_img) + 1 > img_slider_elements.length ? 1 :  parseInt(current_img) + 1

    }



    img_slider_elements.forEach((img)=>{

    
        img.classList.remove("active")

        
        if(img.getAttribute("data-img") == index_img_to_show){

            current_img= img.getAttribute("data-img") 

            img.classList.add("active")

        }


    })



    round_elts.forEach((round_elt)=>{

        round_elt.classList.remove("active")

        if(round_elt.getAttribute("data-img") == index_img_to_show){

            round_elt.classList.add("active")

        }

    })

}*/

        </script>
    </head>
    <body>

    <div style="width:100%;height:700px;">
    <div id="caroussel">

        <div class="img-caroussel active" data-img="1" style="background-image: url(https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">
        
            <!--<div class="credit">Photo de <a href="https://unsplash.com/fr/@vorosbenisop?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Benjamin Voros</a> sur <a href="https://unsplash.com/fr/photos/montagne-enneigee-sous-les-etoiles-phIFdC6lA4E?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a></a>
            </div>-->
            
        </div>

        <div class="img-caroussel" data-img="2" style="background-image: url(https://images.unsplash.com/photo-1514897575457-c4db467cf78e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)">

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
            <i class="fa-solid fa-arrow-left" id="previous"></i>
            <i class="fa-solid fa-arrow-right" id="next"></i>
        </div>

        <div class="slider-position">
            <span class="round active" data-img="1"></span>
            <span class="round" data-img="2"></span>
            <span class="round" data-img="3"></span>
            <span class="round" data-img="4"></span>
        </div>


    </div>
</div>

    
</body>
</html>