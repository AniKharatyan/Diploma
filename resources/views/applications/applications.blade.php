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


                    <form method="GET" action="{{ route('applications.index') }}"
                          class="mb-5 p-4 d-flex flex-wrap gap-4 align-items-end"
                          style="background: linear-gradient(145deg, rgba(255,255,255,0.03), rgba(255,255,255,0.02));
             border-radius: 20px;
             box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);">

                        {{-- Category --}}
                        <div style="flex: 1; min-width: 240px;">
                            <label for="category" class="form-label text-light mb-2">
                                <i class="bi bi-tags-fill me-2 text-info"></i>Category
                            </label>
                            <div class="position-relative">
                                <i class="bi bi-list-ul position-absolute text-light" style="top: 50%; left: 12px; transform: translateY(-50%); z-index: 2;"></i>
                                <select id="category" name="category" class="form-select tom-select">
                                    <option value="">All Categories</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        {{-- Company --}}
                        <div style="flex: 1; min-width: 240px;">
                            <label for="company" class="form-label text-light mb-2">
                                <i class="bi bi-building-fill me-2 text-success"></i>Company
                            </label>
                            <div class="position-relative">
                                <i class="bi bi-briefcase-fill position-absolute text-light" style="top: 50%; left: 12px; transform: translateY(-50%); z-index: 2;"></i>
                                <select id="company" name="company" class="form-select tom-select">
                                    <option value="">All Companies</option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company }}" {{ request('company') == $company ? 'selected' : '' }}>
                                            {{ $company }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="d-flex gap-3" style="min-width: 160px;">
                            <button type="submit" class="btn btn-outline-light w-100"
                                    style="height: 40px; border-radius: 12px; transition: 0.3s;">
                                <i class="bi bi-funnel-fill me-1"></i> Filter
                            </button>

                            @if(request()->has('category') || request()->has('company'))
                                <a href="{{ route('applications.index') }}" class="btn btn-outline-danger w-100"
                                   style="height: 40px; border-radius: 12px; transition: 0.3s;">
                                    <i class="bi bi-x-circle me-1"></i> Reset
                                </a>
                            @endif
                        </div>
                    </form>




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
                                            <button class="btn btn-outline-light btn-sm mb-2"
                                                    onclick="toggleLetter({{ $application->id }})"
                                                    id="btn-{{ $application->id }}">
                                                View
                                            </button>

                                            <div id="letter-{{ $application->id }}" class="cover-letter-box" style="display: none;">
                                                {{ $application->cover_letter }}
                                            </div>
                                        @else
                                            <span class="text-muted">N/A</span>
                                        @endif
                                    </td>




                                    <td><div class="badge badge-outline-warning">{{ $application->status }}</div></td>
                                    <td><a class="btn btn-success" href="{{ url('approved', $application->id) }}">Approved</a></td>
                                    <td><a class="btn btn-danger" href="{{ url('canceled', $application->id) }}">Canceled</a></td>
                                </tr>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleLetter(id) {
        const content = document.getElementById('letter-' + id);
        const button = document.getElementById('btn-' + id);

        if (content.style.display === 'none' || content.style.display === '') {
            content.style.display = 'block';
            button.innerText = 'Hide';
        } else {
            content.style.display = 'none';
            button.innerText = 'View';
        }
    }
</script>

<link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.default.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

</body>

<style>
    .cover-letter-box {
        height: 200px;
        overflow-y: scroll !important;
        background-color: rgba(255, 255, 255, 0.05);
        padding: 12px;
        border: 1px solid #444;
        border-radius: 10px;
        color: #e6edf3;
        font-size: 0.95rem;
        line-height: 1.5;
        white-space: pre-line;
        word-break: normal;
        overflow-wrap: break-word;
    }

    /* Кастомизация выпадающих списков */
    select.form-select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;

        background-color: rgba(22, 27, 34, 0.75);
        color: #e6edf3;
        padding: 10px 16px 10px 40px;
        font-size: 0.95rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        position: relative;
    }

    select.form-select:focus {
        outline: none;
        border-color: #58a6ff;
        box-shadow: 0 0 0 0.2rem rgba(88, 166, 255, 0.25);
    }

    /* Иконка стрелки */
    select.form-select::after {
        content: '';
        position: absolute;
        top: 50%;
        right: 16px;
        width: 10px;
        height: 10px;
        pointer-events: none;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 140 140' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon fill='%23e6edf3' points='70,100 30,50 110,50'/%3E%3C/svg%3E");
        background-size: contain;
        background-repeat: no-repeat;
        transform: translateY(-50%);
    }

    /* Стили опций */
    select.form-select option {
        background-color: #1e1e2f;
        color: #e6edf3;
    }

</style>
</html>
