<!-- The Modal -->
<div class="modal fade" id="editModal-{{$mitra->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit {{$mitra->nama}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($mitra, ['method'=>'PATCH' , 'action'=>['Root\MitraController@update', $mitra->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'Nama Mitra') !!}
                    {!! Form::text('nama', null, ['class'=>'form-control', 'required', 'placeholder'=>'Nama Mitra..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('roles', 'Kota Mitra') !!}
                    {!! Form::select('city_id', $city, null, ['class'=>'custom-select', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Alamat') !!}
                    {!! Form::textarea('alamat', null, ['class'=>'form-control', 'required','rows' => '4', 'style' => 'resize:none', 'placeholder'=>'Alamat Mitra..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('np', 'NPWP Mitra') !!}
                    {!! Form::text('npwp', null, ['class'=>'form-control', 'required', 'placeholder'=>'NPWP Mitra..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('np', 'Status') !!}
                    {!! Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class'=>'custom-select', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Mitra', ['class'=>'btn btn-primary']) !!}
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