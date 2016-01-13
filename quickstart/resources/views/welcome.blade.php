@extends('layouts.app')

@section('content')
<section id="section-fs-header" class="vertical-center" style="background-image:url(assets/img/site/bgr-03.jpg)">
       <!--Captions-->
       <div class="fs-header-captions">
         <!--Pre-Title-->
         <h1 class="pre-title pb-30">Our Motto Is To</h1>
          <div class="flexslider">
            <ul class="text-slides pb-30">
             
              <!--Text Slide 1-->
              <li><h2 class="section-title-x-large">Create Beautiful Code</h2></li>
              <!--Text Slide 2-->
              <li><h2 class="section-title-x-large">Make a design that stands out</h2></li>
              <!--Text Slide 3-->
              <li><h2 class="section-title-x-large">Create Top Notch Design</h2></li>
              
            </ul>
            <!--Post-Title-->
            <h3 class="post-title">Just for you..</h3>
          </div><!--/.flexslider-->
       </div>
          
            <!--Scroll Down Icon-->
            <div class="scroll-down-box">
               <a href="#about" class="page-scroll"><i class="xc icon-down-angle icon-float animated scroll-down-icon"></i></a>
            </div>
   </section>
   

<!--Welcome Box-->
 <section class="welcome-box pt-40 pb-70 pb-md-75 pb-sm-75" id="welcome">
  <div class="container">
   <div class="row">
    
    <div class="col-md-3 col-sm-6">
      <h4>North Col Theme</h4>
        <p>North Col is a clean theme with mainblocks in light colors. Vivamus ac magna augue. Integer blandit in urna.</p>
        <p class="mt-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae. vel.Curabitur porttitor diam nec metus.</p>
        <a class="btn btn-lg btn-outline-grey mt-20" href="#" role="button">Read More <i class="xc icon-right-angle"></i></a>
    </div><!--/.col-->
    
    <div class="col-md-3 col-sm-6">
    
      <h4>Bootstrap 3.3</h4>
       <ul class="welcome-box-list pb-20 pb-sm-0">
          <li>Light colors and very fast loading</li>
          <li>Curabitur porttitor diam nec metu</li>
          <li>Lorem ipsum dolor sit amet posue</li>
          <li>Curabitur porttitor diam nec metu</li>
          <li>Light colors and very fast loading</li>
       </ul>
    </div><!--/.col-->
    
    <div class="col-md-3 col-sm-6">
      <h4>Responsive Layout</h4>
        <p>Integer sit amet mi non purus consequat tincidunt. Aenean scelerisque quis justo pretium sollicitudin.</p>
        <p class="mt-25">Integer sit amet mi non purus consequat tincidunt. Aenean scelerisque quis justo pretium sollicitudin. Nullam non metus.</p>
        <a class="btn btn-lg btn-outline-grey mt-20" href="#" role="button">Read More <i class="xc icon-right-angle"></i></a>
    </div><!--/.col-->
    
    <div class="col-md-3 col-sm-6">
      <h4>Lines of Code</h4>
       <div class="counter-5 counter"></div>
	</div><!--/.col-->
  
   </div>
  </div>
 </section> 


<!-- Shadow Element -->
<section id="box-shadow-bottom"></section>
@endsection
