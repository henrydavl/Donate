<!-- The Modal -->
<div class="modal fade" id="stage4">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Tahap 4</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($trans, ['method'=>'PATCH' , 'action'=>['Admin\TransactionController@update', $trans->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('q7', 'Nilai Hb') !!}
                    @if($trans->user->gender == 'p')
                        {!! Form::number('nhbTrans', null, ['class'=>'form-control', 'required', 'min' => '12.5', 'max' => '17', 'step' => '0.01'])!!}
                    @else
                        {!! Form::number('nhbTrans', null, ['class'=>'form-control', 'required', 'min' => '12.5', 'max' => '17', 'step' => '0.01'])!!}
                    @endif
                </div>
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('q6', 'Nilai Hct') !!}--}}
                    {{--{!! Form::number('nhctTrans', null, ['class'=>'form-control', 'required', 'min' => '0'])!!}--}}
                {{--</div>--}}
                <div class="form-group">
                    {!! Form::label('q5', 'Macam Donor') !!}
                    {!! Form::select('macDonTrans',['' => 'Pilih Macam Donor', 's' => 'Sukarela' ,'p'=> 'Pengganti'], null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('q4', 'Metode Pengambilan Darah') !!}
                    {!! Form::select('metDonTrans', ['' => 'Pilih metode', 'b' => 'Biasa' ,'a'=> 'Aferesis', 'au'=> 'Autologus'], null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('q1', 'Hb Metode Cupri Sulfat') !!}
                    <div class="form-row">
                        <div class="col-md-6">
                            {!! Form::label('q2', 'Berat Jenis 1.053') !!}
                            {!! Form::select('hbmcsa', [''=>'Pilih Kategori','1' => '> 12,5 gr % Tenggelam','2' => '= 12,5 gr % Melayang' ,'3' => ' < 12,5 gr % Mengapung'],
                             null, ['class'=>'custom-select', 'required'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('q3', 'Berat Jenis 1.062') !!}
                            {!! Form::select('hbmcsb', [''=>'Pilih Kategori','1' => '> 17 gr % Tenggelam','2' => '= 17gr % Melayang' ,'3' => ' < 17 gr % Mengapung'],
                             null, ['class'=>'custom-select', 'required'])!!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Tahap 4', ['class'=>'btn btn-primary']) !!}
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