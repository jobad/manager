@extends ("dashboardlayout")
@section('body')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Search Result</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>            
        <li class="active">Search Result</li>
      </ol>
    </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Order ID: {{  $search_result->order_id }}</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th><strong>Description</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Quantity</strong></th>
                    <th><strong>Total</strong></th>                                        
                  </tr>
                </thead>
                <tbody>
                    @foreach ($search_result->data->items as $result)

                    <tr>
                      <td>
                         <strong>{{ $result->item_name }}</strong> <br>
                         {{ $result->sku }} <br>
                         {{ $result->brand }} <br>

                      </td>
                      <td>{{ $result->description }}</td>
                      <td>${{ $result->list_price }}</td>
                      <td>{{ $result->qty }}</td>
                      <td>$2</td>
                    </tr>                   
                     
                    @endforeach                      

                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>$3</td>
                    </tr>                      
                  </tbody>
                <tfoot>
                  <tr>
                    <th>&nbsp;</th>
                    <th><strong>Description</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Quantity</strong></th>
                    <th><strong>Total</strong></th>
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

