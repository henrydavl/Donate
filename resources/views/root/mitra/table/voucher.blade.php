<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Voucher from {{$mitra->nama}}</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($vouchers) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Active Period</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vouchers as $voucher)
                        <tr class="text-center">
                            <td>{{$voucher->id}}</td>
                            <td><img src="{{$voucher->image ? asset('images/'.$voucher->image) : 'http://placehold.it/400x400'}}" height="45"></td>
                            <td>{{$voucher->nama}}</td>
                            <td>{{\Carbon\Carbon::parse($voucher->startPromo)->format('d F Y').' - '.\Carbon\Carbon::parse($voucher->endPromo)->format('d F Y')}}</td>
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