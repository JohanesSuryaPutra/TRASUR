<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kendaraan - Entry</title>
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
                    <div class="col-lg-5">
                        <div class="form-floating mb-3">
                            <div id="layoutAuthentication_content">
                                <main>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                <div class="card-header">
                                                    <h3>Tambah Kendaraan</h3>
                                                </div>
                                                <div class="card-body">
                                                    <form action="{{ url('/kendaraan/upload') }}" method="post"
                                                        enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <div class="form-floating mb-3">
                                                            <input class="form-control" type="text" name='tipe_kendaraan'
                                                                id="tipe_kendaraan" placeholder="Tipe Kendaraan" />
                                                            <label for="tipe_kendaraan">Tipe Kendaraan</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input class="form-control" type="text" name='daya_angkut'
                                                                id="daya_angkut" placeholder="Kapasitas" />
                                                            <label for="daya_angkut">Kapasitas</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input class="form-control" type="text" name='harga'
                                                                id="harga" placeholder="Harga" />
                                                            <label for="harga">Harga</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <select class="form-control"name="nama_rute" id="">
                                                                <option>-- Pilih Rute --</option>
                                                                @foreach ($Rute as $r)
                                                                    <option value="{{ $r->id_rute }}">{{ $r->nama_rute }}</option>
                                                                @endforeach
                                                            </select>
                                                            <label for="nama_rute">Rute</label>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                            <button type="submit" class="btn btn-primary" name="simpan">
                                                                Simpan
                                                            </button>
                                                            <a href="/kendaraan" class="btn btn-primary">Cancel</a>
                                                        </div>
                                                    </form>
                                                </div>
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
