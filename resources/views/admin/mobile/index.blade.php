@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.mobile.table.ongoing')
        @include('admin.mobile.table.completed')
    </div>
@endsection