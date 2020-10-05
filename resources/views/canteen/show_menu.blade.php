@extends('layouts.master') 
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Menu
          </button>

              <!-- left column -->
              <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="card-body">
          <form action="/menu/create" method="POST">
                  {{csrf_field ()}}
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Menu</label>
                    <input type="hidden" name="menu_id">
                    <input type="text" name="menu_name" class="form-control" id="exampleInputPassword1" placeholder="Input text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Gambar Menu</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose 1 main image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Makanan/Minuman</label>
                    <input type="text" name="menu_name" class="form-control" id="exampleInputPassword1" placeholder="Input harga">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </form>
          </div>
        </div>
      </div>
    </div>


                </form>
            </div>
          </div>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    </section>

@stop
@section('footer')