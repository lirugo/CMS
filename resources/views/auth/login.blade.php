@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title has-text-centered">Sign in</h1>
                    <div class="field">
                        {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}

                            <div class="control has-icons-left has-icons-right m-b-10">
                                {!! Form::text('email', null, ['class' => 'input' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'email@domain.com', 'required']) !!}
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                @if($errors->has('email'))
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </span>
                                    <p class="help is-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>

                            <div class="control has-icons-left has-icons-right m-b-10">
                                {!! Form::password('password', ['class' => 'input' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'Enter Your Password', 'required']) !!}
                                <span class="icon is-small is-left">
                                    <i class="fa fa-key"></i>
                                </span>
                                @if($errors->has('email'))
                                    <span class="icon is-small is-right">
                                        <i class="fa fa-exclamation-triangle"></i>
                                    </span>
                                    <p class="help is-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>

                            <b-checkbox name="remember" type="is-success">Remember Me?</b-checkbox>

                            {!! Form::submit('Sign in',['class' => 'button is-success is-outlined is-fullwidth m-t-10']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <h5 class="has-text-centered m-t-10"><a href="{{route('password.request')}}" class="is-muted">Forgot your password?</a></h5>
        </div>
    </div>
@endsection
