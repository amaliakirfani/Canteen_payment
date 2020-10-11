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
            <form  id="new_order_table">
                {{csrf_field()}}
                <tbody id="food_table">

                </tbody>

        </table>
        <div style="margin-left: 60px;margin-top: 10px;">
            <p style="font-size: 20px;">Total : <i id="total_price"><i id="total"></i></i></div></p>
        </div>
        <div style="margin-left: 60px;margin-top: 10px;">
            <button class="btn-order btn btn-primary">Submit</button>
        </div>

        </form>
        <br>
        <!-- <div class="card" style="width: 18rem;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">TOTAL = </li>
                  </ul>
                </div> -->
        <!-- /.card-body -->

        <div class="container">
            <div class="row">

                @foreach ($data['menu_list']['data'] as $item)
                <div class="col-sm">
                    <div class="row">
                        <div class="card" style="width: 18rem; margin-right:10px;">
                            <img src="{{$item['menu_image']}}" class="card-img-top" alt="Menu">

                                <div class="card-body">
                                    <h5 class="card-title">

                                     {{$item['menu_name']}}
                                      </h5>
                                    <p class="card-text">{{number_format($item['price'])}}</p>
                                    <input type="hidden" readonly id="inc" />
                                    <input type="hidden" readonly id="total_price" />
                                    <button onclick="order('{{$item['menu_id']}}','{{$item['menu_name']}}','{{$item['price']}}')" class="fa fa-plus" aria-hidden="true""></button>
                        </div>


                      </div>
                    </div>
                  </div>
@endforeach
    <!-- </form> -->
                        </div>
                    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="order_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table>
        <tr>
        <td><h5>No Order<h5></td>
        <td></td>
        <td>:</td>
         <td><div id="no_order"></div></td>
        </tr>
           <tr>
        <td><h5>Total<h5></td>
        <td></td>
        <td>:</td>
          <td><div id="total"></div></td>
        </tr>
           <tr>
          <td><div id="status_order"></div></td>
        </tr>
       </table>
      </div>

    </div>
  </div>
</div>
@stop
@section('footer')
