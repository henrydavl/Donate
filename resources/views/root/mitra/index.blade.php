@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('root.mitra.table.mitra')
    </div>
@endsection