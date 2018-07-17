@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Posts index</h1>
            </div>
            <div class="column">
                <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i>Create Post</a>
            </div>
        </div>
    </div>
@endsection
