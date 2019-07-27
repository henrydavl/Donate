<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row no-gutters">
            <div class="col md-10">
                <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">Blog Posts</h1>
            </div>
            <div class="col md-2">
                <a href="#" class="btn btn-dark btn-circle float-right" title="Add New Blog Post"><i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($posts) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr class="text-center">
                        <td>{{$post->id}}</td>
                        <td><a href="{{ route('blog.show', $post->id)}}">{{$post->title}}</a></td>
                        <td>{{ str_limit($post->description, 10)}}</td>
                        <td>@if($post->status == 1)<p class="text-success">Published</p> @else <p class="text-warning">Draft</p> @endif</td>
                        <td width="150px"><div class="row no-gutters">
                                <div class="col-md-6">
                                    @if($post->status == 1)
                                        {!! Form::open(['method'=>'POST', 'action'=> 'Root\BlogController@deactivate']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::hidden('id', $post->id) !!}
                                        {!! Form::button('<i class="fas fa-exclamation-triangle"></i>', ['type'=>'submit', 'class'=>'btn btn-warning btn-circle', 'title'=>'Back to Draft']) !!}
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['method'=>'POST', 'action'=> 'Root\BlogController@activate']) !!}
                                        {{ csrf_field() }}
                                        {!! Form::hidden('id', $post->id) !!}
                                        {!! Form::button('<i class="fas fa-upload"></i>', ['type'=>'submit', 'class'=>'btn btn-primary btn-circle', 'title'=>'Publish']) !!}
                                        {!! Form::close() !!}
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    {!! Form::open(['method'=>'DELETE', 'action'=> ['Root\BlogController@destroy', $post->id], 'id' => 'delete-post']) !!}
                                    {{ csrf_field() }}
                                    {!! Form::button('<i class="fas fa-trash"></i>', ['type'=>'submit', 'class'=>'btn btn-danger btn-circle', 'title'=>'Delete Post']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>