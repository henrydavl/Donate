@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.transaction.table.ongoing')
        @include('admin.transaction.table.completed')
    </div>
@endsection