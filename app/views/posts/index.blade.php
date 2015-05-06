@extends ('layouts.master')

@section ('title')
Mike Villarreal | Create a Blog
@stop

@section ('content')
<section class="container-fluid" id="section2">
      
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Showing all Posts</h1>   
                <ul>
                    @foreach($posts as $post)
                    <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{ $post['title'] }}</h3>
                        <p>{{ $post['body'] }}</p>
                        <button><a href="{{{ action('PostsController@edit', $post->id) }}}">Edit</button>
                    @endforeach
                </ul>    
            </div>
                        
            {{ $posts->links() }}
        </div>
        </div>

</section>

@stop
