

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
  <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View Job: {{$job->job_title}}</h4>
                    <form >
                      <div class="form-group">
                        <label for="">Job title</label>
                        <input type="text" class="form-control" name="job_title" value="{{  $job->job_title }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Job region</label>
                        <input type="text" class="form-control" name="job_region"  value="{{  $job->job_region }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Job type</label>
                        <input type="text" class="form-control" name="job_type"  value="{{  $job->job_type }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Company name</label>
                        <input type="text" class="form-control" name="company_name"  value="{{ $job->company_name }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Experience</label>
                        <input type="text" class="form-control" name="experience" value="{{  $job->experience }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Application deadline</label>
                        <input type="date" class="form-control" name="application_deadline" value="{{  $job->application_deadline }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Vacancy</label>
                        <input type="text" class="form-control" name="vacancy" value="{{  $job->vacancy }}" disabled>
                      </div>

                      <div class="form-group">
                        <label for="">Salary</label>
                        <input type="number" class="form-control" name="salary" value="{{  $job->salary }}" disabled>
                      </div>
                        <div class="form-group">
                            <label for="">Job description</label>
                            <textarea class="form-control big-textarea" name="job_description" rows="6" disabled>{{ $job->job_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Responsibilities</label>
                            <textarea class="form-control big-textarea" name="responsibilities" rows="6" disabled>{{ $job->responsibilities }}</textarea>
                        </div>

                        <div class="form-group">
                        <label for="">Education</label>
                        <input type="text" class="form-control" name="education_experience" value="{{  $job->education_experience }}" disabled>
                      </div>
                      <div class="form-group">
                        <label for="">Other benefits</label>
                        <input type="text" class="form-control" name="otherbenefits" value="{{  $job->otherbenefits }}" disabled>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
    <script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.cookie.js') }}"></script>
<script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/assets/js/misc.js') }}"></script>
<script src="{{ asset('admin/assets/js/settings.js') }}"></script>
<script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
  </body>

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

      body {
          background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
          color: #e6edf3;
          font-family: 'Inter', sans-serif;
          margin: 0;
          padding: 0;
      }

      .card {
          background: rgba(22, 27, 34, 0.7);
          border-radius: 20px;
          padding: 2rem;
          backdrop-filter: blur(16px);
          -webkit-backdrop-filter: blur(16px);
          border: 1px solid rgba(255, 255, 255, 0.08);
          box-shadow: 0 8px 32px rgba(0,0,0,0.5);
          margin: 2rem auto;
      }

      .card-title {
          font-size: 2rem;
          font-weight: 600;
          margin-bottom: 1.5rem;
          text-align: center;
          color: #f0f6fc;
      }

      .form-group {
          position: relative;
          margin-bottom: 1.8rem;
      }

      .form-group label {
          display: block;
          font-size: 0.95rem;
          margin-bottom: 0.5rem;
          color: #c9d1d9;
          transition: color 0.3s ease;
      }

      input[disabled],
      textarea[disabled],
      select[disabled] {
          background-color: rgba(255, 255, 255, 0.05) !important;
          color: #a1a6ad !important;
          border: 1px solid #30363d !important;
          cursor: not-allowed;
          opacity: 1;
      }

      .form-control,
      select {
          width: 100%;
          padding: 14px 16px;
          background: rgba(255, 255, 255, 0.05);
          border: 1px solid #30363d;
          border-radius: 12px;
          color: #ffffff;
          font-size: 1rem;
          transition: all 0.3s ease;
          outline: none;
          backdrop-filter: blur(6px);
      }

      .form-control:focus,
      select:focus {
          border-color: #58a6ff;
          background-color: #f0f6fc;
          box-shadow: 0 0 0 4px rgba(88, 166, 255, 0.2);
      }

      textarea.form-control {
          min-height: 140px;
          resize: vertical;
      }

      .btn-primary {
          display: inline-block;
          background: linear-gradient(135deg, #3fb950, #238636);
          border: none;
          padding: 12px 28px;
          font-weight: 600;
          color: #fff;
          border-radius: 12px;
          font-size: 1rem;
          transition: all 0.3s ease;
          cursor: pointer;
      }

      .btn-primary:hover {
          background: linear-gradient(135deg, #2ea043, #196c2e);
          box-shadow: 0 10px 20px rgba(63, 185, 80, 0.2);
          transform: scale(1.03);
      }

      .alert-danger {
          background-color: rgba(211, 47, 47, 0.1);
          border-left: 4px solid #d32f2f;
          color: #ffbaba;
          padding: 1rem;
          border-radius: 12px;
          margin-bottom: 1.5rem;
      }

      input[type="file"] {
          color: #fff;
          padding: 12px;
          border-radius: 10px;
          background-color: rgba(255,255,255,0.05);
          border: 1px solid #30363d;
      }

      ::placeholder {
          color: #8b949e;
      }
  </style>
</html>
