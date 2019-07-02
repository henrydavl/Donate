<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Mitra List</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($mitras) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Province</th>
                        <th>Address</th>
                        <th>NPWP</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mitras as $mitra)
                        <tr class="text-center">
                            <td>{{$mitra->id}}</td>
                            <td><a href="{{ route('mitra.show',$mitra->id)}}">{{$mitra->nama}}</a></td>
                            <td>{{$mitra->city->nama}}</td>
                            <td>{{$mitra->city->province->nama}}</td>
                            <td>{{$mitra->alamat}}</td>
                            <td>{{$mitra->npwp}}</td>
                            <td>@if($mitra->status == 1)<p class="text-success">Active</p> @else <p class="text-warning">Inactive</p> @endif</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-info btn-circle" title="Edit" data-toggle="modal"
                                                data-target="#editModal-{{$mitra->id}}"><i class="fas fa-edit"></i></button>
                                        @include('root.mitra.edit')
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Root\MitraController@destroy', $mitra->id], 'title' => 'Delete']) !!}
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