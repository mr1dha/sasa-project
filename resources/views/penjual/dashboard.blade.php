@extends('layout.master-penjual')

@section('title', 'SASA | Dashboard Penjual')

@section('style')
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
@endsection

@section('content')
  <div class="container" id="wrapper">
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-6">
            <h1 style= "margin-top: 60px;">Dashboard <small>Penjual</small></h1> 
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-shopping-basket fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">456</p>
                    <p class="announcement-text">Total Sayur!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Tampilkan semua sayur
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">12</p>
                    <p class="announcement-text">Total Pembelian!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Lihat pembelian
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><strong>18</strong></p>
                    <p class="announcement-text">Dalam proses pembelian!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Selesaikan pembelian
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="far fa-money-bill-alt fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading">Rp.56.000</p>
                    <p class="announcement-text">Total keuntungan!</p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Keuntungan bulan ini
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->

       

        <div class="row">
         
          <div class="col-lg-6">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o"></i> Aktivitas</h3>
              </div>
              <div class="panel-body">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <span class="badge">sekarang</span>
                    <i class="fa fa-cart-arrow-down"></i> Memasukkan 1 sayuran baru
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">4 menit lalu</span>
                    <i class="fa fa-trash"></i> Menghapus 2 sayuran
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">23 menit lalu</span>
                    <i class="fa fa-check"></i> Menyelesaikan 3 pembelian
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">46 menit lalu</span>
                    <i class="fa fa-shopping-bag"></i> Menerima 2 pembelian
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">1 jam lalu</span>
                    <i class="fa fa-pencil-alt"></i> Mengedit deskripsi sayur
                  </a>
                </div>
                <div class="text-right">
                  <a href="#">Tampilkan semua aktivitas <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Data proses pembelian</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>Kode</th>
                        <th>Nama Sayur</th>
                        <th>Pembeli</th>
                        <th>Tanggal order</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3326</td>
                        <td>Bayam</td>
                        <td>Ratu</td>
                        <td>10/05/2020</td>
                        <th><span class="badge">on progress</span></th>
                      </tr>
                      <tr>
                        <td>3325</td>
                        <td>Wortel</td>
                        <td>Farras</td>
                        <td>11/04/2020</td>
                        <th><span class="badge">on progress</span></th>
                      </tr>
                      <tr>
                        <td>3324</td>
                        <td>Tomat</td>
                        <td>Azzuhra</td>
                        <td>12/05/2020</td>
                        <th><span class="badge">on progress</span></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                  <a href="#">Tampilkan semua pembelian <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

@endsection

<!-- CATATAN UNTUK YANG BUAT DASHBOARD INI:
Boleh ambil desain dashboard orang lain, tapi disesuaikan juga lah dengan 
blade template dan asset nya,
Semua file di bawah gak kebaca sama sekali -->

<!--     <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script> -->