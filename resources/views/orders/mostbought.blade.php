@extends ("dashboardlayout")
@section('body')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Most Bought</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>            
        <li class="active">Most Bought</li>
      </ol>
    </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
          
          </div><!-- /.box-header -->
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>                    
                    <th><strong>Item Name</strong></th>
                    <th><strong>No. Bought</strong></th>                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($most_bought->data->items as $key => $value)

                    <tr>
                      <td>{{  $key }}</td>
                      <td>{{ $value }}</td>
                    </tr>                   
                     
                    @endforeach                      

                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>                      
                    </tr>                      
                  </tbody>
                <tfoot>
                  <tr>
                    <th><strong>Item Name</strong></th>
                    <th><strong>No. Bought</strong></th> 
                  </tr>
                </tfoot>
              </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->              
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
  
</div>


@stop

@section('jsscripts')
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    

@stop

