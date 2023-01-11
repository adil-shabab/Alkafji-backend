 <!-- place navbar here -->
 <div class="top_navbar">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="left_box d-flex">
                        <div class="d-flex-full p_i">
                            <i class="fa-solid fa-phone"></i>
                            <p>+919876543210</p>
                        </div>
                        <div class="d-flex-full p_i">
                            <i class="fa-solid fa-envelope"></i>
                            <p>alkhajfi@gmail.com</p>
                        </div>
                        <div class="d-flex-full p_i">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>Calicut, Kerala</p>
                        </div>
                    </div>
                    <div class="right_box">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>



        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
              <a class="navbar-brand navbar-logo" href=""><img src="{{ url('assets/img/logo/logo-1.png') }}" alt=""></a>
              <img data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" src="assets/img/menu.png" alt="" class="menu_icon">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" id="home_nav" href="{{url('')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="about_nav" href="{{url('about')}}">About Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Products
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('product/paper')}}">Paper Product</a></li>
                        <li><a class="dropdown-item" href="{{url('product/plastic')}}">Plastic Product</a></li>
                        <li><a class="dropdown-item" href="{{url('product/aluminium')}}">Aluminum Product</a></li>
                        <li><a class="dropdown-item" href="{{url('product/food')}}">Food Product</a></li>
                        <li><a class="dropdown-item" href="{{url('product/foam')}}">Foam Product</a></li>
                        <li><a class="dropdown-item" href="{{url('product/hygiene')}}">Hygiene & Protection Product</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="contact_nav" href="{{url('contact')}}">Contact</a>
                  </li>
                  <a href="{{url('contact')}}"><button class="button mt-0 py-2 ms-3" style="padding: 10px;">Enquire</button></a>

                </ul>
              </div>
            </div>
          </nav>




          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="a{{ url('assets/img/logo/logo.png') }}" alt=""></h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul>
                <li><a class="active" href="{{url('')}}">Home</a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{url('product/paper')}}">Paper Product</a></li>
                    <li><a class="dropdown-item" href="{{url('product/plastic')}}">Plastic Product</a></li>
                    <li><a class="dropdown-item" href="{{url('product/aluminium')}}">Aluminum Product</a></li>
                    <li><a class="dropdown-item" href="{{url('product/food')}}">Food Product</a></li>
                    <li><a class="dropdown-item" href="{{url('product/foam')}}">Foam Product</a></li>
                    <li><a class="dropdown-item" href="{{url('product/hygiene')}}">Hygiene & Protection Product</a></li>
                  </ul>
                </li>
                <li><a href="{{url('contact')}}">Contact</a></li>
              </ul>
              <div class="d-flex icon_offcanvas">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
              </div>
            </div>
          </div>
