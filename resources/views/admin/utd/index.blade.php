@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.utd.table.utd')
    </div>
@endsection