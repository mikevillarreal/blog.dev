@extends ('layouts.master')

@section ('title')
Mike Villarreal | Create a Blog
@stop

@section ('content')
<section class="container-fluid" id="section2">
      
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="well well-sm"> -->
                    <form class="form-horizontal" method="post" action='{{{ action('PostsController@store') }}}'>
                        {{ Form::token() }}
                        <fieldset>
                            <legend class="text-center header">Create a Blog</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-bars bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Blog Title</label>{{ $errors->first('title', '<span class="help-block">:message</span>') }}
                                    <input id="title" name="title" type="text" placeholder="Enter Title" value="{{{ Input::old('title') }}}" class="form-control">
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-cloud-upload bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fileToUpload" name="fileToUpload" type="file" class="form-control" multiple>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <label>Blog Content</label>{{ $errors->first('body', '<span class="help-block">:message</span>') }}
                                    <textarea class="form-control" id="body" name="body" placeholder="Enter Content" rows="7">{{{ Input::old('body') }}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" name="submit_signup"class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                <!-- </div> -->
            </div>
        </div>
        </div>

</section>

@stop
