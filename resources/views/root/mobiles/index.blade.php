@extends('layouts.adminMaster')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        @include('root.mobiles.table.ongoing')
        @include('root.mobiles.table.completed')
    </div>
@endsection