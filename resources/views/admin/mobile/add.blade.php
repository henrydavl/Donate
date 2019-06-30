@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Add New Mobile Unit Schedule</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    {!! Form::open(['method'=>'POST', 'action'=>'Admin\EventController@store']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'UTD Penyelenggara') !!}
                        {!! Form::select('utd_id', $utd ,null, ['class'=>'custom-select', 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'Tipe Mobile Unit') !!}
                        {!! Form::select('tipe', ['a' => 'Associate', 's' => 'Solo'], null, ['class'=>'custom-select', 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('roles', 'Kota Mobile Unit') !!}
                        {!! Form::select('city_id', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', 'Lokasi') !!}
                        {!! Form::textarea('lokasi', null, ['class'=>'form-control', 'required','rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Lokasi Mobile Unit' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('np', 'Tanggal Mulai') !!}
                        {!! Form::date('startmob', null, ['class'=>'form-control', 'required', 'placeholder'=>'Tanggal Mulai..' ])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('np', 'Tanggal Selesai') !!}
                        {!! Form::date('endmob', null, ['class'=>'form-control', 'required', 'placeholder'=>'Tanggal Selesai..' ])!!}
                    </div>
                    <div class="form-group">
                        <a href="{{ route('mobileunit.index') }}" class="btn btn-danger">Cancel</a>
                        {!! Form::submit('Buat Jadwal', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection