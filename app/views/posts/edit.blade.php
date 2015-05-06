@extends ('layouts.master')

@section ('title')
Mike Villarreal | Edit this Blog
@stop

@section ('content')
<section class="container-fluid" id="section2">
      
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="well well-sm"> --}}
                    {{-- <form class="form-horizontal" method="post" action='{{{ action('PostsController@update', $post->id) }}}'> --}}
                        {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT', 'class'=>'form-horizontal')) }}
                        <fieldset>
                            <legend class="text-center header">Edit this  Blog</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-bars bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Blog Title</label>{{ $errors->first('title', '<span class="help-block">:message</span>') }}
                                    {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
                                    {{-- <input id="title" name="title" type="text" placeholder="Enter Title" value="{{{ Input::old('title') }}}" class="form-control"> --}}
                                </div>
                            </div>

                   
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Blog Content</label>{{ $errors->first('body', '<span class="help-block">:message</span>') }}
                                    {{ Form::textarea('body', Input::old('body'), array('class' => 'form-control')) }}
                                    {{-- <textarea class="form-control" id="body" name="body" placeholder="Enter Content" rows="7">{{{ Input::old('body') }}}</textarea> --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit_signup"class="btn btn-primary btn-lg">Update</button>
                                    <a href="{{{ action('PostsController@show', $post->id) }}}">Cancel</a>
                                </div>
                            </div>
                        </fieldset>
                         {{ Form::close() }}
                    {{-- </form> --}}
                {{-- </div> --}}
            </div>
        </div>
        </div>

</section>

@stop
