<!DOCTYPE html>
<html>
  <head> 
    @include('seller.css')
    <style type="text/css">
      html, body {
        height: 100%;
        margin: 0;
      }

      body {
        display: flex;
        flex-direction: column;
      }

      .page-content {
        flex: 1 0 auto;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background: #f2f2f2;
      }

      .container-fluid {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      form {
        width: 100%;
        max-width: 600px;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      form div {
        margin-bottom: 15px;
      }

      label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
      }

      input[type="text"],
      input[type="number"],
      textarea,
      select {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
      }

      input[type="file"] {
        padding: 5px;
        border: none;
      }

      textarea {
        height: 100px;
        resize: vertical;
      }

      input[type="submit"],
      button {
        padding: 10px 15px;
        background-color: #007bff;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100%;
      }

      input[type="submit"]:hover,
      button:hover {
        background-color: #0056b3;
      }

      @media (max-width: 768px) {
        form {
          padding: 20px;
          width: 90%;
        }
      }
    </style>
  </head>
  <body>
    @include('seller.header')
    @include('seller.sidebar')

    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h2 class="h5 no-margin-bottom">Add New Event</h2>
        </div>
      </div>

      <div class="container-fluid">
        <form action="{{ url('upload_product_seller') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div>
            <label>Event Title</label>
            <input type="text" name="title" required>
          </div>

          <div>
            <label>Description about Event</label>
            <textarea name="description" required></textarea>
          </div>

         

          

          

          <div>
            <label>Event Image</label>
            <input type="file" name="image" required>
          </div>

          <div>
            <input type="submit" value="Add Event">
          </div>
        </form>
      </div>
    </div>

    <!-- JS files -->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>
