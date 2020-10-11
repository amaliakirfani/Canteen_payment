<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Aplikasi Pembayaran Kantin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}"> <!-- Font Awesome -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> <!-- Ionicons -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.includes._navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        @include('layouts.includes._sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <!-- Content Header (Page header) -->
                <div class="container-fluid">
                    <div class="row mb-2">

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @yield('content')
            <!-- ==================== Main content ================= -->
            <section class="content">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 </strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Pembayaran Kantin</b> </div>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div><!-- ./wrapper -->

    <!-- ===================================== jQuery =================================================  -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script><!-- jQuery UI 1.11.4 -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script><!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script><!-- ChartJS -->
    <script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script> <!-- Sparkline -->
    <script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script><!-- JQVMap -->

    <script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script><!-- daterangepicker -->
    <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script><!-- overlayScrollbars -->
    <script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script><!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/dist/js/demo.js')}}"></script>

    <!--ckeditor-->



    <!-- DataTables -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <!-- page script -->
    <script>
        var counter = 1
        var total_price = 0

        function order(menu_id, menu_name, price) {
            var tp = document.getElementById('total_price');
            total_price = total_price + parseInt(price)
            tp.value = total_price
            // console.log(tp.value)


            var inc = document.getElementById('inc');
            inc.value = counter++;

            $("i#total").remove();

                  var nf = new Intl.NumberFormat();

            $('#total_price').append("<i id='total'> Rp. " + nf.format(tp.value) + "</i>")
            $('#food_table').append("<tr><td>" + inc.value + "<input class='menu' id='menu' type='hidden' value='" +
                menu_id +
                "'/></td><td>" + menu_name + "</td><td>Rp. "+nf.format(price)+"</td></tr>")
        }


        $('#new_order_table').on('submit', function (event) {
            event.preventDefault();
            // var menu = document . getElementById("menu").value;
            // console.log(menu)
            var result = [];
            var l = $('.menu').length;
            for (i = 0; i < l; i++) {
                result.push($('.menu').eq(i).val());
            }



            $.ajax({
                url: '<?php echo env('CANTEEN_API') ?>' + '/v1/neworder',
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify({
                    menu_id: result
                }),
                beforeSend: function () {
                    $('.btn-order').attr('disabled', true);
                    $('.btn-order').html("Loading..");
                },
                success: function (res) {
                    // console.log(res)
                                var nf = new Intl.NumberFormat();


                    $('.btn-order').attr('disabled', false);
                    $('.btn-order').html("Submit");
                    $("#order_modal").modal('show');


                    $('div#no_order').append("<h5>" + res.data.order_no + "</h5>");
                    $('div#total').append("<h5> Rp. " + nf . format(res . data . total_price) + "</h5>");
                    $('div#status_order').append("<h5 id='status_order' class='btn btn-warning'>" +' pending ' + "</h5>");

                    // check_order = checkorder()


                    setInterval(checkorder, 5000);


                },
                error: function () {
                    alert('Silahkan Pilih Menu Terlebih Dahulu');
                    $('.btn-order').attr('disabled', false);
                    $('.btn-order').html("Submit");
                },


            })
        })


        function checkorder(){
            $.ajax({
                url: '<?php echo env('CANTEEN_API') ?>' + '/v1/order_check',
                method: "GET",
                contentType: "application/json",
                success: function (res) {
                    console.log(res)
                    if (res.code==2200){
                         $("h5#status_order").remove();
                        $('div#status_order').append("<h5 class='btn btn-success'>" +' success order ' + "</h5>");
                        setTimeout(function () {
                             $("#order_modal").modal('hide');
                        }, 5000);

                    }
                },
                error: function () {
                    alert('Cek Internet Koneksi');
                },


            })
        }

    </script>
    @yield('footer')
</body>

</html>
