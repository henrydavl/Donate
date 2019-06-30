@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Add New User</h1>
            </div>
            <div class="card body" style="overflow-y: scroll; height: 80vh;">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\UserController@store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Full Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'required', 'placeholder'=>'Full Name..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail Address') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'required', 'placeholder'=>'E-mail Address...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Password ') !!}
                        {!! Form::password('password', ['class'=>'form-control', 'required', 'placeholder'=>'Password...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password2', 'Re-type Password ') !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'required', 'placeholder'=>'Re-type Password...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('roles', 'User Role') !!}
                        {!! Form::select('role_id', [''=>'Choose user role'] + $roles, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lhr', 'Kota Lahir') !!}
                        {!! Form::select('kotalahir', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lhr', 'Kota Domisili') !!}
                        {!! Form::select('kotadomisili', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('almat', 'Alamat') !!}
                        {!! Form::textarea('alamat', null, ['class'=>'form-control', 'required','rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Alamat User..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('job', 'Pekerjaan') !!}
                        {!! Form::text('job', null, ['class'=>'form-control', 'required', 'placeholder'=>'Pekerjaan..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dob', 'Tanggal Lahir') !!}
                        {!! Form::date('birthday', null, ['class'=>'form-control', 'required' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('gold', 'Golongan Darah') !!}
                        {!! Form::select('goldarah', [''=>'Choose blood type', 'A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'], null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('rhe', 'Rhesus Golongan Darah') !!}
                        {!! Form::select('rhesus', [''=>'Rhesus blood', '+' => '+', '-' => '-'], null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection