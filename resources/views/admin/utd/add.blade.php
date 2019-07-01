@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Add New UTD</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\UTDController@store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nama UTD') !!}
                        {!! Form::text('nama', null, ['class'=>'form-control', 'required', 'placeholder'=>'Nama Mitra..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('roles', 'Kota UTD') !!}
                        {!! Form::select('city_id', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('add', 'Alamat') !!}
                        {!! Form::textarea('alamat', null, ['class'=>'form-control', 'required','rows' => '4', 'style' => 'resize:none', 'placeholder'=>'Alamat Mitra..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('akre', 'Akreditasi') !!}
                        {!! Form::select('akred', ['p' => 'Pratama','m' => 'Madya','u' => 'Utama'],null, ['class'=>'custom-select', 'required' ])!!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('utd.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Create UTD', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection