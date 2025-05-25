<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{ asset('product/arif.png') }}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Seller</h1>
          <p>Dashboard</p>
        </div>
      </div>

      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
        <li><a href="{{ url('index') }}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{ url('profile') }}"> <i class="icon-home"></i>Profile </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Product </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{ url('add_product') }}">Add Product</a></li>

                 
                </ul>
              </li>
             
          


      </ul>
    </nav>