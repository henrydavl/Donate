@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Edit User</h1>
            </div>
            <div class="card body" style="overflow-y: scroll; height: 80vh;">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['Root\UsersController@update', $user->id]]) !!}
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
                        {!! Form::password('password', ['class'=>'form-control', 'required' ,'placeholder'=>'Password...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password2', 'Re-type Password ') !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'required','placeholder'=>'Re-type Password...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('roles', 'User Role') !!}
                        {!! Form::select('role_id', [''=>'Choose user role'] + $roles, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    @if($user->role_id == 2)
                    <div class="form-group">
                        {!! Form::label('roles', 'Admin UTD') !!}
                        {!! Form::select('utd_id', [''=>'Choose UTD'] + $utd, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    @endif
                    <div class="form-group">
                        {!! Form::label('gender', 'Gender') !!}
                        {!! Form::select('gender', ['' => 'Choose gender', 'l' => 'Laki - laki', 'p' => 'Perempuan'], null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tlp', 'Phone number') !!}
                        {!! Form::text('telp', null, ['class'=>'form-control', 'required', 'placeholder'=>'Phone number..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lhr', 'City of birth') !!}
                        {!! Form::select('kotalahir', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lhr', 'City Domicile') !!}
                        {!! Form::select('kotadomisili', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('almat', 'Address') !!}
                        {!! Form::textarea('alamat', null, ['class'=>'form-control', 'required','rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Address..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('job', 'Vacancy') !!}
                        {!! Form::text('job', null, ['class'=>'form-control', 'required', 'placeholder'=>'Vacancy..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('dob', 'Date of birth') !!}
                        {!! Form::date('birthday', null, ['class'=>'form-control', 'required' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('gold', 'Blood type') !!}
                        {!! Form::select('goldarah', [''=>'Choose blood type', 'A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'], null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('rhe', 'Rhesus Blood') !!}
                        {!! Form::select('rhesus', [''=>'Rhesus blood', '+' => '+', '-' => '-'], null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection