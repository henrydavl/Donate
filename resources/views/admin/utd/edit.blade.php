<!-- The Modal -->
<div class="modal fade" id="editModal-{{$utd->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit {{$utd->nama}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($utd, ['method'=>'PATCH' , 'action'=>['Admin\UTDController@update', $utd->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'Nama UTD') !!}
                    {!! Form::text('nama', null, ['class'=>'form-control', 'required', 'placeholder'=>'Nama Mitra..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('roles', 'Kota UTD') !!}
                    {!! Form::select('city_id', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('add', 'Alamat') !!}
                    {!! Form::textarea('alamat', null, ['class'=>'form-control', 'required','rows' => '4', 'style' => 'resize:none', 'placeholder'=>'Alamat Mitra..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('akre', 'Akreditasi') !!}
                    {!! Form::select('akred', ['p' => 'paman','m' => 'mobile','u' => 'umum'],null, ['class'=>'custom-select', 'required' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('akre', 'Status') !!}
                    {!! Form::select('status', ['0' => 'Inactive','1' => 'Active'],null, ['class'=>'custom-select', 'required' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit UTD', ['class'=>'btn btn-primary']) !!}
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