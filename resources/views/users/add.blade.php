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

              {!! Form::label('firstname', 'Firstname') !!}
              {!! Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'Firstname']) !!}

              {!! Form::label('lastname', 'Lastname') !!}
              {!! Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Lastname']) !!}

            	{!! Form::label('username', 'Username') !!}
            	{!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username', 'size' => '10', 'maxlength' => '10']) !!}

            	{!! Form::label('password', 'Password') !!}
            	{!! Form::password('password', '', ['class' => 'form-control', 'placeholder' => 'Password']) !!}

              {!! Form::label('password_confirm', 'Confirm Password') !!}
              {!! Form::password('password_confirm', '', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}

              {!! Form::label('email', 'Email') !!}
              {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) !!}

              {!! Form::label('birthday', 'Birthday') !!}
              {!! Form::text('birthday', '', ['class' => 'form-control', 'placeholder' => 'Birthday']) !!}

              {!! Form::label('phone', 'Phone Number') !!}
              {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}

              {!! Form::label('Facebook', 'Facebook') !!}
              {!! Form::text('facebook', '', ['class' => 'form-control', 'placeholder' => 'Facebook']) !!}

              {!! Form::label('twitter', 'Twitter') !!}
              {!! Form::text('twitter', '', ['class' => 'form-control', 'placeholder' => 'Twitter']) !!}

              {!! Form::label('profile_photo', 'Profile Photo') !!}
              {!! Form::text('profile_image', '', ['class' => 'form-control', 'placeholder' => 'Profile Photo']) !!}

              {!! Form::label('cover_photo', 'Cover Photo') !!}
              {!! Form::text('cover_image', '', ['class' => 'form-control', 'placeholder' => 'Cover Photo']) !!}

              {!! Form::label('cover_text', 'Cover Text') !!}
              {!! Form::text('cover_text', '', ['class' => 'form-control', 'placeholder' => 'Cover Text']) !!}

              {!! Form::label('sub', 'Firstname') !!}
              {!! Form::text('text', '', ['class' => 'form-control', 'placeholder' => 'Firstname']) !!}

              {!! Form::submit('Register',['class'=>'btn btn-default']) !!}

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
