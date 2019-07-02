<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row no-gutters">
            <div class="col md-10">
                <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">Voucher List</h1>
            </div>
            <div class="col md-2">
                <button type="button" class="btn btn-dark btn-circle float-right" title="Add New Voucher" data-toggle="modal"
                        data-target="#addmodal"><i class="fas fa-plus-circle"></i></button>
                @include('root.voucher.add')
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($vouchers) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Image</th>
                        <th>Voucher Name</th>
                        <th>Company Name</th>
                        <th>Active Period</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vouchers as $voucher)
                        <tr class="text-center">
                            <td>{{$voucher->id}}</td>
                            <td><img class="img-profile rounded-circle" src="{{$voucher->image ? asset('images/'.$voucher->image) : 'http://placehold.it/400x400'}}" height="45"></td>
                            <td>{{$voucher->nama}}</td>
                            <td>{{$voucher->mitra->nama}}</td>
                            <td>{{\Carbon\Carbon::parse($voucher->startPromo)->format('d F Y').' - '.\Carbon\Carbon::parse($voucher->endPromo)->format('d F Y')}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-info btn-circle" title="Edit" data-toggle="modal"
                                                data-target="#editModal-{{$voucher->id}}"><i class="fas fa-edit"></i></button>
                                        @include('root.voucher.edit')
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Root\VoucherController@destroy', $voucher->id], 'title' => 'Delete Voucher']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete Voucher']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>