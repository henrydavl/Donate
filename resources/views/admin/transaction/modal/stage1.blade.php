<!-- The Modal -->
<div class="modal fade" id="stage1">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Tahap 1</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($trans, ['method'=>'PATCH' , 'action'=>['Admin\TransactionController@update', $trans->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('q1', 'Apakah semalam Anda tidur minimal 4 jam?') !!}
                    {!! Form::number('q1_jamtidur', null, ['class'=>'form-control', 'required', 'min' => '0'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('q2', 'Apakah Anda mengonsumsi obat-obatan dan jamu dalam 3 hari terakhir?') !!}
                    {!! Form::select('q2_obat', ['1' => 'Ya', '0' => 'Tidak'], null, ['class'=>'custom-select', 'required']) !!}
                </div>
                @if($trans->user->gender != 'l')
                <div class="form-group">
                    {!! Form::label('q3', 'Apakah Anda sedang menstruasi, hamil, atau menyusui?') !!}
                    {!! Form::select('q3_mens', ['1' => 'Ya', '0' => 'Tidak'], null, ['class'=>'custom-select', 'required']) !!}
                </div>
                @endif
                <div class="form-group">
                    {!! Form::label('q4', 'Apakah Anda pernah mengalami penyakit serius?') !!}
                    {!! Form::text('q4_sick', null, ['class'=>'form-control', 'required', 'placeholder'=>'NPWP Mitra..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Tahap 1', ['class'=>'btn btn-primary']) !!}
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