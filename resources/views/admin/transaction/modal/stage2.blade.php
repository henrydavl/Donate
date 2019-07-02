<!-- The Modal -->
<div class="modal fade" id="stage2">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Tahap 2</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($trans, ['method'=>'PATCH' , 'action'=>['Admin\TransactionController@update', $trans->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('q1', 'Berat badan pendonor') !!}
                    @if($trans->user->gender == 'p')
                        {!! Form::number('beratUser', null, ['class'=>'form-control', 'required', 'min' => '45', 'step' => '0.01'])!!}
                    @else
                        {!! Form::number('beratUser', null, ['class'=>'form-control', 'required', 'min' => '47', 'step' => '0.01'])!!}
                    @endif
                </div>
                <div class="form-group">
                    {!! Form::label('q2', 'Tinggi badan pendonor') !!}
                    {!! Form::number('tinggiUser', null, ['class'=>'form-control', 'required', 'min' => '0', 'step' => '0.01'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('q3', 'Suhu pendonor') !!}
                    {!! Form::number('suhuUser', null, ['class'=>'form-control', 'required', 'min' => '36.6', 'max' => '37.5', 'step' => '0.01'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Tahap 2', ['class'=>'btn btn-primary']) !!}
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