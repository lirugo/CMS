@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">View Permission Details</h1>
            </div> <!-- end of column -->
        </div>

        <div class="columns">
            <div class="column is-one-third">
                {!! Form::open(['route' => ['permissions.update', $permission->id], 'method' => 'PUT']) !!}

                <div class="control has-icons-left has-icons-right m-b-10">
                    {!! Form::text('display_name', $permission->display_name, ['class' => 'input' . ($errors->has('display_name') ? ' is-danger' : ''), 'placeholder' => 'Display Name', 'required']) !!}
                    <span class="icon is-small is-left"><i class="fa fa-user-circle-o"></i></span>
                    @if($errors->has('display_name'))
                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                        <p class="help is-danger">{{$errors->first('display_name')}}</p>
                    @endif
                </div>

                <div class="control has-icons-left has-icons-right m-b-10">
                    {!! Form::text('name', $permission->name, ['class' => 'input is-warning' . ($errors->has('name') ? ' is-danger' : ''), 'placeholder' => 'Slug', 'disabled']) !!}
                    <span class="icon is-small is-left"><i class="fa fa-database"></i></span>
                    @if($errors->has('name'))
                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                        <p class="help is-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>

                <div class="control has-icons-left has-icons-right m-b-10">
                    {!! Form::text('description', $permission->description, ['class' => 'input' . ($errors->has('description') ? ' is-danger' : ''), 'placeholder' => 'Description', 'required']) !!}
                    <span class="icon is-small is-left"><i class="fa fa-align-justify"></i></span>
                    @if($errors->has('description'))
                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                        <p class="help is-danger">{{$errors->first('description')}}</p>
                    @endif
                </div>

                {!! Form::submit('Save Changes',['class' => 'button is-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection