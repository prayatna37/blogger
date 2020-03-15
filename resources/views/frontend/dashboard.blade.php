@extends('../layouts.app')

@section('content')
    <div class="col-md-12">
        @include('partials.success')
        @include('partials.error')
    </div>
    <div class="container-fluid">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h1>Your Dashboard Page</h1>
                </div>
                <div class="col-md-12 pt-2 heading-content">
                    <a href="/addposts" class="btn btn-primary">Start Writing</a>
                    <a href="/profile/{{Auth::user()->id}}" class="btn btn-primary">Your Profile</a>
                    <a href="/view" class="btn btn-primary mt-2">View Other User Posts</a>
                </div>
            </div>
        </div>
    </div>

@endsection
