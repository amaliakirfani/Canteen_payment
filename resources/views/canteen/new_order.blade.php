@extends('layouts.master') 
@section('content')

    <!-- Main content -->
    <section class="content">

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                  </tbody>
                </table>

                <br>
                <div class="card" style="width: 18rem;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">TOTAL = </li>
                  </ul>
                </div>
              <!-- /.card-body -->

              <div class="container">
                <div class="row">

                  <div class="col-sm">
                    <div class="row">
                      <div class="card" style="width: 18rem; margin-right:10px;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"> 
                           <input type = "hidden" id="food" value="Menu A">
                          Menu A </h5>
                          <p class="card-text">Rp...</p>
                          <button class="fa fa-plus" aria-hidden="true" onclick="food()"></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm">
                    <div class="row">
                      <div class="card" style="width: 18rem; margin-right:10px;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Menu B</h5>
                          <p class="card-text">Rp...</p>
                          <a href="#" class="fa fa-plus" aria-hidden="true"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm">
                    <div class="row">
                      <div class="card" style="width: 18rem; margin-right:10px;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Menu C</h5>
                          <p class="card-text">Rp...</p>
                          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                          <a href="#" class="fa fa-plus" aria-hidden="true"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
    </section>

@stop
@section('footer')