@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        @include('root.user.table.root')
        @include('root.user.table.admin')
        @include('root.user.table.user')
    </div>
@endsection