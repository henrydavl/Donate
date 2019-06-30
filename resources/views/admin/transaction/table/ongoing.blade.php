<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row no-gutters">
            <div class="col md-10">
                <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">Waiting List</h1>
            </div>
            <div class="col md-2">
                <button type="button" class="btn btn-dark btn-circle float-right" title="Add New Transaction" data-toggle="modal"
                        data-target="#addmodal"><i class="fas fa-plus-circle"></i></button>
                @include('admin.transaction.add')
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($ongoings) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Nama Pasien</th>
                        <th>Nama UTD</th>
                        <th>Waktu Quiz</th>
                        <th>Waktu Scan</th>
                        <th>Waktu Selesai</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ongoings as $ongoing)
                        <tr class="text-center">
                            <td>{{$ongoing->id}}</td>
                            <td>{{$ongoing->user->nama}}</td>
                            <td>{{\Carbon\Carbon::parse($ongoing->timeQuiz)->format('d F Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($ongoing->timeStart)->format('d F Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($ongoing->timeTransEnd)->format('d F Y')}}</td>
                            <td>{{$voucher}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-info btn-circle" title="Edit" data-toggle="modal"
                                                data-target="#editModal-{{$ongoing->id}}"><i class="fas fa-edit"></i></button>
                                        @include('admin.transaction.edit')
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\TransactionController@destroy', $ongoing->id], 'title' => 'Delete']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete']) !!}
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