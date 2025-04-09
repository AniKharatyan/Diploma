<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

        body {
            background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
            color: #e6edf3;
            font-family: 'Inter', sans-serif;
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

        .btn-primary, .btn-success, .btn-danger, .btn-info, .btn-outline-light {
            border: none;
            padding: 8px 14px;
            font-weight: 500;
            border-radius: 10px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-success {
            background: linear-gradient(135deg, #28a745, #218838);
            color: #fff;
        }

        .btn-danger {
            background: linear-gradient(135deg, #dc3545, #bd2130);
            color: #fff;
        }

        .btn-info {
            background: linear-gradient(135deg, #17a2b8, #117a8b);
            color: #fff;
        }

        .btn-outline-light {
            background-color: transparent;
            border: 1px solid #f0f6fc;
            color: #f0f6fc;
        }

        .btn-outline-light:hover {
            background-color: #f0f6fc;
            color: #1e1e1e;
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

        .collapse-row {
            background-color: rgba(255, 255, 255, 0.03);
            padding: 15px;
            border-top: none;
        }
    </style>
</head>

<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1 d-flex align-items-center justify-content-between w-100">
                    <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                    <div class="d-flex">
                        <a href="https://www.bootstrapdash.com/product/corona-free/" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        <a href="#"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0"><i class="mdi mdi-close text-white me-0"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Applications</h4>

                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>User name</th>
                                <th>User email</th>
                                <th>CV</th>
                                <th>Job title</th>
                                <th>Company</th>
                                <th>Cover Letter</th>
                                <th>Status</th>
                                <th>Approved</th>
                                <th>Canceled</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $application)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $application->user->name }}</td>
                                    <td>{{ $application->user->email }}</td>
                                    <td>
                                        <a href="{{ route('view_cv', ['userId' => $application->user_id]) }}" target="_blank" class="btn btn-info">Download CV</a>
                                    </td>
                                    <td>{{ $application->job->job_title }}</td>
                                    <td>{{ $application->job->company_name }}</td>

                                    <td>
                                        @if($application->cover_letter)
                                            <button class="btn btn-outline-light btn-sm" data-bs-toggle="collapse" data-bs-target="#coverLetter{{ $application->id }}">
                                                View
                                            </button>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>

                                    <td><div class="badge badge-outline-warning">{{ $application->status }}</div></td>
                                    <td><a class="btn btn-success" href="{{ url('approved', $application->id) }}">Approved</a></td>
                                    <td><a class="btn btn-danger" href="{{ url('canceled', $application->id) }}">Canceled</a></td>
                                </tr>

                                @if($application->cover_letter)
                                    <tr class="collapse" id="coverLetter{{ $application->id }}">
                                        <td colspan="10" class="collapse-row">
                                            <strong>Cover Letter:</strong><br>
                                            <div style="white-space: pre-line; font-size: 0.95rem; color: #cbd5e1;">
                                                {{ $application->cover_letter }}
                                            </div>
                                        </td>
                                    </tr>
                                @endif

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.script')

<!-- Bootstrap JS (обязательно для collapse) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
