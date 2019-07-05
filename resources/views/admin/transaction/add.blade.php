<!-- The Modal -->
<div class="modal fade" id="addmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Buat Transaksi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::open(['method'=>'POST' , 'action'=>['Admin\TransactionController@store']]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('usr', 'Nama Pasien') !!}
                    {!! Form::select('user_id', ['' => 'Pilih Pendonor'] + $user, null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tipe', 'Lokasi Donor') !!}
                    {!! Form::select('tipe', ['' => 'Pilih Lokasi', 'i' => 'UDD', 'm' => 'Mobile Unit'], null, ['id' => 'tipe', 'class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group" id="utd">
                    {!! Form::label('utd', 'Pilih UDD') !!}
                    {!! Form::select('utd_id', $utd, null, ['id' => 'utdid', 'class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group" id="mob">
                    <h3 class="text-center">Fitur Belum Tersedia</h3>
                    {{--{!! Form::label('tipe', 'UTD') !!}--}}
                    {{--{!! Form::select('join_mobile_id', ['' => 'Pilih UTD'] + $utd, null, ['id' => 'mobid', 'class'=>'custom-select', 'required'])!!}--}}
                </div>
                <div class="form-group">
                    {!! Form::label('q1', 'Apakah semalam Anda tidur minimal 4 jam?') !!}
                    {!! Form::number('q1_jamtidur', null, ['id' => 'tipe', 'class'=>'form-control', 'required' , 'min' => 4, 'placeholder' => 'Total jam tidur'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('q2', 'Apakah Anda mengonsumsi obat-obatan dan jamu dalam 3 hari terakhir?') !!}
                    {!! Form::select('q2_obat', ['' => '----', '0' => 'Tidak', '1' => 'Ya'], null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('q3', 'Apakah Anda sedang menstruasi, hamil, atau menyusui?') !!}
                    {!! Form::select('q3_mens', ['' => '----', '0' => 'Tidak', '1' => 'Ya'], null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('q4', 'Apakah Anda pernah mengalami penyakit serius?') !!}
                    {!! Form::text('q4_sick', null, ['class'=>'form-control', 'required', 'placeholder' => 'Sebutkan Penyakit'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Buat Transaksi', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>