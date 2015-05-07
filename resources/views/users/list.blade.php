@extends ("dashboardlayout")
@section('header')

<!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>List Users</h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>            
      <li class="active">List Users</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>                      
                <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr>
                 <tr>
                  <td>Other browsers</td>
                  <td>All others</td>
                  <td>-</td>
                  <td>-</td>
                  <td>U</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Actions</th>
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