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
            <h3 class="box-title">Search Order</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            {!! Form::open(['id'=>'search']) !!}
              
              <div class="form-group">              
                  {!! Form::label('search', 'Search Order ID') !!}
                  {!! Form::text('order_id', '', ['class' => 'form-control', 'placeholder' => 'Search', 'id' => 'order_id']) !!}
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
