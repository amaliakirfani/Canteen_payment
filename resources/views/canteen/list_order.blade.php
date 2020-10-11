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
                    <th scope="col">Nama Menu</th>
                    <th scope="col">No Order</th>
                    <th scope="col">Status</th>
                    <th scope="col">Pembeli</th>
                  </tr>
                </thead>
                <tbody>

                @php $no = 1; @endphp

                  @foreach($data['order_list']['data'] as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$item['menu_name']}}</td>
                    <td>{{$item['order_no']}}</td>
                    <td>{{$item['status']}}</td>
                    <td>{{$item['u_name']}}</td>
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