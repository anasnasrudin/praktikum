<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul-halaman')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/template-2.css">
</head>

<body>
    <main class="d-flex vh-100 w-100">
        <div id="sidebar" class="px-3 mb-3">
            <div id="sidebar-header" class="d-flex align-items-center  text-white gap-2">
                <i class="fa-solid fa-square-envelope fs-2"></i>
                <span class="fs-5">PT. UPG</span>
            </div>
            <div id="sidebar-menu" class="d-flex flex-column gap-2">
                <a href="#"
                    class="d-flex px-3 py-2 align-items-center text-decoration-none text-white rounded-3 active">
                    <i class="fa-solid fa-house"></i>
                    <span class="ms-2">Dashboard</span>
                </a>
                <a href="#"
                    class="d-flex px-3 py-2 align-items-center text-decoration-none text-white rounded-3 ">
                    <i class="fa-solid fa-list"></i>
                    <span class="ms-2">Absensi</span>
                </a>
                <a href="#"
                    class="d-flex px-3 py-2 align-items-center text-decoration-none text-white rounded-3 ">
                    <i class="fa-solid fa-book-bookmark"></i>
                    <span class="ms-2">Gaji</span>
                </a>
                <a href="#"
                    class="d-flex px-3 py-2 align-items-center text-decoration-none text-white rounded-3 ">
                    <i class="fa-solid fa-user"></i>
                    <span class="ms-2">Karyawan</span>
                </a>
                <a href="#"
                    class="d-flex px-3 py-2 align-items-center text-decoration-none text-white rounded-3 ">
                    <i class="fa-solid fa-table"></i>
                    <span class="ms-2">Jabatan</span>
                </a>

            </div>
        </div>
        <div id="main-content">
            <div id="header" class="container-fluid bg-white shadow-sm d-flex align-items-center">
                <div class="icons d-flex align-content-center gap-1 ms-auto">
                    <a href="#" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="#" class="btn"><i class="fa-solid fa-gear"></i></a>
                    <button class="btn border fw-bold">Anas Nasrudin</button>
                </div>
            </div>
            <div id="content" class="container-fluid">
                <div class="d-flex justify-content-between align-items-center my-4">
                    <div>
                        <h2 class="mb-1">@yield('judul')</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('judul')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>  

            <div class="container-fluid my-4">
                @yield('konten-utama')
            </div>
        </div>
    </main>
</body>

</html>
