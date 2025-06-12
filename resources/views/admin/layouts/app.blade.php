<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | Nanosoft</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('theme/assets/images/favicon-32x32.png') }}" type="image/png">

    <!--plugins-->
    <link href="{{ asset('theme/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/plugins/metismenu/mm-vertical.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/plugins/simplebar/css/simplebar.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('theme/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('theme/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/sass/main.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/sass/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/sass/semi-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/sass/bordered-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/sass/responsive.css') }}" rel="stylesheet">

    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <!--start header-->
    <header class="top-header">
        <nav class="navbar navbar-expand align-items-center gap-4">
            <div class="btn-toggle">
                <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
            </div>
            <div class="search-bar flex-grow-1">

            </div>
            <ul class="navbar-nav gap-1 nav-right-links align-items-center">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                        data-bs-auto-close="outside" data-bs-toggle="dropdown" href="javascript:;"><i
                            class="material-icons-outlined">notifications</i>
                        <span class="badge-notify">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
                        <div class="px-3 py-1 d-flex align-items-center justify-content-between border-bottom">
                            <h5 class="notiy-title mb-0">Notifications</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle dropdown-toggle-nocaret option"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-icons-outlined">
                                        more_vert
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-option dropdown-menu-end shadow">
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">inventory_2</i>Archive All</a>
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i class="material-icons-outlined fs-6">done_all</i>Mark
                                            all as read</a>
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">mic_off</i>Disable
                                            Notifications</a></div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i class="material-icons-outlined fs-6">grade</i>What's
                                            new ?</a></div>
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <div><a class="dropdown-item d-flex align-items-center gap-2 py-2"
                                            href="javascript:;"><i
                                                class="material-icons-outlined fs-6">leaderboard</i>Reports</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="notify-list">

                            <div>
                                <a class="dropdown-item py-2" href="javascript:;">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="user-wrapper bg-danger text-danger bg-opacity-10">
                                            <span>PK</span>
                                        </div>
                                        <div class="">
                                            <h5 class="notify-title">New Account Created</h5>
                                            <p class="mb-0 notify-desc">From USA an user has registered.</p>
                                            <p class="mb-0 notify-time">Yesterday</p>
                                        </div>
                                        <div class="notify-close position-absolute end-0 me-3">
                                            <i class="material-icons-outlined fs-6">close</i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                        <img src="{{ asset('theme/assets/images/avatars/01.png') }}" class="rounded-circle p-1 border"
                            width="45" height="45">
                    </a>
                    <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                        <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                            <div class="text-center">
                                <img src="{{ asset('theme/assets/images/avatars/01.png') }}"
                                    class="rounded-circle p-1 shadow mb-3" width="90" height="90"
                                    alt="">
                                <h5 class="user-name mb-0 fw-bold">Hello, {{ auth()->user()->name }}</h5>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                            href="{{ route('profile.edit') }}"><i
                                class="material-icons-outlined">person_outline</i>Profile</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">local_bar</i>Setting</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">dashboard</i>Dashboard</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">account_balance</i>Earning</a>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">cloud_download</i>Downloads</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                                class="material-icons-outlined">power_settings_new</i>Logout</a>
                    </div>
                </li>
            </ul>

        </nav>
    </header>
    <!--end top header-->


    <!--start sidebar-->
    <aside class="sidebar-wrapper">
        <div class="sidebar-header">
            <div class="logo-icon">
                <img src="{{ asset('theme/assets/images/logo-icon.png') }}" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
                <h5 class="mb-0">Nanosoft</h5>
            </div>
            <div class="sidebar-close">
                <span class="material-icons-outlined">close</span>
            </div>
        </div>
        <div class="sidebar-nav" data-simplebar="true">

            <!--navigation-->
            @include('admin.layouts.side-nav')
            <!--end navigation-->
        </div>
        <div class="sidebar-bottom gap-4">
            <div class="dark-mode">
                <a href="javascript:;" class="footer-icon dark-mode-icon">
                    <i class="material-icons-outlined">dark_mode</i>
                </a>
            </div>

        </div>
    </aside>
    <!--end sidebar-->


    <!--start main wrapper-->
    <main class="main-wrapper">

        @yield('content')

    </main>
    <!--end main wrapper-->


    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->

    <!--start switcher-->
    <button class="btn btn-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button"
        data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
        <i class="material-icons-outlined">tune</i>Customize
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header border-bottom h-70 justify-content-between">
            <div class="">
                <h5 class="mb-0">Theme Customizer</h5>
                <p class="mb-0">Customize your theme</p>
            </div>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Theme variation</p>

                <div class="row g-3">
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="LightTheme" checked>
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="LightTheme">
                            <span class="material-icons-outlined">light_mode</span>
                            <span>Light</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="DarkTheme">
                            <span class="material-icons-outlined">dark_mode</span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="SemiDarkTheme">
                            <span class="material-icons-outlined">contrast</span>
                            <span>Semi Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BoderedTheme">
                            <span class="material-icons-outlined">border_style</span>
                            <span>Bordered</span>
                        </label>
                    </div>
                </div><!--end row-->

            </div>
        </div>
    </div>
    <!--start switcher-->

    <!--bootstrap js-->
    <script src="{{ asset('theme/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!--plugins-->
    <script src="{{ asset('theme/assets/js/jquery.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('theme/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('theme/assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets//js/forms.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.rich-editor',
            height: 300,
            menubar: false,
            plugins: 'image link code preview lists',
            toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code preview',
            automatic_uploads: true,
            images_upload_url: '{{ route('admin.tinymce.upload') }}',
            images_upload_credentials: true,
            file_picker_types: 'image',
            branding: false,
            setup: function(editor) {
                editor.on('change', function() {
                    tinymce.triggerSave();
                });
            },
            init_instance_callback: function() {
                console.log('TinyMCE Ready');
            }
        });

        // Intercept all TinyMCE uploads and attach CSRF
        $(document).ajaxSend(function(e, xhr, settings) {
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        });
    </script>


</body>

</html>
