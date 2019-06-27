@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        @include('admin.user.table.admin')
        @include('admin.user.table.user')
    </div>
@endsection