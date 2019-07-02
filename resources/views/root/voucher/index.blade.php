@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('root.voucher.table.active')
    </div>
@endsection