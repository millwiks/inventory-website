@extends('frontend.main_master')  
@section('main') 

     
     <!-- banner -->
     <!-- banner3/home scroll  -->

     @include('frontend.home_all.home_scroll')

     <!-- banner3/home scroll -->
     <!-- end banner -->
     <!-- three_box -->

      <!-- banner2 -->
      @include('frontend.home_all.home_slide')
      <!-- end banner2 -->

     <!-- three_box -->
     <!-- products -->
   
     @include('frontend.products')

     <!-- end products -->
     <!-- laptop  section -->
     <div class="laptop">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <div class="titlepage">
                    <p>Industrial|Home|Shop</p>
                    <h2>Up to 40% off !</h2>
                    <a class="read_more" href="{{ route('contact.me')}}">Shop Now</a>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="laptop_box">
                    <figure><img src="{{ asset('frontend/assets/images/pc.png')}}" alt="#"/></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>
     </div>
     <!-- end laptop  section -->
     <!-- customer -->
     <div class="customer">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Customer Review</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                       <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                       <div class="carousel-item active">
                          <div class="container">
                             <div class="carousel-caption ">
                                <div class="row">
                                   <div class="col-md-9 offset-md-3">
                                      <div class="test_box">
                                         <i><img src="{{ asset('frontend/assets/images/cos.png')}}" alt="#"/></i>
                                         <h4>Sandy Miller</h4>
                                         <p>“The staff was great. The receptionists were very helpful and answered all our questions. The room was clean and bright, and room service was always on time. Will be coming back!”</p>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="carousel-item">
                          <div class="container">
                             <div class="carousel-caption">
                                <div class="row">
                                   <div class="col-md-9 offset-md-3">
                                      <div class="test_box">
                                         <i><img src="{{ asset('frontend/assets/images/cos.png')}}" alt="#"/></i>
                                         <h4>James Mwema</h4>
                                         <p>“I got a pair of  Diodes & Rectifiers from store  and I am very satisfied. They are high-quality and worth the money. The store also offered free shipping at that price so thats a plus!”</p>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="carousel-item">
                          <div class="container">
                             <div class="carousel-caption">
                                <div class="row">
                                   <div class="col-md-9 offset-md-3">
                                      <div class="test_box">
                                         <i><img src="{{ asset('frontend/assets/images/cos.png')}}" alt="#"/></i>
                                         <h4>Mwanaisha Juma</h4>
                                         <p>“This app allows me to do problem from my smartphone where I want and when I want to. The interface is easy to navigate and I find everything I need quickly. I cant wait for feature!”</p>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end customer -->

     <!--  contact -->
     <div class="contact">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Contact Now</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-10 offset-md-1">
                
                 <form method="post" action="{{ route('store.message') }}" class="main_form">
                    @csrf
                    <div class="row">
                       <div class="col-md-12 ">
                          <input name="name" class="contactus" placeholder="Name" type="text" > 
                       </div>
                       <div class="col-md-12">
                          <input name="email" class="contactus" placeholder="Email" type="email" > 
                       </div>
                       <div class="col-md-12">
                          <input name="phone" class="contactus" placeholder="Phone Number +" type="text" >                          
                       </div>
                       
                       <div class="col-md-12 ">
    
                        <input name="subject" class="contactus" placeholder="Subject/Product Required" type="text" > 
                     </div>
                       
                       <div class="col-md-12">
                          <textarea name="message"  class="textarea" placeholder="Message" ></textarea>
                       </div>
                       <div class="col-md-12">
                          <button class="send_btn">Send</button>
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
     <!-- end contact -->
@endsection      