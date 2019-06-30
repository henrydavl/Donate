<!-- The Modal -->
<div class="modal fade" id="editModal-{{$ongoing->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Transaction {{$ongoing->user->nama}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($ongoing, ['method'=>'PATCH' , 'action'=>['Admin\TransactionController@update', $ongoing->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'Title') !!}
                    {!! Form::text('nama', null, ['class'=>'form-control', 'required', 'placeholder'=>'Title..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('roles', 'Company Name') !!}
                    {!! Form::select('mitra_id', [], null, ['class'=>'custom-select', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Transaction', ['class'=>'btn btn-primary']) !!}
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