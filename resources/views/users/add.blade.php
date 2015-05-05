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
            {!! Form::open(['id'=>'useradd']) !!}
              <div class="form-group">              
                  {!! Form::label('firstname', 'Firstname') !!}
                  {!! Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Firstname', 'id' => 'first_name']) !!}
              </div>
              
              <div class="form-group">              
                  {!! Form::label('firstname', 'Firstname') !!}
                  {!! Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Firstname', 'id' => 'first_name']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('lastname', 'Lastname') !!}
                  {!! Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Lastname']) !!}
              </div>

              <div class="form-group">
            	   {!! Form::label('username', 'Username') !!}
            	   {!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username', 'size' => '10', 'maxlength' => '10']) !!}
              </div>

              <div class="form-group">
            	   {!! Form::label('password', 'Password') !!}
            	   {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
              </div>

              <div class="form-group">
                 {!! Form::label('password_confirm', 'Confirm Password') !!}
                 {!! Form::password('password_confirm', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('email', 'Email') !!}
                  {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('birthday', 'Birthday') !!}
                  {!! Form::text('birthday', '', ['class' => 'form-control', 'placeholder' => 'Birthday']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('phone', 'Phone Number') !!}
                  {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('Facebook', 'Facebook') !!}
                  {!! Form::text('facebook', '', ['class' => 'form-control', 'placeholder' => 'Facebook']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('twitter', 'Twitter') !!}
                  {!! Form::text('twitter', '', ['class' => 'form-control', 'placeholder' => 'Twitter']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('profile_photo', 'Profile Photo') !!}
                  {!! Form::text('profile_image', '', ['class' => 'form-control', 'placeholder' => 'Profile Photo']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('cover_photo', 'Cover Photo') !!}
                  {!! Form::text('cover_image', '', ['class' => 'form-control', 'placeholder' => 'Cover Photo']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('cover_text', 'Cover Text') !!}
                  {!! Form::text('cover_text', '', ['class' => 'form-control', 'placeholder' => 'Cover Text']) !!}
              </div>


              {!! Form::submit('Register',['class'=>'btn btn-default', 'id'=>'submit-add']) !!}

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
