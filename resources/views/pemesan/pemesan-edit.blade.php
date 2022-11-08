<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pemesan - Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('style/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/">TRASUR</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/admin">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tabel Data
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/agen">Tabel Agen</a>
                                <a class="nav-link" href="/kendaraan">Tabel Kendaraan</a>
                                <a class="nav-link" href="/pemesan">Tabel Pemesan</a>
                                <a class="nav-link" href="/rute">Tabel Rute</a>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="container-fluid px-4">
                        <div class="form-floating mb-3">
                            <div id="layoutAuthentication_content">
                                <main>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-5">
                                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                    <div class="card-body">
                                                        <form action="{{ url('/pemesan/update/' . $pemesan->id_pemesan) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            {{ method_field('PUT') }}
                                                            <h1 class="mt-4">EDIT DATA</h1>
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" type="text"
                                                                    name="nama_pem" id="nama_pem" 
                                                                    placeholder="Nama"
                                                                    value="{{ $pemesan->nama_pem }}" />
                                                                <label for="nama_pem">Nama</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" type="text"
                                                                    name="email" id="email"
                                                                    placeholder="Email"
                                                                    value="{{ $pemesan->email }}" />
                                                                <label for="email">Email</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" type="text"
                                                                    name="no_telp" id="no_telp"
                                                                    placeholder="No telp"
                                                                    value="{{ $pemesan->no_telp }}" />
                                                                <label for="no_telp">No telp</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" type="date"
                                                                    name="tgl_lahir" id="tgl_lahir"
                                                                    placeholder="Tanggal Lahir"
                                                                    value="{{ $pemesan->tgl_lahir }}" />
                                                                <label for="tgl_lahir">Tanggal Lahir</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" type="text"
                                                                    name="bayar" id="bayar"
                                                                    placeholder="Bayar"
                                                                    value="{{ $pemesan->bayar }}" />
                                                                <label for="bayar">Bayar</label>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                                                            <a href="/pemesan" class="btn btn-primary">Cancel</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="{{ asset('style/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('style/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('style/assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('style/js/datatables-simple-demo.js') }}"></script>
</body>

</html>
