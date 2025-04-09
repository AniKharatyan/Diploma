

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')
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
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List of Users</h4>

                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th>  name </th>
                            <th> User type </th>
                            <th> email </th>


                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @foreach($users as $user)
                            <td> {{$loop->iteration}}</td>
                            <td> {{$user->name}} </td>

                            <td>
                          @if($user->usertype === 'admin')
                          <div class="badge badge-outline-success">{{$user->usertype}}</div>
                          @elseif($user->usertype === 'client')
                          <div class="badge badge-outline-warning">{{$user->usertype}}</div>
                          @endif
                        </td>

                            <td> {{$user->email}} </td>




                            <td ><a class="btn btn-danger"  href="{{url('delete',$user->id)}}" onclick="return confirm('you really want to delete this user !')"><i class="bi bi-trash3-fill"></i></a> </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    @include('admin.script')
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
          border: 1px solid rgba(255, 255, 255, 0.08);
          box-shadow: 0 8px 32px rgba(0,0,0,0.5);
          margin: 2rem auto;
      }

      .card-title {
          font-size: 1.8rem;
          font-weight: 600;
          margin-bottom: 1.5rem;
          color: #f0f6fc;
      }

      .btn-primary, .btn-success, .btn-danger {
          border: none;
          padding: 8px 14px;
          font-weight: 500;
          border-radius: 10px;
          font-size: 0.95rem;
          transition: all 0.3s ease;
          display: inline-flex;
          align-items: center;
          justify-content: center;
      }

      .btn-primary {
          background: linear-gradient(135deg, #3fb950, #238636);
          color: #fff;
      }
      .btn-primary:hover {
          background: linear-gradient(135deg, #2ea043, #196c2e);
          transform: scale(1.05);
      }

      .btn-success {
          background: linear-gradient(135deg, #28a745, #218838);
          color: #fff;
      }
      .btn-success:hover {
          background: linear-gradient(135deg, #218838, #1e7e34);
          transform: scale(1.05);
      }

      .btn-danger {
          background: linear-gradient(135deg, #dc3545, #bd2130);
          color: #fff;
      }
      .btn-danger:hover {
          background: linear-gradient(135deg, #c82333, #a71d2a);
          transform: scale(1.05);
      }

      .table-dark {
          background-color: rgba(255, 255, 255, 0.03);
          color: #f0f6fc;
          border-radius: 12px;
          overflow: hidden;
          border-collapse: separate;
          width: 100%;
      }

      .table-dark th, .table-dark td {
          border: 1px solid rgba(255, 255, 255, 0.05);
          padding: 10px;
          vertical-align: middle;
      }

      .table-dark thead {
          background-color: rgba(255, 255, 255, 0.05);
          font-weight: 600;
          font-size: 0.95rem;
          color: #e6edf3;
      }

      .table-dark tbody tr:hover {
          background-color: rgba(255, 255, 255, 0.04);
      }

      .flex {
          display: flex;
      }

      .justify-content-between {
          justify-content: space-between;
      }

      .align-items-center {
          align-items: center;
      }

      .mb-3 {
          margin-bottom: 1.5rem;
      }
  </style>
</html>
