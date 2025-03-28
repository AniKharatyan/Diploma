
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
              <li class="d-lg-none"><a href="login.html">Log In</a></li>
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
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('../assets/images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">{{$job->job_title}}</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>{{$job->job_title}}</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('info'))
    <div class="alert alert-info">
        {{ session()->get('info') }}
    </div>
@endif
@if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
              @if($job->image)
            <img src="{{ asset('jobimage/' . $job->image) }}" alt="Job Image" width="100" height="100">
        @else
            <!-- Display a placeholder image if there's no image for this job -->
            <img src="{{ asset('path/to/placeholder/image.jpg') }}" alt="Placeholder Image" width="100" height="100">
        @endif
              </div>
              <div>
                <h2>{{$job->job_title}}</h2>
                <div>
                  <span id="company_name" class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>{{$job->company_name}}</span>
                  <span class="m-2"><span class="icon-room mr-2"></span>{{$job->job_region}}</span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">{{$job->job_type}}</span></span>
                </div>
              </div>
            </div>
          </div>
          @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
          {{session()->get('message')}}
          </div>
          @endif

        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <figure class="mb-5"><img src="../assets/images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded"></figure>
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
              <p>{{$job->job_description}}</p>
            </div>

              <div class="mb-5">
                  <h3 class="h5 d-flex align-items-center mb-4 text-primary">
                      <span class="icon-rocket mr-3"></span>Responsibilities
                  </h3>
                  <ul class="list-unstyled m-0 p-0">
                      <li class="d-flex align-items-start mb-2">
                          <span class="icon-check_circle mr-2 text-muted"></span>
                          <span id="job-responsibilities">{{$job->responsibilities}}</span>
                      </li>
                  </ul>
              </div>


              <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$job->education_experience}}</span></li>

              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>{{$job->otherbenefits}}</span></li>

              </ul>
            </div>

            <div class="row mb-5">
    @if(Route::has('login'))
        @auth
            <div class="col-6">
                <form action="{{ route('save_job', ['id' => $job->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-block btn-md {{ Auth::user()->hasSavedJob($job->id) ? 'btn-primary' : 'btn-light' }}">
                        @if(Auth::user()->hasSavedJob($job->id))
                            <i class="icon-check"></i> Job Saved
                        @else
                            <i class="icon-heart"></i> Save Job
                        @endif
                    </button>
                </form>
            </div>
            <div class="col-6">
                @if(Auth::user()->hasAppliedForJob($job->id))
                    <button class="btn btn-block btn-md btn-primary" disabled>
                        <span class="icon-check"></span> Applied
                    </button>
                @else
                    <form action="{{ route('apply', ['job' => $job->id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-block btn-md btn-primary">
                            <span class="icon-paper-plane mr-2"></span> Apply Now
                        </button>
                    </form>
                @endif
            </div>
        @else
            <div class="col-6">
                <button class="btn btn-block btn-primary btn-md"><a href="{{ route('login') }}">You need to register first</a></button>
            </div>
        @endauth
    @endif
</div>
          </div>

          <div class="col-lg-4">

            <div class="bg-light p-3 border rounded mb-4">

              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">

                <li id="vacancy" class="mb-2"><strong class="text-black">Vacancy:</strong>{{$job->vacancy}}</li>
                <li id="job_type" class="mb-2"><strong class="text-black">Employment Status:</strong> {{$job->job_type}}</li>
                <li id="experience" class="mb-2"><strong class="text-black">Experience:</strong>{{$job->experience}}  </li>
                <li id="job_region" class="mb-2"><strong class="text-black">Job Location:</strong>{{$job->job_region}} </li>
                <li id="salary" class="mb-2"><strong class="text-black">Salary:</strong> {{$job->salary}} da/day</li>
                <li id="Gender" class="mb-2"><strong class="text-black">Gender:</strong> {{$job->Gender}}</li>
                <li id="application_deadline" class="mb-2"><strong class="text-black">Application Deadline:</strong> {{$job->application_deadline}}</li>

              </ul>

            </div>

            <div class="bg-light p-4 border  mt-5 rounded mb-4">

              <h3 class="text-primary  mt-6 h5 pl-3 mb-3 ">Categories</h3>
              <ul class="list-unstyled pl-3 mb-0">
         @foreach($categories as $category)
                <li class="mb-2"><a href="{{route('category_single',$category->name)}}">{{$category->name}}</a></li>
      @endforeach
              </ul>
            </div>

              <div class="bg-light p-4 border  mt-1 rounded mb-1">
                  <button id="ask-gpt" class="btn btn-primary btn-sm">Generate cover letter with Chat gpt</button>
                  <div id="gpt-response" class="mt-3" style="min-height: 60px;"></div>
              </div>

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
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../assets/js/custom.js"></script>
  </body>
</html>

<script>
    document.getElementById('ask-gpt').addEventListener('click', function () {
        const responseContainer = document.getElementById('gpt-response');
        const responsibilitiesText = document.getElementById('job-responsibilities').innerText;
        const vacancy = document.getElementById('vacancy').innerText;
        const experience = document.getElementById('experience').innerText;
        const company_name = document.getElementById('company_name').innerText;

        responseContainer.innerHTML = 'It may take a few seconds to generate a cover letter...';
        responseContainer.style.maxHeight = '';

        fetch('/generateCoverLetter', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                responsibilities: responsibilitiesText,
                vacancy: vacancy,
                experience: experience,
                company_name: company_name
            })
        })
            .then(response => response.json())
            .then(data => {
                let text = data.data;
                console.log('Ответ от сервера:', text);

                if (!text) {
                    responseContainer.innerHTML = 'Ошибка: пустой ответ от сервера';
                    return;
                }

                responseContainer.innerHTML = '';
                let i = 0;
                let currentWord = '';
                let wordCount = 0;

                function typeChar() {
                    if (i >= text.length) return;

                    const char = text[i];

                    if (char === '\n') {
                        if (text[i + 1] === '\n') {
                            responseContainer.innerHTML += '<br><br>';
                            i += 2;
                            currentWord = '';
                        } else {
                            responseContainer.innerHTML += '<br>';
                            i++;
                            currentWord = '';
                        }
                    } else {
                        responseContainer.innerHTML += char;
                        if (char === ' ' || char === '.' || char === ',') {
                            wordCount++;
                            currentWord = '';
                        } else {
                            currentWord += char;
                        }
                        i++;
                    }

                    responseContainer.scrollTop = responseContainer.scrollHeight;

                    if (wordCount > 100) {
                        responseContainer.style.maxHeight = '400px';
                        responseContainer.style.overflowY = 'auto';
                        responseContainer.style.padding = '10px';
                        responseContainer.style.borderRadius = '8px';
                        responseContainer.style.background = '#f8f9fa';
                    }

                    setTimeout(() => {
                        requestAnimationFrame(typeChar);
                    }, 15);
                }

                requestAnimationFrame(typeChar);
            });
    });
</script>
