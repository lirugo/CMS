@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="notification is-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title has-text-centered">Forgot Password?</h1>
                    <div class="field">
                        {!! Form::open(['route' => 'password.email', 'method' => 'POST']) !!}

                            {!! Form::text('email', null, ['class' => 'input' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'email@domain.com', 'required']) !!}
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif

                            {!! Form::submit('Get Reset Link',['class' => 'button is-success is-outlined is-fullwidth m-t-20']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <h5 class="has-text-centered m-t-10"><a href="{{route('login')}}" class="is-muted"><i class="fa fa-caret-left"></i> Back to Login</a></h5>
        </div>
    </div>

@endsection
