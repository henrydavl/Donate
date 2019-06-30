<!-- The Modal -->
<div class="modal fade" id="addmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Transaction</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::open(['method'=>'POST' , 'action'=>['Admin\TransactionController@store']]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('com', 'Nama Pasien') !!}
                    {!! Form::select('mitra_id', [], null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Make Transaction', ['class'=>'btn btn-primary']) !!}
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