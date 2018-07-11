@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title has-text-centered">Sign in</h1>
                    <div class="field">
                        {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}

                            {!! Form::text('email', null, ['class' => 'input' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'email@domain.com', 'required']) !!}
                            @if($errors->has('email'))
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif

                            {!! Form::password('password', ['class' => 'input m-t-10' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'password', 'required']) !!}
                            @if($errors->has('password'))
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif

                            <b-checkbox name="remember" class="m-t-15" type="is-success">Remember Me?</b-checkbox>

                            {!! Form::submit('Sign in',['class' => 'button is-success is-outlined is-fullwidth m-t-10']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <h5 class="has-text-centered m-t-10"><a href="{{route('password.request')}}" class="is-muted">Forgot your password?</a></h5>
        </div>
    </div>
@endsection
