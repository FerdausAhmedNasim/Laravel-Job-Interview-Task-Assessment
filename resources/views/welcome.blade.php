<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Dashboard</title>

    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ asset('index.html') }}">
                            <img src="{{ asset('images/icon/logo.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            
        </header>
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container">
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h1>Task Assessment</h1>
                        </div>
                    </div>
                </div>
            </header>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Create a Course</strong>
                                    </div>

                                    <div class="card-body card-block">
                                        {{-- ✅ Success Message --}}
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        {{-- ❌ Validation Errors --}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>There were some problems with your input:</strong>
                                                <ul class="mb-0 mt-1">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        <form action="{{ route('main.store') }}" method="POST" class="form-horizontal">
                                            @csrf

                                            <!-- ✅ New Course Input Fields -->
                                            <div class="border p-3 rounded mb-4 bg-light">
                                                <h5 class="mb-3">🎓 Course Information</h5>
                                                <div class="form-group">
                                                    <label>Course Title</label>
                                                    <input type="text" name="course_title" class="form-control"
                                                        required>
                                                    @error('course_title')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Course Price</label>
                                                    <input type="text" name="price" class="form-control" required>
                                                    @error('price')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Feature Video </label>
                                                    <input type="text" name="video" class="form-control">
                                                    @error('video')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <input type="text" name="category" class="form-control">
                                                    @error('category')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Image URL</label>
                                                    <input type="text" name="image" class="form-control">
                                                    @error('image')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Course Summary</label>
                                                    <textarea name="summary" class="form-control" rows="3"></textarea>
                                                    @error('summary')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- 🔽 Previous Module Input Section Start -->
                                            <div class="card border">
                                                <div class="card-header d-flex justify-between items-center">
                                                    <strong>📦 Add Modules</strong>
                                                    <button type="button" class="btn btn-success btn-sm"
                                                        id="addModule">➕ Add Module</button>
                                                </div>

                                                <div class="card-body">
                                                    <div id="moduleContainer">
                                                        <!-- Single Module Section Start -->
                                                        <div class="single-module border p-3 rounded mb-4 ">
                                                            <button type="button"
                                                                class="btn btn-danger btn-sm  top-0 end-0 m-2 removeModule"
                                                                style="display:none;">Close this Module ✖</button>

                                                            <div class="form-group">
                                                                <label>Module Title</label>
                                                                <input type="text" name="moduletitle[]"
                                                                    class="form-control" required>
                                                                @error('moduletitle.0')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <label>
                                                                    <a data-toggle="collapse"
                                                                        href="#moduleContentCollapse" role="button"
                                                                        aria-expanded="false"
                                                                        aria-controls="moduleContentCollapse">
                                                                        Content <i class="fa fa-chevron-down"></i>
                                                                    </a>
                                                                </label>

                                                                <div class="collapse show" id="moduleContentCollapse">
                                                                    <div class="content-video-group-container">
                                                                        <!-- Single Content+Video Group Start -->
                                                                        <div
                                                                            class="content-video-group border p-3 rounded mb-3 ">
                                                                            <button type="button"
                                                                                class="btn btn-danger btn-sm  top-0 end-0 m-2 removeContentVideo"
                                                                                style="display:none;">Close this
                                                                                Content✖</button>

                                                                            <div class="form-group">
                                                                                <label>Content Title</label>
                                                                                <textarea name="content[]"
                                                                                    class="form-control" rows="3"
                                                                                    required></textarea>
                                                                                @error('content.0')
                                                                                    <small
                                                                                        class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Video Source Type</label>
                                                                                <select name="video_type[]"
                                                                                    class="form-control" required>
                                                                                    <option value="">Select type
                                                                                    </option>
                                                                                    <option value="mp4">MP4</option>
                                                                                    <option value="wav">WAV</option>
                                                                                    <option value="avi">AVI</option>
                                                                                    <option value="mov">MOV</option>
                                                                                    <option value="mkv">MKV</option>
                                                                                </select>
                                                                                @error('video_type.0')
                                                                                    <small
                                                                                        class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label>Video URL</label>
                                                                                <input type="text" name="video_url[]"
                                                                                    class="form-control">
                                                                                @error('video_url.0')
                                                                                    <small
                                                                                        class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label>Video Length</label>
                                                                                <input type="text" name="video_length[]"
                                                                                    class="form-control"
                                                                                    placeholder="HH:MM:SS">
                                                                                @error('video_length.0')
                                                                                    <small
                                                                                        class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <!-- Single Content+Video Group End -->
                                                                    </div>

                                                                    <!-- Add Content+Video Button -->
                                                                    <button type="button"
                                                                        class="btn btn-info btn-sm mt-2 addContentVideo">➕
                                                                        Add More Content</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Module Section End -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 🔼 Module Input Section End -->

                                            <button type="submit" class="btn btn-primary mt-4">💾 Save Course &
                                                Modules</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- JavaScript Section -->
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const addBtn = document.getElementById('addModule');
                    const container = document.getElementById('moduleContainer');

                    // Module Add
                    addBtn.addEventListener('click', function () {
                        const firstModule = container.querySelector('.single-module');
                        const newModule = firstModule.cloneNode(true);

                        newModule.querySelectorAll('input, textarea, select').forEach(input => {
                            input.value = '';
                        });

                        // নতুন Content+Video এর সব ক্লোন গুলা ক্লিয়ার করে শুধু একটা রাখবো
                        const contentVideoContainer = newModule.querySelector('.content-video-group-container');
                        const firstContentVideo = contentVideoContainer.querySelector('.content-video-group');
                        contentVideoContainer.innerHTML = '';
                        contentVideoContainer.appendChild(firstContentVideo);

                        // প্রথমটায় ক্লোজ বাটন দেখাবো না, পরবর্তীতে দেখাবো
                        firstContentVideo.querySelector('.removeContentVideo').style.display = 'none';

                        newModule.querySelector('.removeModule').style.display = 'block';
                        container.appendChild(newModule);
                    });

                    // Module Remove
                    document.addEventListener('click', function (e) {
                        if (e.target.classList.contains('removeModule')) {
                            e.target.closest('.single-module').remove();
                        }
                    });

                    // Add Content+Video group
                    document.addEventListener('click', function (e) {
                        if (e.target.classList.contains('addContentVideo')) {
                            const module = e.target.closest('.single-module');
                            const container = module.querySelector('.content-video-group-container');
                            const firstGroup = container.querySelector('.content-video-group');
                            const newGroup = firstGroup.cloneNode(true);

                            newGroup.querySelectorAll('input, textarea, select').forEach(input => {
                                input.value = '';
                            });

                            newGroup.querySelector('.removeContentVideo').style.display = 'block';
                            container.appendChild(newGroup);
                        }
                    });

                    // Remove Content+Video group
                    document.addEventListener('click', function (e) {
                        if (e.target.classList.contains('removeContentVideo')) {
                            const group = e.target.closest('.content-video-group');
                            group.remove();
                        }
                    });
                });
            </script>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>