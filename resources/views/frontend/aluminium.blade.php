<!doctype html>
<html lang="en">

<head>
    <link href="" rel="canonical">
    <meta property="og:locale" content="en-US">
    <meta property="og:title" content="Best plastic packs and  foodstuff trading l.l.c alkhafji | uae | ajman | Ras Al Khaimah">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <meta property="og:description" content="We are the best plastic packs and  foodstuff trading l.l.c">
    <meta property="og:site_name" content="Alkhafji">
  <title>PRODUCT | AL KHAFJI</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- fontawesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- fancy box -->
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css"/>
  <!-- custom css  -->
  <link rel="stylesheet" href="{{url('assets/css/contact.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

</head>

<body>
    <header>
    {{View::make('frontend/layout/header')}}
    </header>

  <main>
    <div class="d-flex-full ba__nn__er product__banner_bg">
        <div class="container">
          <h2 class="text-dark">Aluminium Products</h2>
          <span class="text-dark">Home > Products</span>
        </div>
    </div>


    <div class="products__container">
        <div class="container">
            <div class="row">
                @foreach ($product as $data)
                <div class="col-lg-3 col-md-6 col-12 mb-5">
                    <div class="box">
                        <a href="{{asset('/uploads/Aluminium/'.$data->image)}}" data-fancybox="group">
                            <span class="thumb"> <img src="{{asset('/uploads/Aluminium/'.$data->image)}}" /></span>
                        </a>
                        <h5>{{$data->title}}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <section class="quote_section">
        <img src="assets/img/map.png" class="map_bg" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="quote_content">
                        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit ?</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing. amet consectetur adipisicing. adipisicing.</p>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <div class="quote_btn">
                        <a class="common_btn" href="#">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



  </main>



    <!-- footer -->
    <footer>
    {{View::make('frontend/layout/footer')}}
    </footer>


      <script>
        document.getElementById('product_nav').classList.add('active')
      </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- fancybox -->
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>
