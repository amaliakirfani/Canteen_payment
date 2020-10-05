@extends('layouts.master') 
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6"><!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>1000</h3>
                    <p>Calon Perserta Didik baru</p>
                </div>
                <div class="icon">
                    <i class="far fa-handshake"></i>
                </div>
                </div>
        </div> <!-- ./col -->
        <div class="col-lg-3 col-6"><!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>100</h3>
                    <p>Lulus</p>
                </div>
                <div class="icon">
                     <i class="fas fa-briefcase"></i>
                </div>
                </div>
            </div> <!-- ./col -->
        <div class="col-lg-3 col-6"> <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>30</h3>
                <p>Laki-Laki</p>
              </div>
              <div class="icon">
              <i class="fa fa-male" aria-hidden="true"></i>
              </div>
            </div>
        </div> <!-- ./col -->
        <div class="col-lg-3 col-6"> <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>70</h3>
                <p>Perempuan</p>
              </div>
              <div class="icon">
              <i class="fa fa-female" aria-hidden="true"></i>
              </div>
            </div>
        </div> <!-- ./col -->
    </div> <!--END DIV ROW -->
 </div> <!--END DIV CONTAINER=FLUID -->
 <!-- ============================================================================== -->
<div class="container-fluid"><!--BEIGIN DIV CONTAINER=FLUID -->
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Perserta yang Lulus</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
<!-- /.card-header -->
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table m-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>No Seleksi</th>
                    <th>Jenis Kelamin</th>
                    <th>Asal Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Santi</td>
                    <td>0001</td>
                    <td>Perempuan</td>
                    <td>Puja Bangsa</td>
                </tr>
                <tr>
                    <td>Ayu</td>
                    <td>0002</td>
                    <td>Laki - Laki</td>
                    <td>Puja Bangsa</td>
                </tr>
                <tr>
                    <td>Dwi</td>
                    <td>0003</td>
                    <td>Perempuan</td>
                    <td>Puja Bangsa</td>
                </tr>
            </tbody>
        </table>
    </div>   <!-- /.table-responsive -->
</div>  <!-- /.card-footer -->

            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">Perserta yang Lulus</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
<!-- /.card-header -->
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table m-0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>No Seleksi</th>
                    <th>Jenis Kelamin</th>
                    <th>Asal Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Santi</td>
                    <td>0001</td>
                    <td>Perempuan</td>
                    <td>Puja Bangsa</td>
                </tr>
                <tr>
                    <td>Ayu</td>
                    <td>0002</td>
                    <td>Laki - Laki</td>
                    <td>Puja Bangsa</td>
                </tr>
                <tr>
                    <td>Dwi</td>
                    <td>0003</td>
                    <td>Perempuan</td>
                    <td>Puja Bangsa</td>
                </tr>
            </tbody>
        </table>
    </div>   <!-- /.table-responsive -->
</div>  <!-- /.card-footer -->

            </div>
        </div>
    </div>
</div><!--END DIV CONTAINER=FLUID -->
@stop
@section('footer')