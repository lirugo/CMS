@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Add New Blog Post</h1>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                {!! Form::open() !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {}
        })
    </script>
@endsection