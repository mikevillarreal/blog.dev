@extends ('layouts.master')

@section ('title')
Mike Villarreal | Create a Blog
@stop

@section ('content')
<section class="container-fluid" id="section2">
      
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                   <h1>Showing only one Post</h1> 
                   
                   <h3>{{ $post['title'] }}</h3>
                    <p>{{ $post['body'] }}</p>
                    <p>Post Created: {{ $post['created_at'] }}</p>
                    <p>Post Updated: {{ $post['updated_at'] }}</p>
                       
            </div>
        </div>
        </div>

</section>

@stop
