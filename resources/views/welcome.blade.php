<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0-1/css/all.min.css" integrity="sha512-xEGx3E22YcUzfX525T3KV7SqNexb09E2CckB6lBB/dT930VlbSX9JnQlLiogtSLAl9yGAJGKDu7O1ZanrqljGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
   <div class="container-fluid" style="background-color: #fcfcfc;">
   @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-blue-500 ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <div class="row d-flex justify-content-between ">
            <div class="col-md-6 p-2   text-white" style="background-color:#080001;">
              <i class="fab fa-facebook btn-lg"></i>
              <i class="fab fa-google-plus-square btn-lg"></i>
              <i class="fab fa-twitter-square btn-lg"></i>
              <i class="fab fa-whatsapp-square btn-lg"></i>
            </div>
            <div class="col-md-6 p-2    text-white" style="background-color:#080001;">
              <h5>Free Seminer || Success Story</h5>
            </div>
        </div>
<hr>
          <div class="row " style="height: 85px;font-weight: 600; font-size: medium;">
              <div class="col-3">
                <img src="{{asset('images/ai.jpg')}}" style="height: 80px;" class="rounded float-start rounded-circle " alt="..."><br>
                <h6 style="color: #080001;">N-Tech Solutions</h6>
              </div>
              <div class="col-md-3">
                <h5>WORKING HOURS</h5>
                <h6>Everyday:</h6>
                <i class="far fa-clock"></i><span>9.00am - 9.00pm</span> 
              </div>
              <div class="col-md-3">
                <h5>CALL US</h5>
                <i class="fas fa-phone mr-3"></i><span> + 0177...125478</span>
              </div>
              <div class="col-md-3">
                <h5>MAIL US</h5>
                <i class="fas fa-envelope mr-3"></i> <span>n-techinfo@gmail.com</span>
              </div>
                 </div>
                 <br>
                 
<hr>
<div class="row shadow justify-content-center  rounded  py-3  text-white" style="background-color: #080001;">
    <ul class="nav ">
      <li class="nav-item mx-2">
        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-white" aria-current="page" href="#">Services</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-white" href="#">About Us</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-white" href="#">Portfolio</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link text-white " href="{{URL::to('contact') }}" tabindex="-1">Contact Us</a>
      </li>
    </ul>
  </div>
  <hr>
  <div class="container-fluid">
  <div class="row ">
    <div class="col-md-3">
    <div class=" jumbotron  jumbotron-fluid">
                <h4>Hello world!</h4>
                <p >This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <p>
                  <button class="btn btn-primary btn-lg" href="#" role="button">Learn more</button>
                </p>
    </div>
          </div>
    <div class="col-md-9">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('images/banner2.jpg')}}" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/banner4.jpg')}}" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('images/banner3.jpg')}}" height="400px" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
   
    </div>
       <hr>
       <h5 class="text-center p-1">New Section Start Here</h5>
       <div class="row jumbotron  jumbotron-fluid">
           <div class="col-6">
                <div class="container">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <button class="btn btn-primary btn-lg" href="#" role="button">Learn more</button>
                </p>
              </div>
           </div>
           <div class="col-6">
                <div class="container">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                </div>
       </div>
       <hr>
       </div>
   


<div class="container-fluid">
    <h5 class="text-center">Recent Project</h5>
    <!-- Modal gallery -->
<section class="">
  <!-- Section: Images -->
  <section class="">
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-1.jpg"
            class="w-100"
          />
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-2.jpg"
            class="w-100"
          />
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <div
          class="bg-image hover-overlay ripple shadow-1-strong rounded"
          data-ripple-color="light"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/screens/yt/screen-video-3.jpg"
            class="w-100"
          />
          <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal3">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Images -->

  <!-- Section: Modals -->
  <section class="">
    <!-- Modal 1 -->
    <div
      class="modal fade"
      id="exampleModal1"
      tabindex="-1"
      aria-labelledby="exampleModal1Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/A3PDXmYoF5U"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 -->
    <div
      class="modal fade"
      id="exampleModal2"
      tabindex="-1"
      aria-labelledby="exampleModal2Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/wTcNtgA6gHs"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3 -->
    <div
      class="modal fade"
      id="exampleModal3"
      tabindex="-1"
      aria-labelledby="exampleModal3Label"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/vlDzYIIOYmM"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>

          <div class="text-center py-3">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Modals -->
</section>
<!-- Modal gallery -->

</div>

<hr><br>

 <div class="container-fluid">
        <h5 class="text-center">Working Policy</h5>

<div class="row">
<div class="col-md-4 border border-info">
        <div class="v1 zoomIn bg-white">
            <h4>Services</h4>
            <p>We Are a specialized in Front-end and Back-end website design in low cost.
             Also development of top quality insightful and professional websites for little, 
             medium and company sized business organizations.</p><br>
             <p>We Are a specialized in Front-end and Back-end website design in low cost.
               Also development of top quality insightful and professional websites for little, 
               medium and company sized business organizations.</p>
           </div>
       </div>
       <div class="col-md-4 border border-info">
        <div class="v1 zoomIn bg-white" >
            <h4>Services</h4>
            <p>We Are a specialized in Front-end and Back-end website design in low cost.
             Also development of top quality insightful and professional websites for little, 
             medium and company sized business organizations.</p><br>
             <p>We Are a specialized in Front-end and Back-end website design in low cost.
               Also development of top quality insightful and professional websites for little, 
               medium and company sized business organizations.</p>
           </div>
       </div>
       <div class="col-md-4 border border-info">
        <div class="v1 zoomIn bg-white" >
            <h4>Services</h4>
            <p>We Are a specialized in Front-end and Back-end website design in low cost.
             Also development of top quality insightful and professional websites for little, 
             medium and company sized business organizations.</p><br>
             <p>We Are a specialized in Front-end and Back-end website design in low cost.
               Also development of top quality insightful and professional websites for little, 
               medium and company sized business organizations.</p>
           </div>
       </div>

</div>
       </div>

   <br>
   
       <h5 class="text-center p-1" style="font-weight: 600;">Services</h5>
       <h6 class="text-center p-2" style="font-weight: 400;">Short review of Our services.</h6>
       <div class="row">
            <div class="col-md-3">
                <div class="card" >
                    <img src="{{asset('images/globe.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">We Are a specialized in Front-end and Back-end website design in low cost.
                         Also development of top quality insightful and professional websites for little, 
                         medium and company sized business organizations.
                         <button class="btn btn-primary btn-sm" href="#" role="button">Read more</button>
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img src="{{asset('images/globe.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">We Are a specialized in Front-end and Back-end website design in low cost.
                         Also development of top quality insightful and professional websites for little, 
                         medium and company sized business organizations.
                         <button class="btn btn-primary btn-sm" href="#" role="button">Read more</button>
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" >
                    <img src="{{asset('images/globe.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">We Are a specialized in Front-end and Back-end website design in low cost.
                         Also development of top quality insightful and professional websites for little, 
                         medium and company sized business organizations.
                         <button class="btn btn-primary btn-sm" href="#" role="button">Read more</button>
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{asset('images/globe.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">We Are a specialized in Front-end and Back-end website design in low cost.
                         Also development of top quality insightful and professional websites for little, 
                         medium and company sized business organizations.
                         <button class="btn btn-primary btn-sm" href="#" role="button">Read more</button>
                      </p>
                    </div>
                  </div>
              </div>

          </div>
          <br>
          <hr>
          <div class="container">
       <h2>Our  Partners/ Our Clients</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
      <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>
   </div>
   <hr>
<br>
<div class="container-fluid">
<div class="row py-3" style="background-color:#080001;color: aliceblue;">
           <div class="col-md-3">
            <h5>COMPANY NAME</h5>
            <hr>
            <p>Here you can use rows and columns to organize your footer content.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
           </div>
           <div class="col-md-3">
            <h5>PRODUCTS NAME</h5>
            <hr>
            <p>Domain & Hosting</p>
            <p>Website Design & development</p>
            <p>WordPress</p>
            <p>Digital Marketing</p>
           </div>
           <div class="col-md-3">
            <h5>USEFUL LINKS</h5>  
            <hr>
            <p>
              <a class="dark-grey-text" href="#!">Your Account</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">Become an Affiliate</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">Shipping Rates</a>
            </p>
            <p>
              <a class="dark-grey-text" href="#!">Help</a>
            </p>
    
           </div>
           <div class="col-3">
            <p>CONTACT</p> 
            <hr>  
            <p>
              <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p>
              <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
           </div>
       </div>

           <div class="row py-3" style="background-color:#080001;color: aliceblue;">
               <div class="col-12">
                <p class="text-center">
                    <span class="text-center">© 2021 | All rights reserved by NixTech Solution | Development By NixTech Solution Limited.</span>
                    <a href="#" style="color: aliceblue;width: 100%;"> n-tech-info@gmail.com</a>
                      </p>
                      
               </div>
           </div>
       
       

           </div>
<script src="/js/app.js"></script>
<script>
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
 </body>
</html>
