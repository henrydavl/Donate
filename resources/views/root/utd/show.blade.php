@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('root.utd.table.detail')
    </div>
@endsection