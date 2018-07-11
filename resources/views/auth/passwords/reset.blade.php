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
                    <h1 class="title has-text-centered">Reset Your Password</h1>
                    <div class="field">
                        {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}

                        {!! Form::hidden('token', $token) !!}

                        {!! Form::text('name', null, ['class' => 'input' . ($errors->has('name') ? ' is-danger' : ''), 'placeholder' => 'Your name', 'required']) !!}
                        @if($errors->has('name'))
                            <p class="help is-danger">{{$errors->first('name')}}</p>
                        @endif

                        {!! Form::text('email', null, ['class' => 'input m-t-10' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'email@domain.com', 'required']) !!}
                        @if($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif

                        <div class="columns">
                            <div class="column">
                                {!! Form::password('password', ['class' => 'input m-t-10' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'Password', 'required']) !!}
                                @if($errors->has('password'))
                                    <p class="help is-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                            <div class="column">
                                {!! Form::password('password_confirmation', ['class' => 'input m-t-10' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'Confirm Password', 'required']) !!}
                                @if($errors->has('password_confirmation'))
                                    <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                @endif
                            </div>
                        </div>

                        {!! Form::submit('Reset Password',['class' => 'button is-primary is-outlined is-fullwidth m-t-10']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <h5 class="has-text-centered m-t-10"><a href="{{route('login')}}" class="is-muted">Already have an Account?</a></h5>
        </div>
    </div>

@endsection
