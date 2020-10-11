@extends('layouts.master') 
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">RFID</th>
                    <th scope="col">Jumlah Uang</th>
                  </tr>
                </thead>
                <tbody>

                @php $no = 1; @endphp

                  @foreach($data['users_list']['data'] as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$item['u_name']}}</td>
                    <td>{{$item['u_rfid']}}</td>
                    <td>Rp {{number_format($item['u_money'])}}</td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

@stop
@section('footer')