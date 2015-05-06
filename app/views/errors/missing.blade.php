@extends ('layouts.master')

@section ('title')
Mike Villarreal | 404: Page not found
@stop

@section ('content')
<section class="container-fluid" id="section2">
      
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                   <h1>404: Page not found</h1> 
                   
                <p><a href="{{{ action('PostsController@index') }}}">Go home</a></p>
            </div>
        </div>
        </div>

</section>

@stop
