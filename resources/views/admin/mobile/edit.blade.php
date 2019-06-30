<!-- The Modal -->
<div class="modal fade" id="editModal-{{$ongoing->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                {!! Form::model($ongoing, ['method'=>'PATCH' , 'action'=>['Admin\EventController@update', $ongoing->id]]) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('name', 'UTD Penyelenggara') !!}
                    {!! Form::select('utd_id', $utd ,null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tipe', 'Tipe Mobile Unit') !!}
                    {!! Form::select('tipe', ['a' => 'Associate', 's' => 'Solo'], null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('citym', 'Kota Mobile Unit') !!}
                    {!! Form::select('city_id', [''=>'Choose City'] + $city, null, ['class'=>'custom-select', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('loc', 'Lokasi') !!}
                    {!! Form::textarea('lokasi', null, ['class'=>'form-control', 'required','rows' => '3', 'style' => 'resize:none', 'placeholder'=>'Lokasi Mobile Unit' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tgm', 'Tanggal Mulai') !!}
                    {!! Form::date('startmob', null, ['class'=>'form-control', 'placeholder'=>'Tanggal Mulai..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tgs', 'Tanggal Selesai') !!}
                    {!! Form::date('endmob', null, ['class'=>'form-control', 'placeholder'=>'Tanggal Selesai..' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('stat', 'Status') !!}
                    {!! Form::select('status', ['0' => 'Ongoing', '1' => 'Completed'], null, ['class'=>'custom-select', 'required'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Edit Jadwal', ['class'=>'btn btn-primary']) !!}
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