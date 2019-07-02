<!-- The Modal -->
<div class="modal fade" id="stage3">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Tahap 3</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($trans, ['method'=>'PATCH' , 'action'=>['Admin\TransactionController@update', $trans->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('q1', 'Tekanan Darah (sistole/diastole)') !!}
                    <div class="form-row">
                        <div class="col-md-6">
                            {!! Form::number('tekananA_user', null, ['class'=>'form-control', 'required', 'min' => '0'])!!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::number('tekananB_user', null, ['class'=>'form-control', 'required', 'min' => '0'])!!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('q3', 'Denyut nadi') !!}
                    {!! Form::number('denyutNadi_user', null, ['class'=>'form-control', 'required', 'min' => '0'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Tahap 3', ['class'=>'btn btn-primary']) !!}
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