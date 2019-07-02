<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">Transaksi Selesai</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($completes) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        {{--<th>Id</th>--}}
                        <th>Nama Pasien</th>
                        <th>Nama UTD</th>
                        <th>Tahapan</th>
                        <th>Waktu Quiz</th>
                        <th>Waktu Scan</th>
                        <th>Waktu Selesai</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($completes as $ongoing)
                        <tr class="text-center">
                            {{--<td>{{$ongoing->id}}</td>--}}
                            <td>{{$ongoing->user->name}}</td>
                            <td>{{$ongoing->utd->nama}}</td>
                            <td>@switch($ongoing->statetrans)
                                    @case('0')
                                    <p class="text-danger">Ditolak - Pengisian Form</p>
                                    @break
                                    @case('2')
                                    <p class="text-danger">Ditolak - Belum 2 Bulan</p>
                                    @break
                                    @case('4')
                                    <p class="text-danger">Ditolak - Berat badan kurang</p>
                                    @break
                                    @case('6')
                                    <p class="text-danger">Ditolak - Tensi Tinggi / Rendah</p>
                                    @break
                                    @case('8')
                                    <p class="text-danger">Ditolak - HB rendah</p>
                                    @break
                                    @case('10')
                                    <p class="text-danger">Proses Donor Dibatalkan</p>
                                    @break
                                    @case('11')
                                    <p class="text-success">Proses Donor Selesai</p>
                                    @break
                                @endswitch
                            </td>
                            <td>{{$ongoing->timeQuiz ? $ongoing->timeQuiz : '-'}}</td>
                            <td>{{$ongoing->timeStart ? $ongoing->timeStart : '-'}}</td>
                            <td>{{$ongoing->timeTransEnd ? $ongoing->timeTransEnd : '-'}}</td>
                            <td width="150px"><div class="row no-gutters">
                                    <div class="col-md-6">
                                        <a href="{{route('transaction.show', $ongoing->id)}}" type="button" class="btn btn-info btn-circle" title="Details"><i class="fas fa-search"></i></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('pdf', $ongoing->id)}}" class="btn btn-outline-primary btn-circle" title="Download Detail"><i class="fas fa-download"></i></a>
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