@extends ("dashboardlayout")
@section('body')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Users</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>            
        <li class="active">User Information</li>
      </ol>
    </section>

     <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">User Information</h3>
          </div><!-- /.box-header -->
            @if (isset($error_message))
                <p class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-warning-sign"></span> {!! $error_message !!}</p>
            @endif

            @if (isset($record_added))
                <p class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok"></span> {!! $record_added !!}</p>
            @endif
          <div class="box-body">
            {!! Form::open(['id'=>'useradd', 'url'=>'perform-update/id/'.$user_data["id"]]) !!}
            
              <div class="form-group">
                {!! Form::label('role', 'Role') !!}
                {!! Form::select ('role_id', $roles, $user_data["role_id"], ['class' => 'form-control', 'style' => 'width:135px;']) !!}
              </div>
             
              <div class="form-group">
                  {!! Form::label('firstname', 'Firstname') !!}
                  {!! Form::text('first_name', $user_data["first_name"], ['class' => 'form-control', 'placeholder' => 'Firstname', 'id' => 'first_name']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('lastname', 'Lastname') !!}
                  {!! Form::text('last_name', $user_data["last_name"], ['class' => 'form-control', 'placeholder' => 'Lastname', 'id' => 'last_name']) !!}
              </div>

              <div class="form-group">
            	   {!! Form::label('username', 'Username') !!}
            	   {!! Form::text('username', $user_data["username"], ['class' => 'form-control', 'placeholder' => 'Username', 'size' => '10', 'maxlength' => '10', 'id' => 'username']) !!}
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
                  {!! Form::text('email', $user_data["email"], ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('birthday', 'Birthday') !!} (mm-dd-yyyy)
                  {!! Form::text('birthdate', $user_data["birthdate"], ['class' => 'form-control', 'placeholder' => 'Birthdate', 'id' => 'birthdate']) !!}
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

             <!--  <div class="form-group">
                  {!! Form::label('profile_photo', 'Profile Photo') !!}
                  {!! Form::text('profile_image', '', ['class' => 'form-control', 'placeholder' => 'Profile Photo']) !!}
              </div> -->

              <div class="form-group">
                  {!! Form::label('cover_photo', 'Cover Photo') !!}
                  {!! Form::text('cover_image', '', ['class' => 'form-control', 'placeholder' => 'Cover Photo']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('cover_text', 'Cover Text') !!}
                  {!! Form::text('cover_text', '', ['class' => 'form-control', 'placeholder' => 'Cover Text']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('status', 'Status') !!}
                  
                  @if ($user_data['is_active'])
                      {!! Form::checkbox('is_active', '1', true) !!}
                  @else 
                      {!! Form::checkbox('is_active', '1') !!}
                  @endif

              </div>


              {!! Form::submit('Save',['class'=>'btn btn-default', 'id'=>'submit-save']) !!}
              <a href="/user-list">{!! Form::label('cancel', 'Cancel', ['class'=>'btn btn-default', 'id'=>'submit-save']) !!}</a>

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
    <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Manager Javascript -->
    <script src="/js/manager.js" type="text/javascript"></script>
    <!-- Jquery validate -->
    <script src="/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    

    <!-- DATA TABES SCRIPT -->
    <script src="/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/dist/js/pages/dashboard.js" type="text/javascript"></script>

   
@stop