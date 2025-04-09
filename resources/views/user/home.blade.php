
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">

    <link rel="stylesheet" href="../assets/css/custom-bs.css">
    <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/fonts/line-icons/style.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/quill.snow.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="{{url('/')}}">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="{{url('/')}}" class="nav-link active">Home</a></li>
              <li><a href="{{route('about')}}">About</a></li>



              <li><a href="{{route('contact')}}">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="">Log In</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">

            @if(Route::has('login'))

              @auth
              <div class="flex">

              <div class="dropdown show">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuOutlineButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Applications </button>
                        <div class="dropdown-menu show" aria-labelledby="dropdownMenuOutlineButton2" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="bottom-start">
                        <a class="dropdown-item" href="{{route('showProfile')}}">Profile</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{route('favourites')}}">Favourite</a>

                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{route('messages')}}">Messages</a>
                          <div class="dropdown-divider"></div>

                          <a class="dropdown-item" href="{{route('upload_cv')}}">Upload cv</a>
                        </div>
                      </div>

  <br>
  <x-app-layout>
</x-app-layout>

  </div>
              @else
              <a href="{{route('register')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Register</a>
              <a href="{{route('login')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            @endauth
            @endif
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('../assets/images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
              <p>Are you ready to turn your dreams into reality? Discover the easiest and most efficient way to secure your dream job with JobBoard.</p>
            </div>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
            <p class="lead text-white">Discover the power of JobBoard's site statistics. Our platform is a hub of endless opportunities, providing a seamless experience for job seekers and employers alike</p>
          </div>
        </div>
        <div class="row pb-0 block__19738 section-counter">
          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="{{$totalusers}}">0</strong>
            </div>
            <span class="caption">Candidates</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="{{$totaljobs}}">0</strong>
            </div>
            <span class="caption">Jobs Posted</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="{{$acceptedApplications}}">0</strong>
            </div>
            <span class="caption">Jobs Filled</span>
          </div>

          <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-2">
              <strong class="number" data-number="{{$totaljobs}}">0</strong>
            </div>
            <span class="caption">Companies</span>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
          <div class="row justify-content-center mb-5">
              <div class="col-lg-10">
                  <form id="job_search_form" action="{{ route('job_search') }}" method="GET" class="search-form">
                      <div class="row g-1 align-items-center">
                          <div class="col-md-5">
                              <input type="text" name="job_name" class="form-control" placeholder="Введите название вакансии">
                          </div>
                          <div class="col-md-4">
                              <select name="job_country" id="job_country" class="form-select">
                                  <option value="">Выберите страну</option>
                              </select>
                          </div>
                          <div class="col-md-3">
                              <button type="submit" class="btn btn-green w-100" id="searchBtn" disabled>
                                  <i class="fas fa-search me-2"></i> Поиск
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>


          <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
          <h2 class="section-title mb-2">{{$totaljobs}} Job Listed</h2>
          </div>
        </div>

          <div class="position-relative">
              <div class="row" id="job-slider">
                  @foreach($jobs as $index => $job)
                      <div class="col-md-6 col-lg-4 mb-4 job-slide" style="{{ $index >= 9 ? 'display: none;' : '' }}" data-page="{{ floor($index / 9) }}">
                          <a href="{{ route('job_single', ['id' => $job->id]) }}" class="text-decoration-none text-dark">
                              <div class="job-listing card p-3 h-100">
                                  <div class="job-listing-logo mb-2 text-center">
                                      @if($job->image)
                                          <img src="{{ asset('jobimage/' . $job->image) }}" alt="Job Image" class="img-fluid logo-img">
                                      @else
                                          <img src="{{ asset('path/to/placeholder/image.jpg') }}" alt="Placeholder Image" class="img-fluid logo-img">
                                      @endif
                                  </div>
                                  <div class="job-listing-about text-center">
                                      <h5>{{ $job->job_title }}</h5>
                                      <p class="mb-1 text-muted">{{ $job->company_name }}</p>
                                      <p class="mb-1"><span class="icon-room"></span> {{ $job->job_region }}</p>
                                      <span class="badge badge-danger">{{ $job->job_type }}</span>
                                  </div>
                              </div>
                          </a>
                      </div>
                  @endforeach
              </div>

              @if(count($jobs) > 9)
                  <button id="prevPage" class="slider-nav slider-left">&#8249;</button>
                  <button id="nextPage" class="slider-nav slider-right">&#8250;</button>
              @endif
          </div>




      </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Looking For A Job?</h2>
            <p class="mb-0 text-white lead">Your dream job is just a few clicks away! JobBoard offers a wide range of opportunities across various industries, allowing you to explore the perfect match for your skills and aspirations</p>
          </div>
          <div class="col-md-3 ml-auto">
            <a href="{{route('login')}}" class="btn btn-warning btn-block btn-lg">Sign Up</a>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section py-4">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title mb-2">Companies We've Helped</h2>
                <p class="lead">Over the years, JobBoard has connected talented individuals with top companies worldwide.</p>
            </div>

            <div class="company-slider d-flex align-items-center overflow-hidden">
                <div class="slider-track d-flex">
                    @foreach($companies as $companyLogo)
                        <div class="slider-item px-4">
                            <img src="{{ asset('jobimage/' . $companyLogo) }}" alt="{{ $companyLogo }}" class="logo-img">
                        </div>
                    @endforeach

                    @foreach($companies as $companyLogo)
                        <div class="slider-item px-4">
                            <img src="{{ asset('jobimage/' . $companyLogo) }}" alt="{{ $companyLogo }}" class="logo-img">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>. Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
    </footer>

  </div>
      <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/stickyfill.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/jquery.easing.1.3.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.animateNumber.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/quill.min.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../assets/js/custom.js"></script>

  <script>
      $(document).ready(function(){
          $.ajax({
              url: "{{ route('get_countries') }}",
              method: "GET",
              dataType: "json",
              success: function(data) {
                  var options = '';
                  $.each(data, function(index, country) {
                      options += '<option value="'+country+'">'+country+'</option>';
                  });
                  $('#job_country').append(options);
                  $('#searchBtn').removeAttr('disabled');
              },
              error: function(){
                  console.error('Ошибка при загрузке списка стран');
              }
          });
      });

      document.addEventListener('DOMContentLoaded', function () {
          const items = document.querySelectorAll('.job-slide');
          const itemsPerPage = 9;
          const totalPages = Math.ceil(items.length / itemsPerPage);
          let currentPage = 0;

          function showPage(page) {
              items.forEach(item => {
                  item.classList.remove('active');
                  item.style.display = 'none';
              });

              setTimeout(() => {
                  items.forEach((item, index) => {
                      if (parseInt(item.dataset.page) === page) {
                          item.style.display = 'block';
                          setTimeout(() => item.classList.add('active'), 10);
                      }
                  });
              }, 100);
          }

          document.getElementById('prevPage')?.addEventListener('click', function () {
              if (currentPage > 0) {
                  currentPage--;
                  showPage(currentPage);
              }
          });

          document.getElementById('nextPage')?.addEventListener('click', function () {
              if (currentPage < totalPages - 1) {
                  currentPage++;
                  showPage(currentPage);
              }
          });

          showPage(currentPage); // initial
      });
  </script>

  <!-- FontAwesome (иконки) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
      .search-form {
          background: linear-gradient(145deg, #ffffff, #f1f1f1);
          padding: 2.5rem;
          border-radius: 1.5rem;
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
          transition: all 0.3s ease-in-out;
      }

      .search-form:hover {
          box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
      }

      .search-form .form-control,
      .search-form .form-select {
          border-radius: 0.75rem;
          height: 50px;
          border: 1px solid #ced4da;
          transition: border-color 0.2s ease, box-shadow 0.2s ease;
      }

      .search-form .form-control:focus,
      .search-form .form-select:focus {
          border-color: rgba(137, 186, 22, 0.9);
          box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.2);
      }

      .search-form .btn-green {
          background: rgba(137, 186, 22, 0.9);
          color: white;
          height: 50px;
          border: none;
          border-radius: 0.75rem;
          font-weight: 600;
          transition: background 0.3s ease;
      }

      .search-form .btn-green:hover {
          background: rgba(137, 186, 22, 0.9);
      }

      .job-listing-logo img {
          width: 100px;
          height: 100px;
          object-fit: cover;
          border-radius: 0.5rem;
          box-shadow: 0 4px 10px rgba(0,0,0,0.05);
      }

      .job-listing {
          margin-bottom: 1.5rem;
      }

      .company-slider {
          white-space: nowrap;
          position: relative;
          height: 100px;
      }

      .slider-track {
          display: flex;
          animation: scroll 30s linear infinite;
      }

      .slider-item {
          width: 140px;
          height: 80px;
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 10px;
          background: #fff;
          border-radius: 12px;
          box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      }

      .logo-img {
          width: 100px;
          height: 100px;
          object-fit: contain;
          margin: 0 auto;
          transition: transform 0.3s ease, filter 0.3s ease;
          filter: grayscale(100%);
      }

      .job-listing.card:hover .logo-img {
          transform: scale(1.1);
          filter: grayscale(0%);
      }

      .job-listing.card {
          border: 1px solid #eaeaea;
          border-radius: 1rem;
          transition: box-shadow 0.3s ease;
          background-color: #fff;
      }

      .job-listing.card:hover {
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
          border-color: rgba(137, 186, 22, 1); /* зелёная граница при наведении */
      }
      .logo-img {
          width: 100px;
          height: 100px;
          object-fit: contain;
          margin: 0 auto;
      }

      .logo-img:hover {
          transform: scale(1.1);
          filter: grayscale(0%);
      }

      @keyframes scroll {
          0% { transform: translateX(0); }
          100% { transform: translateX(-50%); }
      }

      .slider-nav {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          background-color: rgba(137, 186, 22, 1);
          color: white;
          border: none;
          border-radius: 50%;
          width: 45px;
          height: 45px;
          font-size: 24px;
          font-weight: bold;
          z-index: 999;
          box-shadow: 0 3px 10px rgba(0,0,0,0.2);
          cursor: pointer;
          transition: background-color 0.3s ease;
      }

      .job-slide {
          transition: all 0.5s ease;
          opacity: 0;
          transform: translateX(50px);
          display: none;
      }

      .job-slide.active {
          display: block !important;
          opacity: 1;
          transform: translateX(0);
      }

      .slider-nav:hover {
          background-color: rgba(117, 166, 12, 1);
      }

      .slider-left {
          left: -80px;
      }

      .slider-right {
          right: -80px;
      }

  </style>

  </body>
</html>
