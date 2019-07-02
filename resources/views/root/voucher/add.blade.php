<!-- The Modal -->
<div class="modal fade" id="addmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Voucher</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                <div class="text-center py-2">
                    <img src="http://placehold.it/400x400" height="200" class="img-profile border-bottom-info">
                </div>
                {!! Form::open(['method'=>'POST' , 'action'=>['Root\VoucherController@store'], 'files' => 'true']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'Title') !!}
                    {!! Form::text('nama', null, ['class'=>'form-control', 'required', 'placeholder'=>'Title..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('com', 'Company Name') !!}
                    {!! Form::select('mitra_id', $mitra, null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group d-flex flex-column">
                    {!! Form::label('image', 'Voucher Image') !!}
                    {!! Form::file('image', null, ['class'=>'form-control', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('a', 'Start Promo') !!}
                    {!! Form::date('startPromo', null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('b', 'End Promo') !!}
                    {!! Form::date('endPromo', null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Add Voucher', ['class'=>'btn btn-primary']) !!}
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