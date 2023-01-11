<!doctype html>
<html lang="en">

<head>
  <title>CONTACT | AL KHAFJI</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- fontawesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css  -->
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
  <header>
  {{View::make('frontend/layout/header')}}
    </header>

  <main>
    <div class="d-flex-full contact__bg">
        <div class="container">
          <h2>Contact Us</h2>
          <span>Home > Contact</span>
        </div>
    </div>

    <div class="contact__form">
      <img src="assets/img/form.png" alt="" class="form_img">
      <img src="assets/img/dots.png" alt="" class="dots">
      <img src="assets/img/arrow.png" alt="" class="arrow">
     <div class="container">
      <p class="text-center head__sm">NEED HELP ?</p>
      <h2 class="text-center head__lg">Get In Touch With Us</h2>
      <div class="row mt-5">
        <div class="order-md-1 order-2 col-md-5">
          <div class="dtls_box">
            <h5>Get In Touch</h5>
            <i class="fa-regular fa-envelope-open"></i>
            <p class="dtls">Phone : +91879654123</p>
            <p class="dtls">Email : info@alkhafji.com</p>
          </div>
          <div class="dtls_box">
            <h5>Our Location</h5>
            <i class="fa-solid fa-location-crosshairs"></i>
            <p class="dtls">Calicut, Kerala, India</p>
          </div>
        </div>
        <div class="order-md-2 order-1 d-flex-full col-md-7">
          <form method="POST" action="{{ url('sent/message') }}" enctype="multipart/form-data" class="form_section">
           @csrf
            <input type="text" name="name" placeholder="Enter Your Name" class="in_put">
            <input type="email" name="email" placeholder="Enter Your Email" class="in_put">
            <input type="tel" name="number" placeholder="Enter Your Number" class="in_put">
            <input type="text" name="content" placeholder="Message" class="in_put text_area">
            <button class="button" type="submit">Send</button>
          </form>
        </div>
      </div>
     </div>
    </div>


    <div class="map_section">
      <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.30607090285!2d54.94660910192174!3d25.07638017819525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1672066065716!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </main>


    <!-- footer -->
    <footer>
    {{View::make('frontend/layout/footer')}}
    </footer>



    <script>
      document.getElementById('contact_nav').classList.add('active')
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if($message = session('success'))
        swal(
        'Success',
        "{{$message}}",
        'success'
        )
        @endif
        @if($error_msg = session('error'))
        swal(
        'Error',
        "{{$error_msg}}",
        'error'
        )
        @endif
    </script>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>
