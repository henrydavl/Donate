<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">User List</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($users) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="text-center">
                            <td>{{$user->id}}</td>
                            <td><img class="img-profile rounded-circle" src="{{$user->photoprofile ? asset('images/'.$user->photoprofile) : 'http://placehold.it/400x400'}}" height="45"></td>
                            <td><a href="{{route('users.edit', $user->id)}}">{{ucwords($user->name)}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telp}}</td>
                            <td>{{$user->alamat}}</td>
                            <td>{{ucwords($user->role->nama)}}</td>
                            <td>@if($user->isvalid == 1)<p class="text-success">Active</p> @else <p class="text-warning">Inactive</p> @endif</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        @if($user->isvalid == 1)
                                            {!! Form::open(['method'=>'POST', 'action'=> 'Root\UsersController@deactivate']) !!}
                                            {{ csrf_field() }}
                                            {!! Form::hidden('id', $user->id) !!}
                                            {!! Form::button('<i class="fas fa-exclamation-triangle"></i>', ['type'=>'submit', 'class'=>'btn btn-warning btn-circle', 'title'=>'Deactivate User']) !!}
                                            {!! Form::close() !!}
                                        @else
                                            {!! Form::open(['method'=>'POST', 'action'=> 'Root\UsersController@activate']) !!}
                                            {{ csrf_field() }}
                                            {!! Form::hidden('id', $user->id) !!}
                                            {!! Form::button('<i class="fas fa-check"></i>', ['type'=>'submit', 'class'=>'btn btn-success btn-circle', 'title'=>'Activate User']) !!}
                                            {!! Form::close() !!}
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['Root\UsersController@destroy', $user->id], 'id' => 'delete-user']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete User']) !!}
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