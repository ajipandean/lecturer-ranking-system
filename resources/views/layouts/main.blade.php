<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Sistem Pemilihan Dosen Berprestasi</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Dosen Berprestasi</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">DB</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dosen</li>
                        <li class="{{Request::route()->getName() == 'lecturers.create' ? 'active' : null}}">
                            <a class="nav-link" href="{{route('lecturers.create')}}"><i class="fas fa-plus"></i> <span>Tambah Dosen</span></a>
                        </li>
                        <li class="{{Request::route()->getName() == 'lecturers.index' ? 'active' : null}}">
                            <a class="nav-link" href="{{route('lecturers.index')}}"><i class="fas fa-list"></i> <span>Daftar Dosen</span></a>
                        </li>
                        <li class="{{Request::route()->getName() == 'lecturers.rank' ? 'active' : null}}">
                            <a class="nav-link" href="{{route('lecturers.rank')}}"><i class="fas fa-trophy"></i> <span>Peringkat Dosen</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('main-content')
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    @yield('modal')

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{asset('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <!-- Page Specific JS File -->
</body>

</html>
