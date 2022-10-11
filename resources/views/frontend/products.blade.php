
  <div  class="products">

        <div class="container">
         @php
         $web = App\Models\web::latest()->get();
         @endphp
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Our Products</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                 <div class="our_products">
                    <div class="row">
                        @foreach ($web as $item)
                       <div class="col-md-4 margin_bottom1">
                          <div class="product_box">
                             <figure><img src="{{ asset($item->product_image) }}" alt="#"/></figure>
                             <h3>{{$item->product_category}}</h3>
                             <h2>{{$item->product_name}}</h2>
                          </div>
                       </div>
                       @endforeach
 
                       <div class="col-md-12">
                          <a class="read_more" href="#">See More</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    