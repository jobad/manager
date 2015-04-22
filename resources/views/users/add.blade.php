@extends ("dashboardlayout")
@section('header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Users</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>            
        <li class="active">Add Users</li>
      </ol>
    </section>

     <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Add User</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            {!! Form::open() !!}
            	{!! Form::label('username', 'Username') !!}
            	{!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username', 'size' => '10', 'maxlength' => '10']) !!}

            	{!! Form::label('password', 'Password') !!}
            	{!! Form::password('password', '', ['class' => 'form-control', 'placeholder' => 'Username']) !!}


			{!! Form::close() !!}
          </div><!-- /.box-body -->
        </div><!-- /.box -->              
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
</div>


@stop


<!-- $new_user_details = array(
             'role_id'    => '1'
            ,'user_group_id'    => '1'
            ,'username'         => 'badjo'
            ,'password'         => '123456'
            ,'password_confirmation' => '123456'
            ,'email'            => 'joebenick@gmail.com'
            ,'first_name'       => 'Badjo'
            ,'last_name'        => 'Badiola'
            ,'address'			=> ''
            ,'country_id'		=> ''
            ,'phone'            => '09291614935'
            ,'birthdate'         => '1983-08-01'            
            ,'facebook'         => 'https://www.facebook.com/jobad'
            ,'twitter'          => 'https://twitter.com/jobad'
            ,'profile_image'    => ''
            ,'remember_token'   => ''            
    	);
		var_dump($bc_api->request('POST','/user',$new_user_details)); exit; -->
