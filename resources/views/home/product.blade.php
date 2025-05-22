









<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center mb-4">
      <h2>All Events</h2>
    </div>

   

    <div class="row">
      @foreach($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="box">
          <div class="img-box">
            <img src="product/{{ $products->image }}" alt="">
          </div>
          <div class="detail-box">
            <h6>{{ $products->title }}</h6>
            
          </div>
          <div class="btn-container">
            <a class="btn btn-primary" href="{{ url('product_details', $products->id) }}">Event Details</a>

          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
