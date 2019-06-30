<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Ongoing Mobile Unit</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($ongoings) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>UTD Name</th>
                        <th>Type</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ongoings as $ongoing)
                        <tr class="text-center">
                            <td>{{$ongoing->id}}</td>
                            <td>{{$ongoing->utd->nama}}</td>
                            <td>@if($ongoing->tipe == 'a')<p class="text-success">Associate</p> @else <p class="text-success">Solo</p> @endif</td>
                            <td>{{$ongoing->city->nama}}</td>
                            <td>{{$ongoing->lokasi}}</td>
                            <td>{{\Carbon\Carbon::parse($ongoing->startmob)->format('d F Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($ongoing->endmob)->format('d F Y')}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-info btn-circle" title="Edit" data-toggle="modal"
                                                data-target="#editModal-{{$ongoing->id}}"><i class="fas fa-edit"></i></button>
                                        @include('admin.mobile.edit')
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Admin\EventController@destroy', $ongoing->id], 'title' => 'Delete']) !!}
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