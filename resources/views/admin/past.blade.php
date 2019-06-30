<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Mobile Unit</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($joins) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Detail Jadwal</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($joins as $join)
                        <tr class="text-center">
                            <td>{{$join->id}}</td>
                            <td><a href=""></a>{{$join->jadwal_mobile_id}}</td>
                            <td>@if($join->status == 0)<p class="text-success">Joined</p> @else <p class="text-danger">Rejected</p> @endif</td>
                            <th>{{$join->keterangan}}</th>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">

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