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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Tipe User</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="text-center">
                            <td><img class="img-profile rounded-circle" src="{{$user->photoprofile ? asset('images/'.$user->photoprofile) : asset('images/pro.png')}}" height="45"></td>
                            <td>{{ucwords($user->name)}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->telp}}</td>
                            <td>{{$user->alamat}}</td>
                            <td>{{ucwords($user->role->nama)}}</td>
                            <td>@if($user->isvalid == 1)<p class="text-success">Active</p> @else <p class="text-warning">Inactive</p> @endif</td>
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