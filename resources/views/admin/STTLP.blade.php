
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
        <title>Call Antrian</title>
        <link href="{{asset('admin/css/jumbotron-narrow.css')}}" rel="stylesheet">
        <script src="{{asset('admin/js/jquery.min.js')}}"></script>


<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/scss/style.css')}}">




    </head>
  	<body>
    <div class="container">
        <button onclick="recallsttlp();" class="btn btn-small btn-primary"  style="float:right;padding-top:10px;padding-bottom:10px;">
            Ulangi Panggilan &nbsp;<span class="glyphicon glyphicon-volume-up"></span>
        </button>

        <div class="jumbotron" >
        <h1 id="sttlp" style="text-align: center;">0</h1>

        <p onclick="nextsttlp();" style="text-align: center;">
            <button class="btn btn-small btn-success" type="button"  >


            Next

        </button>



        </p>

    </div>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">

                    @if($message =  Session::get('success'))
                    <div class='alert alert-success'>

                    {{ $message }}

                    </div>
                    @endif

                        <div class="card-header">
                            <strong class="card-title">Daftar Antrian</strong>
                        </div>


                        <div class="card-body">



                   <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No Antrian</th>
                        <th>Keperluan</th>
                       <th>Created At</th>
                      </tr>
                      <tbody>

                    @foreach ($antrian as $i=>$row)
                        <tr>
                            <td>{{ $row->no_antrian }}</td>
                            <td>{{ $row->keperluan }}</td>
                            <td>{{ $row->created_at }}</td>

                        </tr>
                    @endforeach
                      </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->




        <!--search-->
        <script src="{{asset('admin/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('admin/assets//js/plugins.js')}}"></script>
        <script src="{{asset('admin/assets/js/main.js')}}"></script>

        <!--search-->
        <script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/lib/data-table/datatables-init.js')}}"></script>


        <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
        </script>



@include('admin.layout.ajax')

<script>

    $.ajax({
        type : 'GET',
        url: '{{ url("monitor/layar") }}',
        data: {
            _token: '{{ csrf_token() }}'
        },
        success: (data) => {
            console.log(data)
            $('#sttlp').html(data.sttlp.no_antrian)

        }
    })
    </script>

    </body>


</html>
