@extends ("dashboardlayout")
@section('body')

<!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>List Users</h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>            
      <li class="active">Merchant List</li>
    </ol>
  </section>

  <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
               
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>                        
                        <th>E-mail</th>                        
                        <th>Status</th>
                        <!-- <th>Action</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($merchant_users as $user)  

                        <tr>
                          <td><a href="{{ $user->id }}" data-toggle="tooltip" title="View Details">{{ $user->id }}</a></td>
                          <td>{{ $user->username }}</td>
                          <td>{{ $user->first_name }}</td>
                          <td>{{ $user->last_name }}</td>                          
                          <td>{{ $user->email }}</td>                          
                            @if ($user->is_active == 1)
                              <td style="color:green;">Active</td> 
                              <!-- <td style="color:red;"><a href="#" data-toggle="tooltip" title="Click to Activate">Inactive</a></td> -->
                            @else 
                              <td style="color:red;">Inactive</td>
                              <!-- <td style="color:green;"><a href="#" data-toggle="tooltip" title="Click to Deactivate">Active</a></td> -->
                            @endif

                          
                        </tr>
                      @endforeach                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>                        
                        <th>E-mail</th>                        
                        <th>Status</th>
                        <!-- <th>Action</th> -->
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@stop

@section('jsscripts')
<!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    

    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

@stop