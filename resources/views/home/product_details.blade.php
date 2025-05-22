<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .car-details-container {
      max-width: 900px;
      margin: 30px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    
    .car-image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      background: #f9f9f9;
    }
    
    .car-image {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
    }
    
    .detail-section {
      padding: 30px;
      border-bottom: 1px solid #f0f0f0;
    }
    
    .detail-section:last-child {
      border-bottom: none;
    }
    
    .section-title {
      font-size: 22px;
      color: #333;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid #f7444e;
      display: inline-block;
    }
    
    .car-title {
      font-size: 28px;
      color: #222;
      margin-bottom: 10px;
      font-weight: 700;
    }
    
    .detail-item {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }
    
    .detail-label {
      font-weight: 600;
      color: #555;
      min-width: 180px;
      font-size: 16px;
    }
    
    .detail-value {
      font-size: 16px;
      color: #333;
    }
    
    .price-value {
      color: #f7444e;
      font-weight: 700;
      font-size: 20px;
    }
    
    .description-text {
      line-height: 1.8;
      color: #555;
      font-size: 16px;
    }
    
    .contact-info {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 20px;
    }
    
    .contact-item {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .contact-icon {
      color: #f7444e;
      font-size: 20px;
    }
    
    @media (max-width: 768px) {
      .car-details-container {
        margin: 15px;
      }
      
      .detail-item {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .detail-label {
        margin-bottom: 5px;
      }
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
  </div>

  <section class="shop_section layout_padding">
    <div class="car-details-container">
      <!-- Car Image -->
      <div class="car-image-container">
        <img src="/product/{{ $data->image }}" alt="{{ $data->title }}" class="car-image">
      </div>
      
      <!-- Headline Section -->
      <div class="detail-section">
        <h1 class="car-title">{{ $data->title }}</h1>
        
       
        
      
      <!-- Description Section -->
      <div class="detail-section">
        <h2 class="section-title">Description</h2>
        <p class="description-text">
          {{ $data->description }}
        </p>
      </div>
      
      <!-- Contact Details Section -->
      <div class="detail-section">
        <h2 class="section-title">Contact Details</h2>
        <div class="contact-info">
          <div class="contact-item">
            <span class="contact-icon">📞</span>
            <span class="detail-value">+880 1752267008</span>
          </div>
          <div class="contact-item">
            <span class="contact-icon">✉️</span>
            <span class="detail-value">arifulislam546950@gmail.com</span>
          </div>
          <div class="contact-item">
            <span class="contact-icon">🏢</span>
            <span class="detail-value">Dhaka, Bangladesh</span>
          </div>
          <div class="contact-item">
            <span class="contact-icon">🕒</span>
            <span class="detail-value">Open 9:00 AM - 8:00 PM</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- info section -->
  @include('home.footer')
  <!-- end info section -->
</body>

</html>