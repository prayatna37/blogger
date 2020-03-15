@extends('../layouts.app')

@section('content')
    <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-md-12 ">
                        <h1>{{$post->title}}</h1>

                        <hr>
                        <div class="col-md-6 post-information">
                            <b><i>Author: {{$post->user->name}}</i><br>
                                <i>Written On: {{$post->created_at->format('Y/m/d')}}</i></b>
                        </div>
                        <div class="col-md-12 mt-4 blog-content">
                            <p>{{$post->content}}</p>
                        </div>
                        @if(Auth::user()->id==$post->user_id)
                        <div class=" col-md-12 mt-4 post-options">
                            <form action=" {{route('post.destroy',[$post->id]) }} " method="POST">
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-danger" type="submit">Delete</button>
                                <a href="/post/{{$post->id}}/edit" class="btn btn-warning ">Update</a>
                                <a href="/profile/{{Auth::user()->id}}" class="btn btn-primary">Profile</a>
                                {{csrf_field()}}
                            </form>

                        </div>
                    </div>

                </div>


            </div>

        @endif
    </div>

@endsection
