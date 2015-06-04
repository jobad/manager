@extends ("dashboardlayout")
@section('body')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Orders</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>            
        <li class="active">Search Order</li>
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
            {!! Form::open(['id'=>'useradd']) !!}

              <div class="form-group">              
                  {!! Form::label('search', 'Search Order') !!}
                  {!! Form::text('search_str', '', ['class' => 'form-control', 'placeholder' => 'Search Order', 'id' => 'search_order']) !!}
              </div>            


              {!! Form::submit('Search',['class'=>'btn btn-default', 'id'=>'submit-search']) !!}

			{!! Form::close() !!}
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