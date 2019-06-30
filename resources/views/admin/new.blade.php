<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">New Jadwal Mobile Unit</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($events) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>UTD Name</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $ongoing)
                        <tr class="text-center">
                            <td>{{$ongoing->id}}</td>
                            <td>{{$ongoing->utd->nama}}</td>
                            <td>{{$ongoing->city->nama}}</td>
                            <td>{{$ongoing->lokasi}}</td>
                            <td>{{\Carbon\Carbon::parse($ongoing->startmob)->format('d F Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($ongoing->endmob)->format('d F Y')}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'POST', 'action'=> 'Admin\EventController@join']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::hidden('id', $ongoing->id) !!}
                                        {!! Form::button('<i class="fas fa-check"></i>', ['type'=>'submit', 'class'=>'btn btn-success btn-circle', 'title'=>'Join']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'POST', 'action'=> 'Admin\EventController@reject']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::hidden('id', $ongoing->id) !!}
                                        {!! Form::button('<i class="fas fa-ban"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Reject']) !!}
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