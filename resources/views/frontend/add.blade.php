@extends('../layouts.app')

@section('content')
    <div class="col-md-7">
        @include('partials.error')
        @include('partials.success')
    </div>
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-md-4 pl-3">
                    <h3>Add Your Post</h3>
                </div>
                <div class="col-md-7 d-flex justify-content-end ">
                    <a href="/profile/{{Auth::user()->id}}" class="btn btn-outline-dark ">Goto Profile</a>
                </div>

            </div>
            <hr>
            <div class="row">
                <div class="col-md-8 pl-3">
                    <form action="/createpost" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Your Post Title">
                        </div>
                        <div class="form-group">
                            <label for="">Your Post</label>
                            <textarea name="content" class="form-control" rows="15" placeholder="Your Post" wrap="hard"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>


                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
