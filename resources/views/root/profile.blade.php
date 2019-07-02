@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Edit Profile</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {{--<img src="{{$user->photoprofile ? asset('images/'.$user->photoprofile) : 'http://placehold.it/400x400'}}" height="200" class="img-profile rounded-circle py-2">--}}
                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['Root\UsersController@update', $user->id], 'files' => 'true']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Full Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Full Name..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'E-mail Address') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail Address...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tel', 'Phone Number') !!}
                        {!! Form::text('telepon', null, ['class'=> 'form-control', 'placeholder' =>'Phone Number...']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('ala', 'Address') !!}
                        {!! Form::text('alamat', null, ['class'=> 'form-control', 'placeholder' =>'Address...']) !!}
                    </div>
                    {{--<div class="form-group d-flex flex-column">--}}
                    {{--{!! Form::label('photo_id', 'Profile Picture') !!}--}}
                    {{--{!! Form::file('photo', null, ['class'=>'form-control'])!!}--}}
                    {{--</div>--}}
                    <div class="form-group">
                        {!! Form::label('password', 'Password ') !!}
                        {!! Form::password('password', ['class'=>'form-control',  'placeholder'=>'New Password...'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password2', 'Re-type Password ') !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Re-type New Password...'])!!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('root') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Update Profile', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection