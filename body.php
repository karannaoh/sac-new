<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
body
{
	background-color: rgba(0,0,0,.67);
}
.col-sm-10
{
	box-shadow: 3px 3px 6px 6px rgba(0,0,0,.4);
	background-image: url('2.4.jpg');
	
}



.col-sm-10:hover
{
	
	background-image: url('6.jpg');
}
#about
{
	font-size: 16px;
    padding: 3.3em 3em ;
    word-spacing: 5px;
    font-weight: bold;
    font-size: 120%;
}

.thumbnail
{
	box-shadow: 3px 3px 6px 6px rgba(0,0,0,.4);
}
.col-sm-12
{
	
	font-family: 'Eczar', serif;
    font-size: 5rem;
    text-align: center;
    margin: 0;
    color: white;
  
    
}




h2
{
	font-weight: bold;
	text-decoration : underline;
}
.btn .btn-primary .btn-lg
{
	font-size: 250%;
}

.bor
{
	border: 4px solid;
    padding: 12px;
    color: black;
}






.flip {
  -webkit-perspective: 800;   
          perspective: 800;
        position: relative;
        text-align: center;
}
.flip .card.flipped {
  -webkit-transform: rotatey(-180deg);
          transform: rotatey(-180deg);
}
.flip .card {
    width: 270px;
    height: 178px;
    -webkit-transform-style: preserve-3d;
    -webkit-transition: 0.5s;
    transform-style: preserve-3d;
    transition: 0.5s;
    background-color: #fff;
   
}
.flip .card .face {
  -webkit-backface-visibility: hidden ;
    backface-visibility: hidden ;
   z-index: 2;
}
.flip .card .front {
   position: absolute;
   width: 270px;
   z-index: 1;
}
.flip .card .img {
   position: relaitve;
   width: 270px;
   height: 178px;
   z-index: 1;
   border: 2px solid #000;
}
.flip .card .back {
  padding-top: 10%;
  -webkit-transform: rotatey(-180deg);
          transform: rotatey(-180deg);
}
  .inner{margin:0px !important;}


.asq
{
	background-color: rgba(0,0,0,0.67);
	
	color: white;
}


.inner .text-center
{
	background-color: rgba(0,0,0,0.67);
}

















</style>
 


 <body>
  	<br /><br />
  	
    <div class="row">
    <div class="col-sm-12 " align="center"><div  class="bor" >About Us</div></div>
    </div>

  	 <br /><br /><br /><br />
     <div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
	
<p id="about">
	The Students' Alumni Cell, IIT Kharagpur is a voluntary student body working under the aegis 
                      of the Dean of Alumni Affairs and International Relations. It strives to bridge the gap between 
                      IIT Kharagpur and its esteemed alumni community.<br>
                            <br>
                       The Students' Alumni Cell continuously endeavours to strengthen the relations of 
                       the alumni of this Institute and their alma mater. 
                       It has been instrumental in organising the Annual Alumni Meet, Regional Student Alumni Meet, 
                       regular guest lectures by distinguished alumni in the campus, publishing the annual 
                       literary magazine (Yearnings of Yore) & the annual yearbook.  
                       The Students' Alumni Cell also operates the Student - Alumni Mentorship Programme, My Imprint
                      (Giving Back - Alumni contribution) and organises Alvida (the annual farewell dinner).<br /><br />
</p>




</div> 
</div>
<br /><br /><br /><br />

 <div class="row">
    <div class="col-sm-12 " align="center"><div  class="bor" >Latest Programs</div></div>
    </div>



  <div class="container-fluid">
  <br /><br /><br /><br />
<div class="row">
<div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner"> 
            <div class="thumbnail">

              <img src="10.1.jpg" width="333" >
              <div class="caption">
          <h2>Class Gift</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
            <h3>Senior Class Gift</h3>
             <div  class="asq"> <em>The Senior Class Gift, an initiative under the My Imprint Programme saw a large number of graduating students signing up for the programme. The programme gives an opportunity to the graduating batch to give something back to the Institute, the moment they are about to leave the Institute.</em></div>
              
            </div>
          </div>
        </div>	 
      </div>
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">  
            <div class="thumbnail"> 
              <img src="10.2.jpg" >
               <div class="caption">
          <h2>Mentorship</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
              <h3>Mentorship</h3>
         <div  class="asq"> <em> Students’ Alumni Cell brings to you Student Alumni Mentorship Programme. A plat form to share the valuable experience of our esteemed alumni community with the current students. For more Information, Kindly check out Mentorship Website.</em></div>
              
            </div>
          </div>
        </div>	 
      </div>
    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">  
            <div class="thumbnail"> 
              <img src="10.3.jpg" width="315">
               <div class="caption">
          <h2>Guest Lecture</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
             <h3>Guest Lecture</h3>
             <div  class="asq"> <em>Continuing with its yearlong series of Guest Lectures by eminent alumni, the Students’ Alumni Cell recently organised "Tips from Top", an open house with prominent alumni in the fields of Entrepreneurship, Civil Services and Research.</em></div>
            </div>
          </div>
        </div>	 
      </div>
    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">   
            <div class="thumbnail">
              <img src="10.4.jpg" width="315">
               <div class="caption">
          <h2>Yearbook</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
              <h3>Yearbook</h3>
            <div  class="asq">  <em>The Yearbook is a collection of photographs and memories presented every year at the time of the convocation to the graduating batch by the Students’ Alumni Cell. It is the perfect souvenir for everyone about to leave their home away from home, KGP.</em></div>
            </div>
          </div>
        </div>	 
      </div>
    </div>
  </div>

</div>
<div class="row">
    <div class="col-sm-12 " align="center"><div  class="bor" >What We Do</div></div>
    </div>


<?php include '3.php';?>
</body>
<script type="text/javascript">
	$('.flip').hover(function(){
        $(this).find('.card').toggleClass('flipped');

    });
</script>





<?php

/*http://www.webs.com/themes
https://uxplanet.org/best-practices-for-website-header-design-e0d55bf5f1e2

<!--
    <div class="col-sm-5"></div>
    <div class="col-sm-5">What We Do</div>
    <div class="col-sm-2"></div>
<br /><br /><br /><br />

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner"> 
            <div class="thumbnail">

              <img src="11.1.jpg" width="333">
              <div class="caption">
          <h2>For Alumni</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
            <h3>Senior Class Gift</h3>
             <div  class="asq"> <em>The Senior Class Gift, an initiative under the My Imprint Programme saw a large number of graduating students signing up for the programme. The programme gives an opportunity to the graduating batch to give something back to the Institute, the moment they are about to leave the Institute.</em>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">  
            <div class="thumbnail"> 
              <img src="11.2.jpg" width="315">
               <div class="caption">
          <h2>For Institute</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
              <h3>Mentorship</h3>
          <div  class="asq">   <em> Students’ Alumni Cell brings to you Student Alumni Mentorship Programme. A plat form to share the valuable experience of our esteemed alumni community with the current students. For more Information, Kindly check out Mentorship Website.</em>
              </div>
            </div>
          </div>
        </div>   
      </div>
    </div>
  <div class="col-sm-3">
      <div class="flip">
        <div class="card"> 
          <div class="face front"> 
            <div class="inner">  
            <div class="thumbnail"> 
              <img src="11.3.jpg" width="315">
               <div class="caption">
          <h2>For Institute</h2>
        </div>
        </div>
            </div>
          </div> 
          <div class="face back"> 
            <div class="inner text-center"> 
             <h3>Guest Lecture</h3>
           <div  class="asq">   <em>Continuing with its yearlong series of Guest Lectures by eminent alumni, the Students’ Alumni Cell recently organised "Tips from Top", an open house with prominent alumni in the fields of Entrepreneurship, Civil Services and Research.</em></div>
            </div>
          </div>
        </div>   
      </div>
    </div>
 
    </div>




-->


    

*/?>