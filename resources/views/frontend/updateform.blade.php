@extends('../layouts.app')

@section('content')
    <div class="col-md-7">
        @include('partials.error')
        @include('partials.success')
    </div>
    <div class="container-fluid">

        @if(Auth::user()->id==$post->user_id)
        <div class="content">
            <div class="row">
                <div class="col-md-4 ml-3">
                    <h3>Update Your Post</h3>
                </div>


            </div>
            <hr>
            <div class="row">
                <div class="col-md-8 ml-3">
                    <form action="/posts/{{$post->id}}/editsubmit" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" required class="form-control" name="title" placeholder="" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Your Post</label>
                            <textarea name="content" required class="form-control" rows="15" placeholder="Update Your Post" wrap="hard">{{$post->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="/posts/{{$post->id}}" class="btn btn-secondary ml-3">Go Back</a>

                        </div>
                    </form>
                </div>
            </div>

        </div>
            @else
        <h1 class="d-flex justify-content-center">Error! Not Your Post</h1>
            @endif
    </div>

@endsection
