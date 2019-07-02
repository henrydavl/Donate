<!-- The Modal -->
<div class="modal fade" id="cancel">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Pembatalan Transaksi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($trans, ['method'=>'PATCH' , 'action'=>['Admin\TransactionController@update', $trans->id]]) !!}
                {{ csrf_field() }}
                @if($trans->statetrans < 9)
                    <div class="form-group">
                        {!! Form::label('q1', 'Keterangan Batal') !!}
                        {!! Form::textarea('ketBatal', null, ['class'=>'form-control', 'required','rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Keterangan Batal..' ])!!}
                    </div>
                @else
                    <div class="form-group">
                        {!! Form::label('q1', 'Ditolak / Diambil Sebanyak') !!}
                        {!! Form::number('ccDarah', null, ['class'=>'form-control', 'required', 'min' => '0'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('q2', 'Janis Kantong') !!}
                        {!! Form::select('kantongDarah', ['' => 'Pilih Kantong', 's'=>'S', 'd'=>'D', 't'=>'T', 'q'=>'Q'],null, ['class'=>'custom-select', 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('q3', 'Pengambilan') !!}
                        {!! Form::select('pengambilanTrans', ['' => '----', 'l'=>'Lancar', 't'=>'Tidak Lancar', 's'=>'Stop']
                        ,null, ['id'=>'ambilc', 'class'=>'custom-select', 'required'])!!}
                    </div>
                    <div class="form-group" id="stopc">
                        {!! Form::label('q4', 'Stop di (cc)') !!}
                        {!! Form::number('ccstopTrans', null, ['id'=>'stopccc','class'=>'form-control', 'min' => '0'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('q5', 'Reaksi Donor') !!}
                        {!! Form::select('reaksiDonTrans', ['' => '----', 'h'=>'Hematoma', 'p'=>'Pusing', 'm'=>'Muntah - Muntah', 'l' => 'Lainnya...'],
                        null, ['id'=>'reakdonc', 'class'=>'custom-select', 'required'])!!}
                    </div>
                    <div class="form-group" id="reakc">
                        {!! Form::label('q4', 'Reaksi Lainnya') !!}
                        {!! Form::text('ketReaksiDonor', null, ['id'=>'reaklanc' ,'class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('q10', 'N0. Kantong Darah') !!}
                        {!! Form::number('noKantong', null, ['class'=>'form-control', 'required', 'min' => '1'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('q6', 'Keterangan Batal') !!}
                        {!! Form::textarea('ketBatal', null,
                        ['class'=>'form-control', 'required','rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Keterangan Batal..' ])!!}
                    </div>
                @endif
                <div class="form-group">
                    {!! Form::submit('Batalkan Transaksi', ['class'=>'btn btn-primary']) !!}
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