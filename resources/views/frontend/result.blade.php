
@extends('../layouts.app')


@section('content')

    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-md-12 ml-3">
                    <h3>Search result</h3>
                </div>

            </div>
            <hr style="border: 1px solid black;">
            {{--            --}}
            <div class="row">

                @foreach( $posts as $post )

                        <div class="col-md-3 p-4 ml-5 mr-5 mt-4 rounded post-display">
                            <h3>{{$post->title}}</h3>
                            <p>By: {{$post->user->name}}</p>

                            <a href="/otherpost/{{$post->id}}" class="btn btn-warning"> Continue Reading the Blog</a>

                        </div>


                @endforeach
            </div>


        </div>
    </div>

@endsection






