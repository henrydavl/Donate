@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('admin.mitra.table.voucher')
    </div>
@endsection