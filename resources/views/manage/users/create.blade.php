@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Create New User</h1>
            </div>
        </div>
        <div class="columns">
            <div class="column is-one-third">
                {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                    <div class="field">
                        <div class="control has-icons-left has-icons-right m-b-10">
                            {!! Form::text('name', null, ['class' => 'input' . ($errors->has('name') ? ' is-danger' : ''), 'placeholder' => 'User name', 'required']) !!}
                            <span class="icon is-small is-left"><i class="fa fa-user-circle-o"></i></span>
                            @if($errors->has('name'))
                                <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                                <p class="help is-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field">
                        <div class="control has-icons-left has-icons-right m-b-10">
                            {!! Form::text('email', null, ['class' => 'input' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'email@domain.com', 'required']) !!}
                            <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                            @if($errors->has('email'))
                                <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                                <p class="help is-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="field" v-if='!auto_password'>
                        <div class="control has-icons-left has-icons-right m-b-10">
                            {!! Form::password('password', ['class' => 'input' . ($errors->has('email') ? ' is-danger' : ''), 'placeholder' => 'Enter Your Password', 'required']) !!}
                            <span class="icon is-small is-left"><i class="fa fa-key"></i></span>
                            @if($errors->has('password'))
                                <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                                <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                    </div>

                    <b-checkbox name="auto_generate" class="m-b-10" type="is-success" :checked="true" v-model="auto_password">Auto-Generate Password</b-checkbox>

                    <div class="field is-grouped">
                        <div class="control">
                            {!! Form::submit('Create User',['class' => 'button is-success is-outlined']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true
            }
        })
    </script>
@endsection