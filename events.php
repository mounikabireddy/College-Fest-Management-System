<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    
.container 
    {
  position: relative;
  width: 100%;
     }

.image
    {
   display: inline-block;
    height: auto;
   width: 100%;
        background-size: contain;
    }

.overlay
    {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: tan;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: 2s ease;
    }

.container:hover .overlay 
    {
  bottom: 0;
  height: 100%;
}

.text  
    {
  color: white;
  font-size: 17px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
    }
</style>
    
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container 
    {
  max-width: 7500px;
  position: relative;
  margin: auto;
    }

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
     }

/* Number text (1/3 etc) */
.numbertext 
    {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
   }

/* The dots/bullets/indicators */
.dot
    {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: tan;
  border-radius: 50%;
  display: inline-block;
  transition: background-color .6s ease;
   }

.active
    {
  background-color: #717171;
    }

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
    
<style>
.button {
  background-color:sienna;
  border:none;
  color: salmon;
  padding: 15px 30px;
  text-align: center;
  text-decoration: underline;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  opacity: 0.6;
    transition: 0.3s;
}
 .button{
            border-radius: 35px;
            cursor:pointer;
            transition: 0.3s;
        }
           
.button:hover{opacity: 1}
           
 p.oblique {
  font-style: oblique;
             }
    h1{
    
             color: darkcyan;
         text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF
    }
    p{
        color: darkmagenta;
    }
           
</style>    
</head>
<center>
<body style="background-color: darkgoldenrod">




                                    <div class="slideshow-container">
                                                       
                                                   
                                                   
        <div class="mySlides fade">
        <div class="container">
        <img src="Images/solodance.jpg" class="image"  style="width:100%" >
        <div class="overlay">
        <div class="text"><h1>Solo Dance[Eventid-1]</h1>
<p  class="oblique">Any types of Dance forms are welcomed(swing,Belly,Clasical,hiphop,ballet)This event is conducted on 14th march at 11:30am.The registration Fees is 70/-.The Location of the event is Main Stage.The Cash prize amount is</p>
                    <p  class="oblique" ><b >1ST Prize-1000/-</b></p>
                    <p  class="oblique"><b>2ND Prize-800/-</b></p>
            <p  class="oblique">Registration can be done after entering the college details</p></div></div></div></div>
            
            

     <div class="mySlides fade">
     <div class="container">
     <img src="Images/ss.jpg" class="image" style="width:100%" >
     <div class="overlay">
     <div class="text" ><h1>Solo Singing[Eventid-2]</h1> 
 <p class="oblique" >A single performer, who may be performing completely alone or supported by an accompanying instrument such as a piano or organ.This event is conducted on 14th march at 1:00pm.The registration Fees is 100/-.The Location of the event is Main Stage.The Cash prize amount is</p>
                   <p  class="oblique"><b>1ST Prize-1500/-</b></p>
                   <p  class="oblique"><b>2ND Prize-1300/-</b></p>
    <p  class="oblique">Registration can be done after entering the college details</p></div></div></div></div>

                                                   

  <div class="mySlides fade">
  <div class="container">
  <img src="Images/studios.jpg" class="image"  style="width:100%">
  <div class="overlay">
  <div class="text"><h1>Marvel Quiz[Eventid-3]</h1>  
<p class="oblique"><p>Are you a huge fan of Marvel Movies then take this Quiz to test your Knowledge and win some exciting Prices.This event is conducted on 15th march at 1:00pm.The registration Fees is 120/-.The Location of the event is RoomNo-423.The Cash prize amount is</p>
              <p><b>1ST Prize-1400/-</b></p>
              <p><b>2ND Prize-1200/-</b></p>
        <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>
    
                                                   
    
                                                   
  <div class="mySlides fade">
  <div class="container">
  <img src="Images/friend.jpg" class="image"  style="width:100%">
  <div class="overlay">
  <div class="text"><h1>Friends Trivia[Eventid-4]</h1>
<p  class="oblique">How much do you know about Rachel, Ross, Monica, Chandler, Phoebe and Joey? Find out by taking this Friends quiz! and win some exciting prizes.This event is conducted on 15th march at 2:30pm.The registration Fees is 100/-.The Location of the event is Main Building RoomNo-306.The Cash prize amount is</p>
              <p><b>1ST Prize-1200/-</b></p>
              <p><b>2ND Prize-1000/-</b></p>
      <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>
    
    
    
 <div class="mySlides fade">
  <div class="container">
  <img src="Images/counter.jpg" class="image"  style="width:100%">
  <div class="overlay">
<div class="text"><h1>Counter Strike[Eventid-5]</h1>
   <p class="oblique">Are you really good at Counter strike game,so come and test yourself and win some exciting prizes.This event is conducted on 14th march at 10:30am.The registration Fees is 200/-.The Location of the event is Main Building RoomNo-617(IS Lab).The Cash prize amount is</p>
              <p class="oblique"><b>1ST Prize-2000/-</b></p>
              <p class="oblique"><b>2ND Prize-1500/-</b></p>
        <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div> 
    
    
 <div class="mySlides fade">
  <div class="container">
  <img src="Images/BD.jpg" class="image"  style="width:100%">
  <div class="overlay">
<div class="text"><h1>Blind Date[Eventid-6]</h1>
  <p class="oblique">The people who take part in the blind date have never met or seen each other, hence the phrase "blind date".Seems exciting come and check your Date.This event is conducted on 15th march  at 3:30pm .The registration Fees is 60/-.The Location of the event is (quadrangle).The Cash prize amount is</p>
              <p class="oblique"><b>1ST Prize-700/-</b></p>
              <p class="oblique"><b>2ND Prize-500/-</b></p>
     <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div> 
    
                                                     
                                                                 
    <div class="mySlides fade">
  <div class="container">
  <img src="Images/hog.jpg" class="image"  style="width:100%" >
  <div class="overlay">
<div class="text"><h1>Hogathon[Eventid-7]</h1>
    <p class="oblique">For all the food-lovers who are big time foodie, a glutton and loves to eat it all at one stroke. Face off with all your friends and find out who can gulp down the maximum amount in the fastest time.This event is conducted on 14th march at 1:30pm.The registration Fees is 80/-.The Location of the event is quadrangle .The Cash prize amount is</p>
              <p class="oblique"><b>1ST Prize-1000/-</b></p>
              <p class="oblique"><b>2ND Prize-900/-</b></p>
           <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>                                          
                            
                                                 
                                                   
                                                   
 <div class="mySlides fade">
 <div class="container">
 <img src="Images/tug.jpg" class="image" style="width:100%">
 <div class="overlay">
 <div class="text"> <h1>Tug of War[Eventid-8]</h1>
   <p class="oblique">Tug War is a game about strength, weakness, and wit. Tug your opponents while keeping your energy higher.Register your team and show us your strength.No of the participants must be 4.This event is conducted on 15th march at 12:00pm.The registration Fees is 300/-.The Location of the event is near Quadrangle.The Cash prize amount is</p>
              <p class="oblique"><b>1ST Prize-2000/-</b></p>
              <p class="oblique"><b>2ND Prize-1500/-</b></p>
           <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>          
    
                                                   
                                                   
                                    
  <div class="mySlides fade">
 <div class="container">
 <img src="Images/treasure.jpg" class="image" style="width:100%">
 <div class="overlay">
 <div class="text"> <h1>Treasure Hunt[Eventid-9]</h1>
     <p class="oblique">The Hidden Quest Treasure Hunt takes participants on a cryptic, interactive journey into the secret nooks and crannies of a location of your choice.No of the participants must be 4.This event is conducted on 15th march at 4:00pm.The registration Fees is 250/-.The Location of the event is near Quadrangle.The Cash prize amount is</p>
              <p class="oblique"><b>1ST Prize-2500/-</b></p>
              <p class="oblique"><b>2ND Prize-2000/-</b></p>
           <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>        
  
      
      
      
      
      
       <div class="mySlides fade">
 <div class="container">
 <img src="Images/debate.jpg" class="image" style="width:100%">
 <div class="overlay">
 <div class="text"><h1>Debate[Eventid-10]</h1>
     <p class="oblique">Debates are a wonderful, high-interest way to teach a number of skills to students. Debate teams are valued for training team mates in public speaking, grace under pressure, and critical thinking.Come and Test your skills.No of the participants must be 2.This event is conducted on 14th march at 2:30pm.The registration Fees is 150/-.The Location of the event is near Quadrangle.The Cash prize amount is </p>
              <p class="oblique"><b>1ST Prize-1000/-</b></p>
              <p class="oblique"><b>2ND Prize-800/-</b></p>
    <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>
           
           
           
           
     <div class="mySlides fade">
 <div class="container">
 <img src="Images/groupdan.jpg" class="image" style="width:100%">
 <div class="overlay">
 <div class="text"><h1>Group Dance[Eventid-11]</h1>
     <p class="oblique">Being one of the most popular events, Group dance is the dance extravaganza. Flashy costumes, loud make-up and the outstanding choreography make a dance team the best!.Interested can come and register.No of the participants must be 4.This event is conducted on 14th march  at 4:00pm.The registration Fees is 400/-.The Location of the event is Main Stage. The Cash prize amount is </p>
            <p class="oblique"><b>1ST Prize-3000/-</b></p>
              <p class="oblique"><b>2ND Prize-2500/-</b></p>
    <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>
           
           
           
           
            <div class="mySlides fade">
 <div class="container">
 <img src="Images/cooking.jpg" class="image" style="width:100%">
 <div class="overlay">
 <div class="text"><h1>Cookery(Without Fire)[Eventid-12]</h1>
    <p class="oblique"> The only thing better than talking about food is preparing it.Foodie is the new religion which everyone likes to follow with vigor and hunger.Are you really a good chef to prepare such food without fire.So test yourself by registering to this event.No of the participants must be 3.This event is conducted on 14th march at 3:00pm .The registration Fees is 150/-.The Location of the event is Quardrangle. The Cash prize amount is </p> 
                <p class="oblique"><b>1ST Prize-1500/-</b></p>
                 <p class="oblique"><b>2ND Prize-1200/-</b></p>
    <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>
           
           
           
 <div class="mySlides fade">
 <div class="container">
 <img src="Images/Beg.jpg" class="image" style="width:100%">
 <div class="overlay">
 <div class="text"><h1>Beg Borrow Steal[Eventid-13]</h1>
     <p class="oblique">Get ready to put all your resources and contacts to a test to fetch the most radical and extraordinary things in this epic race. In this game show you can win money by begging, borrowing or stealing things. Participants will be given a list of things that they have to fetch within a time span. Everything is fair in this war. 'Jugaad' is the key word.So test yourself and your team mates by registering to this event.No of the participants must be 2.This event is conducted on 15th march at 1:30pm.The registration Fees is 300/-.The Location of the event is near Quardrangle. The Cash prize amount is </p> 
                       <p class="oblique"><b>1ST Prize-1500/-</b></p>
                        <p class="oblique"><b>2ND Prize-1000/-</b></p>
    <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>                   
                                                   
                                                   
   
                                        
                                        
<div class="mySlides fade">
 <div class="container">
 <img src="Images/fash1.jpg" class="image" style="width:100%">
 <div class="overlay">
 <div class="text"><h1>Fashion Show[Eventid-14]</h1>
     <p class="oblique">Everyone aspires to be a fashionista. Dress in your best and show the right attitude.
Get ready to adorn from the brightest star to the darkest moon.No of the participants must be 4.This event is conducted on 15th march at 7:00pm.The registration Fees is 400/-.The Location of the event is Main Stage. The Cash prize amount is </p> 
                       <p class="oblique"><b>1ST Prize-2500/-</b></p>
                        <p class="oblique"><b>2ND Prize-1800/-</b></p>
    <p class="oblique">Registration can be done after entering the college details</p></div></div></div></div>  
                                                   
                                                   
                                                   
                                                
  

</div>
            

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
            </div>
            

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 10000); // Change image every 10 seconds
}
        </script>
   
      </body></center>
                                                </html> 
