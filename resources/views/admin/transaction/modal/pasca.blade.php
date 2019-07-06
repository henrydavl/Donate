<!-- The Modal -->
<div class="modal fade" id="pasca">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Keterangan Pasca Donor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($trans, ['method'=>'PATCH' , 'action'=>['Admin\TransactionController@update', $trans->id]]) !!}
                {{ csrf_field() }}
                    <div class="form-group">
                        {!! Form::label('ket', 'Keterangan Pasca Donor') !!}
                        {!! Form::textarea('ket', null, ['class'=>'form-control', 'required','rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Keterangan Pasca Donor..' ])!!}
                    </div>
                <div class="form-group">
                    {!! Form::submit('Tambah Keterangan', ['class'=>'btn btn-primary']) !!}
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